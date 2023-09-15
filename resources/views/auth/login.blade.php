<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin</title>
  <link rel="stylesheet" href="{{asset('assets/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>
              @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                  @endif
              <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control p_input" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control p_input" name="password" placeholder="Password"required>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">LOG IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{asset('assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/misc.js')}}"></script>
</body>

</html>
