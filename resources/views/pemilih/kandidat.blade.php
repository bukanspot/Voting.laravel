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

<body class="profile-page sidebar-collapse">
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
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('pemilih/assets/img/city-profile.jpg')}}');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src={{asset('data_file/'.$calon->foto)}} alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">{{$calon->nama}}</h3>
                <h6>Fakultas {{$calon->fakultas}}</h6>
                <h6>Prodi {{$calon->prodi}}</h6>
               
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
         {!! $calon->deskripsi !!} 
        </div>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                    <i class="material-icons">visibility</i> Visi
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                    <i class="material-icons">directions_run</i> Misi
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space ">
          <div class="tab-pane active  gallery" id="studio">
            <div class="row">
              <div class="col-md-5 " style="margin-left:18rem !important">
                <div class="description text-left">
                    {!! $calon->visi !!} 
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="works">
            <div class="row">
             <div class="col-md-5 " style="margin-left:18rem !important">
                <div class="description text-left">
                    {!! $calon->misi !!} 
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <form action="../vote/{{$calon->id}}" method="post">
                     @csrf
                     <input type="text" hidden name="pemilih" value="{{$pemilih->id}}">
                   <button class="btn btn-primary btn-round" type="submit" style="width:75% !important" onclick="location.href=''">
                     <i class="material-icons">how_to_vote</i> Pilih Kandidat
                   </button> 
                </form>
                
            </div>
        </div>
          
        </div>
        
        
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
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
</body>

</html>
