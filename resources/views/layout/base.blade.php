<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin</title>
  <link rel="stylesheet" href="{{asset('assets/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/node_modules/flag-icon-css/css/flag-icon.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layout.navbar')

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        @include('layout.sidebar')

        <div class="content-wrapper">
          <h4 class="page-heading mb-4">Dashboard / @yield('title')</h4>
          @yield('content')
        </div>

        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Star Admin</a> &copy; 2017
            </span>
          </div>
        </footer>

      </div>
    </div>

  </div>

</body>
@include('layout.footer')
  <script>
    $(document).ready(function () {
      $('#tabel-data').DataTable()
    })

    function logout(){
        Swal.fire({
          title: 'Apakah anda yakin ingin keluar?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes!'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Logout!',
                'Silahkan lakukan login kembali.',
                'success'
              )
            }
          })
      }
    
  </script>
</html>
