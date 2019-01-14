@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">{{__($name)}}</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="ti ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">{{__('Statistics')}}</a></li>
                            <li class="breadcrumb-item active">{{__($name)}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row flex-row">
            <div class="col-xl-6">
                <div class="widget widget-21 has-shadow">
                    <div class="widget-body h-100 d-flex align-items-center">
                        <div class="section-title">
                            <h3>{{__('Last Oximetry Reading')}}</h3>
                        </div>
                        <div class="hit-rate"><canvas width="140" height="140"></canvas>
                            <div class="percent">{{$values->last()->value_oximetry}}<i>%</i></div>
                        </div>
                        @if($values->last()->value_oximetry >= 95)
                            <div class="value-progress text-green">{{__('In Control')}}</div>
                        @else
                            <div class="value-progress text-danger">{{__('Out of Control')}}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="widget widget-21 has-shadow">
                    <div class="widget-body h-100 d-flex align-items-center">
                        <div class="section-title">
                            <h3>{{__('Last Pulse Reading')}}</h3>
                        </div>
                        <div class="hit-rate"><canvas width="140" height="140"></canvas>
                            <div class="percent">{{$values->last()->value_pulse}}<i>bpm</i></div>
                        </div>
                        @if($values->last()->value_pulse >= 60 && $values->last()->value_pulse <= 100)
                            <div class="value-progress text-green">{{__('In Control')}}</div>
                        @else
                            <div class="value-progress text-danger">{{__('Out of Control')}}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row flex-row">
            <div class="col-xl-12">
                <!-- Line Chart 01 -->
                <div class="widget has-shadow">

                    <div class="widget-body">
                        <div class="chart">
                            <canvas id="line-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row flex-row">
            <div class="col-xl-12">
                <div class="widget has-shadow">
                    <div class="widget-header bordered no-actions d-flex align-items-center">
                        <h4>{{__('Measured Values')}}</h4>
                    </div>
                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="export-table" class="table mb-0">
                                <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>{{__('Oximetry Value')}} (%)</th>
                                    <th>{{__('Pulse Value')}} (bpm)</th>
                                    <th>{{__('Control Information')}}</th>
                                    <th>{{__('Date/Time')}}</th>
                                    <th>{{__('Actions')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($values as $val)
                                <tr>
                                    <td><span class="text-primary">{{$val->id}}</span></td>
                                    <td>{{$val->value_oximetry}}</td>
                                    <td>{{$val->value_pulse}}</td>
                                    @if($val->value_oximetry >= 95 && $val->value_oximetry >= 60 && $val->value_oximetry <= 100)
                                    <td><span style="width:200px;"><span class="badge-text badge-text-small success">{{__('In Control')}}</span></span></td>
                                    @else
                                    <td><span style="width:200px;"><span class="badge-text badge-text-small danger">{{__('Out of Control')}}</span></span></td>
                                    @endif
                                    <td>{{$val->created_at}}</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit"></i></a>
                                        <a href="#"><i class="la la-close"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- End Page Vendor Js -->
    <!-- Begin Page Snippets -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="{{asset('assets/vendors/js/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/vendors/js/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/vendors/js/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('assets/vendors/js/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/vendors/js/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/vendors/js/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/vendors/js/datatables/buttons.print.min.js')}}"></script>

    <script src="{{asset('assets/vendors/js/nicescroll/nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/vendors/js/app/app.min.js')}}"></script>
    <!-- End Page Vendor Js -->
    <!-- Begin Page Snippets -->
    <script src="{{asset('assets/js/components/tables/tables.js')}}"></script>

    <script>
        var ctx = document.getElementById('line-chart').getContext("2d");

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($date) !!},
                datasets: [{
                    label: "{{__('Cardiac Pulse')}} (bpm)",
                    borderColor: "#2c304d",
                    pointBackgroundColor: "#2c304d",
                    pointHoverBorderColor: "#2c304d",
                    pointHoverBackgroundColor: "#2c304d",
                    pointBorderColor: "#fff",
                    pointBorderWidth: 3,
                    fill: false,
                    pointRadius: 6,
                    borderWidth: 3,
                    data: {!! json_encode($pulse) !!}
                }]
            },
            options: {
                legend: {
                    display: true,
                    position: 'top',
                    labels: {
                        fontColor: "#2e3451",
                        usePointStyle: true,
                        fontSize: 13
                    }
                },
                tooltips: {
                    backgroundColor: 'rgba(47, 49, 66, 0.8)',
                    titleFontSize: 13,
                    titleFontColor: '#fff',
                    caretSize: 0,
                    cornerRadius: 4,
                    xPadding: 10,
                    displayColors: false,
                    yPadding: 10
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            display: true,
                            beginAtZero: false
                        },
                        gridLines: {
                            drawBorder: true,
                            display: true
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawBorder: true,
                            display: true
                        },
                        ticks: {
                            display: true
                        }
                    }]
                }
            }
        });
    </script>
@endsection