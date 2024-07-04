<?php

use App\Http\Controllers\ConfigSistema;

?>
@extends('admin.layouts.master')
@section('title')
@endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('admin.components.breadcrumb')
            @slot('li_1') Reportes @endslot
            @slot('title') Vacantes @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body pb-2">
                <div class="d-flex align-items-start mb-4 mb-xl-0">
                    <div class="flex-grow-1">
                        <h5 class="card-title">Vacantes</h5>
                    </div>                    
                </div>

                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="card bg-light mb-0">
                            <div class="card-body">
                                <div class="py-2">
                                    <h5>Vacantes activas:</h5>
                                    <h2 class="mt-4 pt-1 mb-1">
                                        {{ ConfigSistema::moneyFormat($data['vacantes_activas'],0) }}
                                    </h2>
                                    <p class="text-muted font-size-15 text-truncate"></p>

                
                                    <div class="row mt-4">                                                                                
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div>
                            <div id="registrados_estudiantes" data-colors='["--bs-primary", "--bs-primary-rgb, 0.2"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-2">Estado</h5>
                    </div>
                </div>

                <div id="chart-tipo"  class="apex-charts" dir="ltr"></div>
                <div class="mt-1 px-2">
                    @foreach($data['vacantes_estado']['labels'] as $k => $label)
                        <div class="order-wid-list d-flex justify-content-between border-bottom">
                            <p class="mb-0">
                                <i class="mdi mdi-square-rounded font-size-10 me-2" style="color:{{ $data['vacantes_estado']['colores'][$k]  }}"></i>
                                {{ $label }}
                            </p>
                            <div>
                                <span class="pe-5">
                                    {{ ConfigSistema::moneyFormat($data['vacantes_estado']['num'][$k],0) }}
                                </span>
                            </div>
                        </div>
                    @endforeach 
                </div>

            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-2">Motivo de cierre</h5>
                    </div>
                </div>

                <div id="chart-programa"  class="apex-charts" dir="ltr"></div>
                <div class="mt-1 px-2">
                    @foreach($data['vacantes_mc']['labels'] as $k => $label)
                        <div class="order-wid-list d-flex justify-content-between border-bottom">
                            <p class="mb-0">
                                <i class="mdi mdi-square-rounded font-size-10 me-2" style="color:{{ $data['vacantes_mc']['colores'][$k]  }}"></i>
                                {{ $label }}
                            </p>
                            <div>
                                <span class="pe-5">
                                    {{ ConfigSistema::moneyFormat($data['vacantes_mc']['num'][$k],0) }}
                                </span>
                            </div>
                        </div>
                    @endforeach 
                </div>

            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-2">Tipo empleo</h5>
                    </div>
                </div>

                <div id="chart-templeo"  class="apex-charts" dir="ltr"></div>
                <div class="mt-1 px-2">
                    @foreach($data['vacantes_templeo']['labels'] as $k => $label)
                        <div class="order-wid-list d-flex justify-content-between border-bottom">
                            <p class="mb-0">
                                <i class="mdi mdi-square-rounded font-size-10 me-2" style="color:{{ $data['vacantes_templeo']['colores'][$k]  }}"></i>
                                {{ $label }}
                            </p>
                            <div>
                                <span class="pe-5">
                                    {{ ConfigSistema::moneyFormat($data['vacantes_templeo']['num'][$k],0) }}
                                </span>
                            </div>
                        </div>
                    @endforeach 
                </div>

            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-2">Carrera profesional</h5>
                    </div>
                </div>

                <div id="chart-carrera"  class="apex-charts" dir="ltr"></div>
                <div class="mt-1 px-2">
                    @foreach($data['vacantes_carrera']['labels'] as $k => $label)
                        <div class="order-wid-list d-flex justify-content-between border-bottom">
                            <p class="mb-0">
                                <i class="mdi mdi-square-rounded font-size-10 me-2" style="color:{{ $data['vacantes_carrera']['colores'][$k]  }}"></i>
                                {{ $label }}
                            </p>
                            <div>
                                <span class="pe-5">
                                    {{ ConfigSistema::moneyFormat($data['vacantes_carrera']['num'][$k],0) }}
                                </span>
                            </div>
                        </div>
                    @endforeach 
                </div>

            </div>
        </div>
    </div>

</div><!-- end row-->




@endsection

@section('script')
<!-- apexcharts -->

<script src="{{ URL::asset('admin-assets/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<!-- Vector map-->
<script src="{{ URL::asset('admin-assets/assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('admin-assets/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>
<!-- swiper js -->
<script src="{{ URL::asset('admin-assets/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{ URL::asset('admin-assets/assets/js/app.js') }}"></script>

@endsection

@section('script-bottom')
    <script type="text/javascript">
        function getChartColorsArray(chartId) {
          if (document.getElementById(chartId) !== null) {
            var colors = document.getElementById(chartId).getAttribute("data-colors");
            colors = JSON.parse(colors);
            return colors.map(function (value) {
              var newValue = value.replace(" ", "");

              if (newValue.indexOf(",") === -1) {
                var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
                if (color) return color;else return newValue;
                ;
              } else {
                var val = value.split(',');

                if (val.length == 2) {
                  var rgbaColor = getComputedStyle(document.documentElement).getPropertyValue(val[0]);
                  rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
                  return rgbaColor;
                } else {
                  return newValue;
                }
              }
            });
          }
        } 
        var chartBarColors = getChartColorsArray("registrados_estudiantes");
        var options = {
          chart: {
            height: 410,
            type: 'bar',
            toolbar: {
              show: false
            }
          },
          plotOptions: {
            bar: {
              borderRadius: 3,
              horizontal: false,
              columnWidth: '64%',
              endingShape: 'rounded'
            }
          },
          dataLabels: {
            enabled: false
          },
          stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
          },
          series: [{
            name: 'Registrados',
            data: [ {!! implode(',',$data['vacantes_activas_g1']['num']) !!} ]
          }],
          colors: chartBarColors,
          // colors: ["#776acf", "#e4e1f5"],
          xaxis: {
            categories: [ {!! "'".implode("','",$data['vacantes_activas_g1']['cat'])."'" !!} ],
             title: {
                text: 'Aceptadas por mes'
            }
          },           
          grid: {
            borderColor: '#f1f1f1'
          },
          fill: {
            opacity: 1
          },
          legend: {
            show: false
          },
          tooltip: {
            y: {
              formatter: function formatter(val) {
                return  val ;
              }
            }
          }
        };
        
        var chart = new ApexCharts(document.querySelector("#registrados_estudiantes"), options);
        chart.render(); 
        
        var options = {
          chart: {
            height: 287,
            type: 'donut'
          },
          plotOptions: {
            pie: {
              donut: {
                size: '75%'
              }
            }
          },
          dataLabels: {
            enabled: false
          },
          series: [ {!! implode(',',$data['vacantes_mc']['num']) !!} ],
          labels: [ {!! "'".implode("','",$data['vacantes_mc']['labels'])."'" !!} ],
          colors: [ {!! "'".implode("','",$data['vacantes_mc']['colores'])."'" !!}  ],
          legend: {
            show: false
          }
        };
        var chart = new ApexCharts(document.querySelector("#chart-programa"), options);
        chart.render(); // sparkline-1


        var options = {
          chart: {
            height: 287,
            type: 'donut'
          },
          plotOptions: {
            pie: {
              donut: {
                size: '75%'
              }
            }
          },
          dataLabels: {
            enabled: false
          },
          series: [ {!! implode(',',$data['vacantes_estado']['num']) !!} ],
          labels: [ {!! "'".implode("','",$data['vacantes_estado']['labels'])."'" !!} ],
          colors: [ {!! "'".implode("','",$data['vacantes_estado']['colores'])."'" !!}  ],
          legend: {
            show: false
          }
        };
        var chart = new ApexCharts(document.querySelector("#chart-tipo"), options);
        chart.render(); // sparkline-1


        var options = {
          chart: {
            height: 287,
            type: 'donut'
          },
          plotOptions: {
            pie: {
              donut: {
                size: '75%'
              }
            }
          },
          dataLabels: {
            enabled: false
          },
          series: [ {!! implode(',',$data['vacantes_templeo']['num']) !!} ],
          labels: [ {!! "'".implode("','",$data['vacantes_templeo']['labels'])."'" !!} ],
          colors: [ {!! "'".implode("','",$data['vacantes_templeo']['colores'])."'" !!}  ],
          legend: {
            show: false
          }
        };
        var chart = new ApexCharts(document.querySelector("#chart-templeo"), options);
        chart.render(); // sparkline-1

        var options = {
          chart: {
            height: 287,
            type: 'donut'
          },
          plotOptions: {
            pie: {
              donut: {
                size: '75%'
              }
            }
          },
          dataLabels: {
            enabled: false
          },
          series: [ {!! implode(',',$data['vacantes_carrera']['num']) !!} ],
          labels: [ {!! "'".implode("','",$data['vacantes_carrera']['labels'])."'" !!} ],
          colors: [ {!! "'".implode("','",$data['vacantes_carrera']['colores'])."'" !!}  ],
          legend: {
            show: false
          }
        };
        var chart = new ApexCharts(document.querySelector("#chart-carrera"), options);
        chart.render(); // sparkline-1


    </script>
@endsection

