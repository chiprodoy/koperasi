@extends('layouts.app')
@section('content')
    @push('css')
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/viho/assets/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/viho/assets/css/chartist.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/viho/assets/css/owlcarousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/viho/assets/css/prism.css') }}">
    @endpush

    <div class="container-fluid">
        <div class="col-xl-12 col-md-12 des-xl-100 box-col-12">
            <div class="row">
                <div class="col-xl-3 col-sm-6 box-col-3 chart_data_right">
                    <div class="card income-card card-secondary">
                        <div class="card-body align-items-center">
                            <div class="round-progress knob-block text-center">
                                <div class="progress-circle">
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#ba895d"
                                        data-bgcolor="#e0e9ea" value="60">
                                </div>
                                <h5>{{ $postLiked }}</h5>
                                <p>Total Like</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 box-col-3 chart_data_right second">
                    <div class="card income-card card-primary">
                        <div class="card-body">
                            <div class="round-progress knob-block text-center">
                                <div class="progress-circle">
                                    <input class="knob1" data-width="50" data-height="70" data-thickness=".3"
                                        data-fgcolor="#24695c" data-linecap="round" data-angleoffset="0"
                                        value="60">
                                </div>
                                <h5>{{ $postViewer }}</h5>
                                <p>Total View</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 box-col-3 chart_data_right">
                    <div class="card income-card card-secondary">
                        <div class="card-body align-items-center">
                            <div class="round-progress knob-block text-center">
                                <div class="progress-circle">
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#ba895d"
                                        data-bgcolor="#e0e9ea" value="60">
                                </div>
                                <h5>{{ $postShared }}</h5>
                                <p>Total Share</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 box-col-3 chart_data_right">
                    <div class="card income-card card-secondary">
                        <div class="card-body align-items-center">
                            <div class="round-progress knob-block text-center">
                                <div class="progress-circle">
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#ba895d"
                                        data-bgcolor="#e0e9ea" value="60">
                                </div>
                                <h5>{{$totalAnggota}}</h5>
                                <p>Anggota Aktif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 box-col-12 des-xl-100 invoice-sec">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top d-sm-flex justify-content-between align-items-center">
                            <h5>Hasil Panen</h5>

                        </div>
                    </div>
                    <div class="card-body p-0">
                        <canvas id="totalPanenChart" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 box-col-12 des-xl-100 invoice-sec">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top d-sm-flex justify-content-between align-items-center">
                            <h5>Harga Sawit</h5>
                        </div>
                    </div>
                    <div class="card-body p-3">
                         <canvas id="hargaSawitChart" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <section class="py-5 " id="statistik">
            <div class="row text-center g-4">
                @foreach ($statistikKoperasi as $statistik)
                    <div class="col-md-4">
                        <div class="counter-box bg-white p-4 shadow rounded-4">
                        <div class="icon mb-3 text-success" style="font-size: 2.5rem;"><i class="{{$statistik->icon}}"></i></div>
                        <h3 class="fw-bold"><span class="counter" data-target="{{$statistik->jumlah}}">0</span></h3>
                        <p class="text-muted">{{$statistik->label}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
    @push('scripts')

    <script src="{{asset('theme/viho/assets/js/chart/knob/knob.min.js')}}"></script>


    <script src="{{asset('theme/viho/assets/js/dashboard/dashboard_2.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('totalPanenChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($dataChartHasilPanen['labels']) !!},
                datasets: [{
                    label: 'Total Panen (Ton)',
                    data: {!! json_encode($dataChartHasilPanen['totals']) !!},
                    fill: true,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    tension: 0.3, // garis agak melengkung
                    pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                    pointRadius: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.parsed.y.toLocaleString() + ' Ton';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return value.toLocaleString() + ' Ton';
                            }
                        }
                    }
                }
            }
        });

        const hargaSawitctx = document.getElementById('hargaSawitChart').getContext('2d');
        new Chart(hargaSawitctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($dataChartHargaSawit['dates']) !!},
                datasets: {!! json_encode($dataChartHargaSawit['datasets']) !!}
            },
            options: {
                responsive: true,
                interaction: { mode: 'index', intersect: false },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': Rp ' + context.parsed.y.toLocaleString();
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        ticks: {
                            callback: function(value) {
                                return 'Rp ' + value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });
    </script>
        <script>
        const counters = document.querySelectorAll('.counter');
        const speed = 100;

        const animateCounters = () => {
            counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 10);
                } else {
                counter.innerText = target.toLocaleString('id-ID');
                }
            };

            updateCount();
            });
        };

        let shown = false;
        window.addEventListener('scroll', () => {
            const section = document.getElementById('statistik');
            const rect = section.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100 && !shown) {
            animateCounters();
            shown = true;
            }
        });
    </script>
@endpush
@endsection
