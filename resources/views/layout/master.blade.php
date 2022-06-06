<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Perpustakaan</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('assets/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('assets/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-text mx-3">Perpustakaan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      {{-- <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li> --}}

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
          <i class="fas fa-fw fa-cog"></i>
          <span>Data Dasar</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ url('books') }}">Data Buku</a></li>
            <li><a class="dropdown-item" href="{{ url('students') }}">Data Siswa</a></li>
            <li><a class="dropdown-item" href="{{ url('rayons') }}">Data Rayon</a></li>
            <li><a class="dropdown-item" href="{{ url('studentGroups') }}">Data Rombel</a></li>
            <li><a class="dropdown-item" href="{{ url('publishers') }}">Data penerbit</a></li>
            <li><a class="dropdown-item" href="{{ url('borrowings') }}">Data Peminjaman</a></li>

        </ul>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

       <!-- Nav Item - Register -->
       <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="var cek = confirm('yakin mau logout,ga akan nyesel?');event.preventDefault();
          if(cek){document.getElementById('logout').submit();}
        ">
          <i class="fas fa-fw fa-table"></i>
          <span>Logout</span></a>
          <form action="{{ route('logout') }}" method="POST" id="logout">
            @csrf
          </form>
      </li>

      <!-- Nav Item - Login -->
      {{-- <li class="nav-item">
        <form action="{{ route('logout') }}" method="post">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-chart-area"></i>

            @csrf
            <button class="btn"  type="submit" onclick="return confirm('yakin kamu mau logout ?')">logout</button>
        </form>
      </li> --}}

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        {{-- <button class="rounded-circle border-0" id="sidebarToggle"></button> --}}
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <br>
        <div class="container">
          <section class="content">
            @yield('content')
          </section>
        </div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      {{-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer> --}}
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
  {{-- <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <!-- Core plugin JavaScript-->
  <script src="{{ ('assets/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('assets/admin/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('assets/admin/vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('assets/admin/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('assets/admin/js/demo/chart-pie-demo.js') }}"></script> --}}

@stack('js')

</body>

</html>