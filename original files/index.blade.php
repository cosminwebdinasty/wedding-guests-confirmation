<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Custom fonts for this template-->

  <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <i class="fas fa-arrow-alt-circle-left"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Return to home</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>




      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img width="30px" src="{{asset('images/default.png')}}">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">



            @if(session()->has('person-delete'))
    <div class="alert alert-danger">
    {{session('person-delete')}}
    </div>
@endif



          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Participanti</h1>









          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nr. persoane</th>
                    <th>Nume</th>
                    <th>Partener</th>
                    <th>Meniu</th>
                    <th>Mesaj</th>
                    <th>Status</th>
                    <th>Data confirmarii</th>
                     <th>Delete</th>

                  </tr>
                </thead>
                <tfoot>
                  <tr>
                     <th>Id</th>
                     <th>Nr. persoane</th>
                    <th>Nume</th>
                    <th>Partener</th>
                    <th>Meniu</th>
                    <th>Mesaj</th>
                    <th>Status</th>
                    <th>Data confirmarii</th>
                     <th>Delete</th>

                  </tr>
                </tfoot>

               <tbody>


                @foreach ($people as $person)



              <tr>
                  <td>{{$person->id}}</td>
                  <td>{{$person->participants}}</td>
                  <td>{{$person->name}}</td>



                     @if ( $person->partner )
                    <td>{{$person->partner}}</td>
                    @else
                    <td style="background:#f2f2f2;">-</td>
                    @endif


                    @if ( $person->status )
                    <td>{{$person->menu}}</td>
                    @else
                    <td style="background:#f2f2f2;"> -</td>
                    @endif



                    @if ( $person->message )
                    <td>{{$person->message}}</td>
                    @else
                    <td> - </td>
                    @endif





                     @if ( $person->status )
                    <td style="background: #ccffcc;">Particip</td>
                    @else
                    <td >Nu particip</td>
                    @endif

                  <td>{{$person->created_at->diffForHumans()}}</td>
                  <td>

                  <form method="post" action="{{route('admin.delete', $person->id)}}">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger">Delete</button>

                              </form>

                  </td>

              </tr>


              @endforeach

          </tbody>


           </tbody>
         </table>
       </div>
     </div>








     <div class="d-flex">
        <div class="mx-auto">
  {{$people->links()}}
</div>
</div>












        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2021</span>
          </div>
        </div>
      </footer>
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

            <form action="/logout" method="post">
                @csrf
                @method('POST')

              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <button class="btn btn-primary" type="submit">Logout</button>

              </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('js/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->

  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

</body>

</html>
