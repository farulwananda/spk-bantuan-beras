<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="frontend_dashboard/img/logo/logo1.png" rel="icon">
  <title>SPK Bantuan Pangan - Tambah Data</title>
  <link href="frontend_dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="frontend_dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="frontend_dashboard/css/ruang-admin.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="frontend_dashboard/img/logo/logologin.png" width="20" height="30">
        </div>
        <div class="sidebar-brand-text mx-1"style="text-align: left; ">Bantuan Pangan Beras</div>
      </a>
      <hr class="sidebar-divider my-0">
    
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
        
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sub Kriteria</h1>
            <ol class="breadcrumb">
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-3">
                
                  <div class="container">
                    <div class="form-section">
                      <h2>Sub Kriteria</h2>
                      <form>
                        <label for="subKriteria">Sub Kriteria</label>
                        <input type="text" id="subKriteria" name="subKriteria" />
                        <label for="nilai">Nilai</label>
                        <input type="number" id="nilai" name="nilai" /></p>
                        <button type="button" class="btn btn-primary">+ Tambah</button>
                      </form>
                    </div>
                
                    <div class="info-section">
                      <h3>Keterangan Nilai:</h3>
                      <ul>
                        <li>Sangat Tinggi = 5</li>
                        <li>Tinggi = 4</li>
                        <li>Sedang = 3</li>
                        <li>Rendah = 2</li>
                        <li>Sangat Rendah = 1</li>
                      </ul>
                    </div>
                
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush" id="dataTable">
                        
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

              <!-- Form Sizing -->
              

              <!-- Horizontal Form -->
              

            <div class="col-lg-6">
              <!-- General Element -->
              <div class="card mb-4">
               
        <!---Container Fluid-->
    

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="frontend_dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="frontend_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend_dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="frontend_dashboard/js/ruang-admin.min.js"></script>

</body>

</html>
<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f9f9f9;
}

.container {
  width: 100%;
  margin: 20px auto;
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.form-section {
  flex: 1;
  min-width: 500px;
  background: #ffffff;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin-left: 0;
  margin-right: auto;
}

.form-section h2 {
  margin-bottom: 10px;
}

.form-section label {
  display: block;
  margin-top: 10px;
}

.form-section input {
  width: 100%;
  padding: 8px;
  margin-top: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.btn-tambah {
  margin-top: 10px;
  padding: 10px 15px;
  background-color: #007bff;
  color: #ffffff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn-tambah:hover {
  background-color: #0056b3;
}

.info-section {
  flex: 1;
  min-width: 200px;
  background: #ffffff;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.info-section h3 {
  margin-bottom: 10px;
}

.info-section ul {
  list-style-type: none;
  padding: 0;
}

.info-section li {
  margin: 5px 0;
}

.table-section {
  flex: 1;
  min-width: 500px;
  background: #ffffff;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

table {
  width: 100%;
  border-collapse: collapse;
}

thead {
  background-color: #007bff;
  color: #ffffff;
}

th, td {
  padding: 10px;
  text-align: left;
  border: 1px solid #ddd;
}

th {
  font-weight: bold;
}

.btn-edit, .btn-delete {
  background: none;
  border: none;
  cursor: pointer;
  font-size: 16px;
  padding: 5px;
}

.btn-edit:hover {
  color: #007bff;
}

.btn-delete:hover {
  color: #ff0000;
}

</style>