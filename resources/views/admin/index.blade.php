@extends('admin.layouts.master')
@section('title')
@endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('admin.components.breadcrumb')
            @slot('li_1') Dashboard @endslot
            @slot('title') Bienvenido {{ Auth::user()->nombre }} ! @endslot
        @endcomponent
    @endsection

    @include('admin.dashboard')


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
        var chart = new ApexCharts(document.querySelector("#chart-vacantes"), options);
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
          series: [ {!! implode(',',$data['empresas_estado']['num']) !!} ],
          labels: [ {!! "'".implode("','",$data['empresas_estado']['labels'])."'" !!} ],
          colors: [ {!! "'".implode("','",$data['empresas_estado']['colores'])."'" !!}  ],
          legend: {
            show: false
          }
        };
        var chart = new ApexCharts(document.querySelector("#chart-empresas"), options);
        chart.render(); // sparkline-1

    </script>
@endsection
