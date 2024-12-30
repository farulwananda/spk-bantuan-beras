<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="frontend_dashboard/img/logo/logo1.png" rel="icon">
  <title>SPK Bantuan Pangan - Kriteria</title>
  <link href="frontend_dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="frontend_dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="frontend_dashboard/css/ruang-admin.min.css" rel="stylesheet">
  <link href="frontend_dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>

<body id="page-top">
  <div id="wrapper">
    @include('frontend/layout.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        
        <!-- TopBar -->
        @include('frontend/layout.navbar')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tabel Kriteria</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Tabel Kriteria</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Kriteria</h6>
                 
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <div class="d-flex gap-2 justify-content-end">
                    <a class="data-link" href="tambahdatakriteria">
                    <button type="button" class="btn btn-primary mb-1">+ Tambah Data</button>
                    <thead class="thead-light">
                        
                      <tr>
                        <th>Kode</th>
                        <th>Nama Kriteria</th>
                        <th>Bobot</th>
                        <th>Ketegori</th>
                        <th>Opsi</th>
                       
                      </tr>
                    </thead>
                 
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>   
                          <button class="btn btn-warning"><a href=""><i class="fa-solid fa-pen-to-square" style="color: #f6f6f4;"></i></a></button>
                          <button class="btn btn-danger"><a href=""><i class="fa-solid fa-trash" style="color: #f3f4f7;"></i></a></button>
                          <button class="btn btn-primary"><a href="/subkriteria"><i class="fa-solid fa-eye" style="color: #f3f4f7;"></i></a></button>
                        </td>
                     
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                     
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                       
                      </tr>
                   
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- DataTable with Hover -->
            

          <!-- Documentation Link -->
        
          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>

      <!-- Footer -->
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="frontend_dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="frontend_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend_dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="frontend_dashboard/js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="frontend_dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="frontend_dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>