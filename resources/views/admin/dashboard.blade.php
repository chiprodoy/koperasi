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
                                <h5>984</h5>
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
                                <h5>455</h5>
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
                                <h5>984</h5>
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
                                <h5>984</h5>
                                <p>Total User</p>
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
                    <div class="card-body p-0">
                         <canvas id="hargaSawitChart" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="{{asset('theme/viho/assets/js/chart/chartjs/chart.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/chart/chartist/chartist.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/chart/knob/knob.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/chart/apex-chart/stock-prices.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/counter/counter-custom.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/owlcarousel/owl-custom.js')}}"></script>
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
@endpush
@endsection
