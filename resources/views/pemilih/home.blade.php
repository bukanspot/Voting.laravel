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
    Musma Focus 2021
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href={{asset('pemilih/assets/css/material-kit.css?v=2.0.6')}} rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href={{asset('pemilih/assets/demo/demo.css')}} rel="stylesheet" />
  <style>
    
      .list li {
      display: inline-block;
      font-size: 1.5em;
      list-style-type: none;
      padding: 1em;
      text-transform: uppercase;
    }

    .list li span {
      display: block;
      font-size: 4.5rem;
      margin: 20px;
    }
    .list li p {
      display: block;
      font-size: 1rem;
      margin-right: 20px;
      margin-left: 20px;
    }
  </style>
</head>

<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/">
          Musma Focus 2021 </a>
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
          <h1 class="title text-center" id="demo">Batas Akhir Pemilihan</h1>
            <div class="row">
              <div class="col-md-2">
                
              </div>
                <div class="col-md-9 align-content-center">
                  <ul class="list">
                    <li><span id="days"></span><p>Hari</p></li>
                    <li><span id="hours"></span><p>Jam</p></li>
                    <li><span id="minutes"></span><p>Menit</p></li>
                    <li><span id="seconds"></span><p>Detik</p></li>
                  </ul>
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
      <div class="section text-center">
        <h2 class="title">Here is our Candidate</h2>
        <div class="team">
          <div class="row">
           
             @if ($calon->isEmpty())
                        <div class="col-md-12">
                              <div class="alert alert-danger">
							                  <div>Data kosong</div>
					                  	</div>
                         </div>
              @elseif(!$pemilihan->isEmpty())
                         <div class="col-md-12">
                              <h2>
                                Anda sudah melakukan Voting
                              </h2>
                         </div> 
              @elseif($inRange)
                         <div class="col-md-12">
                              <h2>
                                Waktu belum melakukan Voting
                              </h2>
                         </div>            
              @else
             @foreach ($calon as $i)
              <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src={{asset('data_file/'.$i->foto)}} alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">{{$i->nama}}
                    <br>
                    <small class="card-description text-muted">Fakultas {{$i->fakultas}}</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description"> {!! $i->deskripsi !!} 
                     </p>
                  </div>
                  <div class="card-footer justify-content-center">
                  <button class="btn btn-primary btn-round" style="width:50% !important" onclick="location.href='/kandidat/{{$i->id}}'">
                     <i class="material-icons">person</i> Lihat kandidat
                   </button> 
                  </div>
                </div>
              </div>
              </div>
             @endforeach
           
            @endif    
            
          
        </div>
      </div>
       <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Lihat Hasil </h2>
            <h5 class="description"></h5>
             <button class="btn btn-warning btn-round" style="width:50% !important" onclick="location.href='/livecount'">
                     <i class="material-icons">how_to_vote</i> Lihat hasil suara
                   </button>  
          </div>
        </div>
      </div>

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

  <script> 
const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date({!! $new !!}).getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
      
      //do something later when date is reached
      if (distance < 0) {
       document.getElementById("demo").innerHTML = "EXPIRED"; 
      }

    }, second)

</script> 
</body>

</html>
