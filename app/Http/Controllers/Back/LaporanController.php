<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class LaporanController extends Controller
{
    public function laporan(Request $request, $tipe)
    {
        // download seluruh laporan
        // style cell
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ]
        ];

        $styleCenter = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ]
        ];

        $styleJudul = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
            'font' => [
                'bold' => true,
            ],
        ];

        if ($tipe == 'belum-menikah') {
            $tipe_surat = 1;
            $judul = 'Belum Menikah';
        } elseif ($tipe == 'ktp-domisili') {
            $tipe_surat = 2;
            $judul = 'KTP Sementara/Domisili';
        } elseif ($tipe == 'kematian') {
            $tipe_surat = 3;
            $judul = 'Kematian';
        }

        $tanggal_awal  = $request->tanggal_awal . ' ' . '00:00:00';
        $tanggal_akhir = $request->tanggal_akhir . ' ' . '23:59:59';

        $surats = DB::table('surats')->where('tipe', $tipe_surat)->whereBetween('created_at', [$tanggal_awal, $tanggal_akhir])->latest()->get();

        $spreadsheet = new Spreadsheet();
        $spreadsheet->getDefaultStyle()->getFont()->setName('Arial');
        $spreadsheet->getDefaultStyle()->getFont()->setSize(12);
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('B2', 'LAPORAN PENGAJUAN SURAT(' . $judul . ')')->mergeCells('B2:F2');

        $sheet->setCellValue('A4', 'No');
        $sheet->setCellValue('B4', 'Nama');
        $sheet->setCellValue('C4', 'Jenis Kelamin');
        $sheet->setCellValue('D4', 'Tanggal Lahir');
        $sheet->setCellValue('E4', 'Email');
        $sheet->setCellValue('F4', 'No Telepon');
        $sheet->setCellValue('G4', 'File KK');
        $sheet->setCellValue('H4', 'File Berkas Pendukung');
        $sheet->setCellValue('I4', 'File Hasil Surat');
        $sheet->setCellValue('J4', 'Alasan Ditolak');
        $sheet->setCellValue('K4', 'Catatan Dari Pemohon');
        $sheet->setCellValue('L4', 'Status');

        $x = 5;
        $no = 1;
        foreach ($surats as $data) {
            $sheet->setCellValue('A' . $x, $no++)->getColumnDimension('A')->setAutoSize(true);
            $sheet->setCellValue('B' . $x, $data->nama)->getColumnDimension('B')->setAutoSize(true);
            $sheet->setCellValue('C' . $x, $data->jenis_kelamin)->getColumnDimension('C')->setAutoSize(true);
            $sheet->setCellValue('D' . $x, date('d-m-Y', strtotime($data->tanggal_lahir)))->getColumnDimension('D')->setAutoSize(true);
            $sheet->setCellValue('E' . $x, $data->email)->getColumnDimension('E')->setAutoSize(true);
            $sheet->setCellValue('F' . $x, $data->no_telepon)->getColumnDimension('F')->setAutoSize(true);
            $sheet->setCellValue('G' . $x, asset('back/img/' . $data->upload_kk))->getColumnDimension('G')->setAutoSize(true);

            if ($data->berkas_pendukung) {
                $sheet->setCellValue('H' . $x, asset('back/img/' . $data->berkas_pendukung))->getColumnDimension('H')->setAutoSize(true);
            }

            if ($data->hasil_surat) {
                $sheet->setCellValue('I' . $x, asset('back/pdf/' . $data->hasil_surat))->getColumnDimension('I')->setAutoSize(true);
            }

            $sheet->setCellValue('J' . $x, $data->alasan_ditolak)->getColumnDimension('J')->setAutoSize(true);
            $sheet->setCellValue('K' . $x, $data->catatan)->getColumnDimension('K')->setAutoSize(true);

            if ($data->status == 0) {
                $sheet->setCellValue('L' . $x, 'Belum Dikonfirmasi')->getColumnDimension('L')->setAutoSize(true);
            } elseif ($data->status == 1) {
                $sheet->setCellValue('L' . $x, 'Ditolak')->getColumnDimension('L')->setAutoSize(true);
            } elseif ($data->status == 2) {
                $sheet->setCellValue('L' . $x, 'Diproses')->getColumnDimension('L')->setAutoSize(true);
            } elseif ($data->status == 3) {
                $sheet->setCellValue('L' . $x, 'Selesai')->getColumnDimension('L')->setAutoSize(true);
            }

            $x++;
        }

        // center kalimat dalam cell
        $sheet->getStyle('A4:L' . $x)->applyFromArray($styleCenter);
        $sheet->getStyle('B2:L2')->applyFromArray($styleJudul);

        // batas border per-cell
        $sheet->getStyle('A4:L' . ($x - 1))->applyFromArray($styleArray);

        $writer = new Xlsx($spreadsheet);
        $fileName = 'Laporan Surat (' . $judul . ').xlsx';
        $writer->save($fileName);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Length: ' . filesize($fileName));
        header('Content-Disposition: attachment;filename="' . $fileName . '"');
        readfile($fileName); // send file
        unlink($fileName); // delete file
        exit;
    }
}
