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
          @if (!$calon==null && !$hasil==null)
              <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">how_to_vote</i>
                  </div>
                  <p class="card-category">Suara Masuk</p>
                  <h3 class="card-title">{{$count_pemilihan}}
                    <small>Suara</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger"></i>
                    <a href="#pablo"> </a>
                  </div>
                </div>
              </div>
            </div>
            @foreach ($data_suara as $i)
                <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">how_to_vote</i>
                  </div>
                <p class="card-category">Suara {{$i->nama}}</p>
                  <h3 class="card-title"> {{$i->suara}}<small> Suara</small></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons"></i>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <div class="card card-chart">
                          <div class="card-header card-header-warning">
                          <canvas id="canvas" style="color:aliceblue"></canvas>
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
          @else
              
          @endif
      </div>
        </div>
      </div>
      
@endsection
@section('timer')
    <script>
   Chart.defaults.global.defaultFontColor = "#fff";
		var color = Chart.helpers.color;
		var barChartData = {
			labels: JSON.parse({!! json_encode($calon) !!}),
			datasets: [{
                        barPercentage: 0.5,
                        barThickness: 100,
                        maxBarThickness: 100,
                        minBarLength: 2,
                        data: JSON.parse({!! json_encode($hasil) !!}),
                        backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                        
                        ]
                    }]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					legend: {
						position: 'top',
					},
                    scaleFontColor: "#FFFFFF",
					title: {
						display: true,
						text: 'Hasil pemilihan'
					},
                    scales: {
                    xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true
                            }
                        }],
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,
                               
                            }
                        }]
                    }
				}
			});

		};
  </script>
@endsection