<!--
 =========================================================
 * Material Kit - v2.0.6
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-kit
 * Copyright 2019 Creative Tim (http://www.creative-tim.com)
   Licensed under MIT (https://github.com/creativetimofficial/material-kit/blob/master/LICENSE.md)


 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href={{asset('pemilih/assets/img/apple-icon.png')}}>
  <link rel="icon" type="image/png" href={{asset('pemilih/assets/img/favicon.png')}}>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Musma Focus 2020
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href={{asset('pemilih/assets/css/material-kit.css?v=2.0.6')}} rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href={{asset('pemilih/assets/demo/demo.css')}} rel="stylesheet" />
 
</head>

<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
          <button class="btn btn-primary btn-round" style=" !important" onclick="location.href='/'">
                     <i class="material-icons">keyboard_backspace</i> 
                   </button>  
        <a class="navbar-brand" href="/">
          Musma Focus 2020 </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/logout/pemilih">
              <i class="material-icons">exit_to_app</i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url({{asset('pemilih/assets/img/profile_city.jpg')}})">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="title text-center" id="demo">Live count</h1>
            <div class="row">
              <div class="col-md-2">
                
              </div>
            </div>
          <br>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">

     
        @if (!$calon==null && !$hasil==null)
          <div class="section text-center">
            <div class="row">
            <div class="col-md-9 ml-auto mr-auto">
              <div class="card card-chart">
                          <div class="card-header card-header-rose">
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
        </div>
        @else
            <div class="row">
                            <div class="col-md-12">
                              <div class="alert alert-danger">
							                  <div>Data kosong</div>
					                  	</div>
                            </div>
                        </div>
        @endif
      
      
      <div class="section section-contacts">

      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
     
      
    </div>
  </footer>
  <!--   Core JS Files   -->
  
  <script src={{asset('pemilih/assets/js/core/jquery.min.js')}} type="text/javascript"></script>
  <script src={{asset('pemilih/assets/js/core/popper.min.js')}} type="text/javascript"></script>
  <script src={{asset('pemilih/assets/js/core/bootstrap-material-design.min.js')}} type="text/javascript"></script>
  <script src={{asset('pemilih/assets/js/plugins/moment.min.js')}}></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src={{asset('pemilih/assets/js/plugins/bootstrap-datetimepicker.js')}} type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src={{asset('pemilih/assets/js/plugins/nouislider.min.js')}} type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src={{asset('pemilih/assets/js/material-kit.js?v=2.0.6')}} type="text/javascript"></script>
  {{-- <!-- Chartist JS -->
  <script src={{asset('admin/assets/js/plugins/chartist.min.js')}}></script> --}}
  <script src={{asset('pemilih/assets/js/dist/Chart.min.js')}} type="text/javascript"></script>
  <script src={{asset('pemilih/assets/js/dist/utils.js')}} type="text/javascript"></script>
  <!-- Plugin for the momentJs  -->
  <script src={{asset('admin/assets/js/plugins/moment.min.js')}}></script>
  
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

</body>

</html>
