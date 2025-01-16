<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('soft-ui-dashboard')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('soft-ui-dashboard')}}/assets/img/favicon.png">
  <title>
    Nazh Parfume
  </title>
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('soft-ui-dashboard')}}/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{asset('soft-ui-dashboard')}}/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="{{asset('soft-ui-dashboard')}}/assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="...">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('soft-ui-dashboard')}}/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  @include('sweetalert::alert')
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a href="{{ route('editprofilenazhparfume',Auth::user()->id) }}"><p class="ms-1 font-weight-bolder navbar-brand m-0" style="font-size: 18px;">{{ __('Halo! kak ') }}{{ Auth::user()->name }}!</p></a>
    </div>
    <div style="margin-top: -48px;">
        <a class="navbar-brand" href="{{ route('editprofilenazhparfume',Auth::user()->id) }}">
          <i class="fa-solid fa-pen-to-square"></i>
          <span class="ms-1" style="font-size: 15px;">{{ __('Edit Profil') }}</span>
        </a>
    </div>
    <div style="margin-left: 14%; margin-top:-20px;">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            <button class="btn mb-4 my-2 bg-gradient-danger">{{ __('Logout') }}</button>
        </a>
      </form>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('barang.index')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg style="width: 13px;" class="text-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M96 0C82.7 0 72 10.7 72 24s10.7 24 24 24c4.4 0 8 3.6 8 8v64.9c0 12.2-7.2 23.1-17.2 30.1C53.7 174.1 32 212.5 32 256V448c0 35.3 28.7 64 64 64H224c35.3 0 64-28.7 64-64V256c0-43.5-21.7-81.9-54.8-105c-10-7-17.2-17.9-17.2-30.1V56c0-4.4 3.6-8 8-8c13.3 0 24-10.7 24-24s-10.7-24-24-24l-8 0 0 0 0 0H104l0 0 0 0L96 0zm64 382c-26.5 0-48-20.1-48-45c0-16.8 22.1-48.1 36.3-66.4c6-7.8 17.5-7.8 23.5 0C185.9 288.9 208 320.2 208 337c0 24.9-21.5 45-48 45z">
                <title>shop </title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                        <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            &nbsp;<span class="nav-link-text ms-1 text-dark" style="font-size: 15px;">Beranda</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('tampilkeranjang')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" class="text-dark" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                        <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            @php
            
              use App\Models\Barang;
              // use App\Models\User; = sudah digunakan diatas
              use App\Models\chart;

              $barang = Barang::all();

              $user = Auth::user();
              $userid = $user->id;

              $count = chart::where('user_id',$userid) ->count();

            @endphp
            
            &nbsp;<span class="nav-link-text ms-1 text-dark" style="font-size:15px;">Keranjang &nbsp;</span><span class="text-danger font-weight-bolder" style="font-size:15px;">&nbsp;[{{ $count }}]</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="text-success text-gradient font-weight-bolder mb-0 pt-3">Dapatkan Sensasi Parfum Premium</h6>
          <h6 class="text-success text-gradient font-weight-bolder mb-0">Terpercaya, Elegan, Professional</h6>
        </nav>
        <div class="collapse mt-3 navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <form class="form-group" method="GET" action="{{ route('search') }}">
              <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" name="search" style="width: 220px;" class="form-control" placeholder="Cari Parfum Kamu Disini...">
              </div>
            </form>
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    {{ $slot }}
    
    <center>
    <footer class="footer pt-2">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-12 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="/barang">Daffa Nazhmi</a>
                for a better web.
              </div>
            </div>
          </div>
        </div>
      </footer>
    </center>

  </main>

   <!--   Core JS Files   -->
   <script src="{{asset('soft-ui-dashboard')}}/assets/js/core/popper.min.js"></script>
   <script src="{{asset('soft-ui-dashboard')}}/assets/js/core/bootstrap.min.js"></script>
   <script src="{{asset('soft-ui-dashboard')}}/assets/js/plugins/perfect-scrollbar.min.js"></script>
   <script src="{{asset('soft-ui-dashboard')}}/assets/js/plugins/smooth-scrollbar.min.js"></script>
   <script src="{{asset('soft-ui-dashboard')}}/assets/js/plugins/chartjs.min.js"></script>
   <script>
    // Mendapatkan elemen span yang menampilkan angka
    var countSpan = document.getElementById('count');
    var count = 0; // Nilai awal

    function increment() {
        count++;
        countSpan.textContent = count;
    }

    function decrement() {
        if (count > 0) {
            count--;
            countSpan.textContent = count;
        }
    }
  </script>
   <script>
       var ctx = document.getElementById("chart-bars").getContext("2d");

       new Chart(ctx, {
       type: "bar",
       data: {
           labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
           datasets: [{
           label: "Sales",
           tension: 0.4,
           borderWidth: 0,
           borderRadius: 4,
           borderSkipped: false,
           backgroundColor: "#fff",
           data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
           maxBarThickness: 6
           }, ],
       },
       options: {
           responsive: true,
           maintainAspectRatio: false,
           plugins: {
           legend: {
               display: false,
           }
           },
           interaction: {
           intersect: false,
           mode: 'index',
           },
           scales: {
           y: {
               grid: {
               drawBorder: false,
               display: false,
               drawOnChartArea: false,
               drawTicks: false,
               },
               ticks: {
               suggestedMin: 0,
               suggestedMax: 500,
               beginAtZero: true,
               padding: 15,
               font: {
                   size: 14,
                   family: "Open Sans",
                   style: 'normal',
                   lineHeight: 2
               },
               color: "#fff"
               },
           },
           x: {
               grid: {
               drawBorder: false,
               display: false,
               drawOnChartArea: false,
               drawTicks: false
               },
               ticks: {
               display: false
               },
           },
           },
       },
       });


       var ctx2 = document.getElementById("chart-line").getContext("2d");

       var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

       gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
       gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
       gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

       var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

       gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
       gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
       gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

       new Chart(ctx2, {
       type: "line",
       data: {
           labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
           datasets: [{
               label: "Mobile apps",
               tension: 0.4,
               borderWidth: 0,
               pointRadius: 0,
               borderColor: "#cb0c9f",
               borderWidth: 3,
               backgroundColor: gradientStroke1,
               fill: true,
               data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
               maxBarThickness: 6

           },
           {
               label: "Websites",
               tension: 0.4,
               borderWidth: 0,
               pointRadius: 0,
               borderColor: "#3A416F",
               borderWidth: 3,
               backgroundColor: gradientStroke2,
               fill: true,
               data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
               maxBarThickness: 6
           },
           ],
       },
       options: {
           responsive: true,
           maintainAspectRatio: false,
           plugins: {
           legend: {
               display: false,
           }
           },
           interaction: {
           intersect: false,
           mode: 'index',
           },
           scales: {
           y: {
               grid: {
               drawBorder: false,
               display: true,
               drawOnChartArea: true,
               drawTicks: false,
               borderDash: [5, 5]
               },
               ticks: {
               display: true,
               padding: 10,
               color: '#b2b9bf',
               font: {
                   size: 11,
                   family: "Open Sans",
                   style: 'normal',
                   lineHeight: 2
               },
               }
           },
           x: {
               grid: {
               drawBorder: false,
               display: false,
               drawOnChartArea: false,
               drawTicks: false,
               borderDash: [5, 5]
               },
               ticks: {
               display: true,
               color: '#b2b9bf',
               padding: 20,
               font: {
                   size: 11,
                   family: "Open Sans",
                   style: 'normal',
                   lineHeight: 2
               },
               }
           },
           },
       },
       });
   </script>
   <script>
       var win = navigator.platform.indexOf('Win') > -1;
       if (win && document.querySelector('#sidenav-scrollbar')) {
       var options = {
           damping: '0.5'
       }
       Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
       }
   </script>
   <!-- Github buttons -->
   <script async defer src="https://buttons.github.io/buttons.js"></script>
   <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
   <script src="{{asset('soft-ui-dashboard')}}/assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#provinsi').on('change', function() {
            var provinsiId = $(this).val();
            if (provinsiId) {
                $.ajax({
                    url: '/get-kabupaten/' + provinsiId,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('#kabupaten').empty();
                        $('#kabupaten').append('<option value="hidden">== PILIH KABUPATEN ==</option>');
                        $.each(data, function(key, value) {
                            $('#kabupaten').append('<option value="' + value.id + '">' + value.kabupaten + '</option>');
                        });
                    }
                });
            } else {
                $('#kabupaten').empty();
                $('#kabupaten').append('<option value="hidden">== PILIH KABUPATEN ==</option>');
            }
        });
    });
</script>

<script>
  $(document).ready(function() {
      $('#kabupaten').on('change', function() {
          var kabupatenId = $(this).val();
          if (kabupatenId) {
              $.ajax({
                  url: '/get-kecamatan/' + kabupatenId,
                  type: "GET",
                  dataType: "json",
                  success: function(data) {
                      $('#kecamatan').empty();
                      $('#kecamatan').append('<option value="hidden">== PILIH KECAMATAN ==</option>');
                      $.each(data, function(key, value) {
                          $('#kecamatan').append('<option value="' + value.id + '">' + value.kecamatan + '</option>');
                      });
                  }
              });
          } else {
              $('#kecamatan').empty();
              $('#kecamatan').append('<option value="hidden">== PILIH kecamatan ==</option>');
          }
      });
  });
</script>



</body>

</html>