<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('back.dashboard.index', [
            'total_surat' => Surat::count(),
            'total_belum_menikah' => Surat::whereTipe(1)->count(),
            'total_ktp_domisili' => Surat::whereTipe(2)->count(),
            'total_kematian' => Surat::whereTipe(3)->count(),
            'konfirmasi_belum_menikah' => Surat::whereTipe(1)->whereStatus(0)->count(),
            'ditolak_belum_menikah' => Surat::whereTipe(1)->whereStatus(1)->count(),
            'proses_belum_menikah' => Surat::whereTipe(1)->whereStatus(2)->count(),
            'selesai_belum_menikah' => Surat::whereTipe(1)->whereStatus(3)->count(),
            'konfirmasi_ktp_domisili' => Surat::whereTipe(2)->whereStatus(0)->count(),
            'ditolak_ktp_domisili' => Surat::whereTipe(2)->whereStatus(1)->count(),
            'proses_ktp_domisili' => Surat::whereTipe(2)->whereStatus(2)->count(),
            'selesai_ktp_domisili' => Surat::whereTipe(2)->whereStatus(3)->count(),
            'konfirmasi_kematian' => Surat::whereTipe(3)->whereStatus(0)->count(),
            'ditolak_kematian' => Surat::whereTipe(3)->whereStatus(1)->count(),
            'proses_kematian' => Surat::whereTipe(3)->whereStatus(2)->count(),
            'selesai_kematian' => Surat::whereTipe(3)->whereStatus(3)->count(),
        ]);
    }
}
