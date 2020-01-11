@extends('admin.app')
@section('title')
    Hasil Pemilihan
@endsection
@section('nav-chart')
    active
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                
                    <div class="card card-chart">
                        <div class="card-header card-header-warning">
                        <div class="ct-chart" id="websiteViewsChart"></div>
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Hasil Pemilihan</h4>
                        <p class="card-category">Waktu</p>
                        </div>
                        <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> time stamp
                        </div>
                        </div>
                    
                    </div>
            </div>
            
          </div>
        </div>
      </div>
      
@endsection
@section('timer')
    <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
        var dataWebsiteViewsChart = {
        labels: JSON.parse({!! json_encode($calon) !!}),
        series: [
          JSON.parse({!! json_encode($hasil) !!})

        ]
      };
      var optionsWebsiteViewsChart = {
        axisX: {
          showGrid: false
        },
        low: 0,
        chartPadding: {
          top: 0,
          right: 0,
          bottom: 0,
          left: 0
        },
        scales:{
          xAxes:[{
            barThickness:6,
          }]
        }
      };
      var responsiveOptions = [
        ['screen and (max-width: 640px)', {
          seriesBarDistance: 5,
          axisX: {
            labelInterpolationFnc: function(value) {
              return value[0];
            }
          }
        }]
      ];
      var websiteViewsChart = Chartist.Bar('#websiteViewsChart', dataWebsiteViewsChart, optionsWebsiteViewsChart, responsiveOptions);

      //start animation for the Emails Subscription Chart
      md.startAnimationForBarChart(websiteViewsChart); 
  

    });
  </script>
@endsection