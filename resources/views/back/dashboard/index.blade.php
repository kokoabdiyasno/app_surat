@extends('back.layout.template')

@section('title', 'Admin - Dashboard')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>

        <div class="row">
            <p><b>Total Seluruh Surat : {{ $total_surat }}</b></p>

            <div class="col-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Surat Belum Menikah</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Jumlah Surat : {{ $total_belum_menikah }}</h5>
                        <p class="card-text">
                            Belum Dikonfirmasi : {{ $konfirmasi_belum_menikah }}<br>
                            Ditolak : {{ $ditolak_belum_menikah }}<br>
                            Diproses : {{ $proses_belum_menikah }}<br>
                            Selesai : {{ $selesai_belum_menikah }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Surat KTP Sementara/Domisili</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Jumlah Surat : {{ $total_ktp_domisili }}</h5>
                        <p class="card-text">
                            Belum Dikonfirmasi : {{ $konfirmasi_ktp_domisili }}<br>
                            Ditolak : {{ $ditolak_ktp_domisili }}<br>
                            Diproses : {{ $proses_ktp_domisili }}<br>
                            Selesai : {{ $selesai_ktp_domisili }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">Surat Kematian</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Jumlah Surat : {{ $total_kematian }}</h5>
                        <p class="card-text">
                            Belum Dikonfirmasi : {{ $konfirmasi_kematian }}<br>
                            Ditolak : {{ $ditolak_kematian }}<br>
                            Diproses : {{ $proses_kematian }}<br>
                            Selesai : {{ $selesai_kematian }}
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <hr>

        <div class="row mb-5">
            <div class="col-3"></div>

            <div class="col-6">
                <canvas id="dashboardChart"></canvas>
            </div>

            <div class="col-3"></div>
        </div>

        <br>
    </main>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('dashboardChart');

        const data = {
            labels: [
                'Belum Menikah',
                'KTP Sementara/Domisili',
                'Kematian'
            ],
            datasets: [{
                label: 'Total Surat : ',
                data: [{{ $total_belum_menikah }}, {{ $total_ktp_domisili }}, {{ $total_kematian }}],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };

        const chart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: {
                onClick: (e) => {
                    const canvasPosition = getRelativePosition(e, chart);

                    // Substitute the appropriate scale IDs
                    const dataX = chart.scales.x.getValueForPixel(canvasPosition.x);
                    const dataY = chart.scales.y.getValueForPixel(canvasPosition.y);
                }
            }
        });
    </script>
@endpush
