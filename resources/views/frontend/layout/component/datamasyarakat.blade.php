<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="frontend_dashboard/img/logo/logo1.png" rel="icon">
  <title>SPK Bantuan Pangan - Data Masyarakat</title>
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
            <h1 class="h3 mb-0 text-gray-800">Data Masyarakat</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Data Masyarakat</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               
                  <h6 class="m-0 font-weight-bold text-primary">Data Masyarakat</h6>
                 
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <div class="d-flex gap-2 justify-content-end">
                    <a class="data-link" href="tambahdatamasyarakat">
                    <button type="button" class="btn btn-primary mb-1">+ Tambah Data</button>
                    <thead class="thead-light">
                        
                      <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Kelurahan/Desa</th>
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
                          <button class="btn btn-warning"><a href="/tampilupdate/"><i class="fa-solid fa-pen-to-square" style="color: #f6f6f4;"></i></a></button>
                          <button class="btn btn-danger"><a href="/deleterumah/ "><i class="fa-solid fa-trash" style="color: #f3f4f7;"></i></a></button>
                          <button class="btn btn-primary"><a href=""><i class="fa-solid fa-eye" style="color: #f3f4f7;"></i></a></button>
                        </td>
                       
                      </tr>
                     
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010/11/14</td>
                  
                      </tr>
                      
                      <tr>
                        <td>Suki Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>53</td>
                        <td>2009/10/22</td>
                     
                      </tr>
                      <tr>
                        <td>Prescott Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>27</td>
                        <td>2011/05/07</td>
                      
                      </tr>
                      <tr>
                        <td>Gavin Cortez</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>22</td>
                        <td>2008/10/26</td>
                    
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- DataTable with Hover -->
            

          <!-- Documentation Link -->
          <div class="row">
            <div class="col-lg-12">
              
            </div>
          </div>

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
      <footer class="sticky-footer bg-white">
       
      </footer>
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