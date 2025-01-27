<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('soft-ui-dashboard') }}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('soft-ui-dashboard') }}/assets/img/favicon.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('soft-ui-dashboard') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{ asset('soft-ui-dashboard') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('soft-ui-dashboard') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('soft-ui-dashboard') }}/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-success text-gradient">Selamat Datang di NazhParfume</h3>
                  <p class="mb-0">Masukkan email dan password untuk masuk ke toko</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" name="email" value="{{ old('email') }}"
                      required autofocus autocomplete="email" class="form-control"
                      placeholder="Masukkan Email..." aria-label="Email" 
                      aria-describedby="email-addon">
                      <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" name="password" value="{{ old('password') }}" 
                      required autofocus autocomplete="password" class="form-control" 
                      placeholder="Masukkan Password..." aria-label="Password" 
                      aria-describedby="password-addon">
                      <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-success w-100 mt-4 mb-0">Masuk</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="text-sm mx-auto">
                    Gak punya akun?
                    <a href="/sign-up" class="text-success text-gradient font-weight-bold">{{ __('Registrasi Disini') }}</a>
                  </p>
                  <p class="text-sm mx-auto">
                    <img src="{{ asset('soft-ui-dashboard/media/google.png') }}" alt="" width="5%">
                    <a href="{{ route('auth.google') }}" class="text-dark text-gradient font-weight-bold">&nbsp;{{ __('Login dengan Google') }}</a>
                  </p>
                </div>
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('{{ asset('soft-ui-dashboard') }}/assets/img/lance-reis-ZN8t2YiSYnk-unsplash.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  
  <!--   Core JS Files   -->
  <script src="{{ asset('soft-ui-dashboard') }}/assets/js/core/popper.min.js"></script>
  <script src="{{ asset('soft-ui-dashboard') }}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('soft-ui-dashboard') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{ asset('soft-ui-dashboard') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="{{ asset('soft-ui-dashboard') }}/assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>