<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Job Request</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--sweet alert-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <!--webcam-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-nav-fixed sb-topnav navbar navbar-expand navbar-dark bgfooter">
        <!-- Navbar Brand-->
        <a href="home.php"><img src="assets/img/logo.png" alt="" width="200" height="55" class=""></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navccccbadffjsadsxzcrygygygybhuub-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="me-3 btn btn-secondary dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hi, Tatang<i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="profil_saya.php">Profil</a></li>
                    <li><a class="dropdown-item" href="login.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading"> Dashboard : </div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid"><br>
                    <h1 class="text-lg-center mt-5"></h1>
                </div>
                <!-- Begin Pagyhygygygbgffggf gcfe Content -->
                <div class="container-fluid px-4">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Task Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row justify-content-center">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Pekerjaan Baru</div>
                                            <div class="h5 mb-0 font-weight-bold text-danger">20</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="..."> <img src="assets/img/baru.png" width="70" height="70"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Dalam Pengerjaan</div>
                                            <div class="h5 mb-0 font-weight-bold text-warning">15</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="..."> <img src="assets/img/progres.png" width="70" height="70"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Selesai
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-success">1</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="..."> <img src="assets/img/complete.png" width="70" height="70"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-4">
                        <div class="d-grid gap-2 d-md-block">
                            <button type="button" class=" d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                                Tambah Pekerjaan</button>
                            <!--modal untuk tambah pekerjaan baru-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pekerjaan Baru</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama : </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="aktivitas" class="form-label">aktivitas : </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="deskripsi" class="form-label">Deskripsi : </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="lokasi" class="form-label">Lokasi : </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="pic" class="form-label">PIC : </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="example-date">Tgl Pengajuan</label>
                                                    <input class="form-control" id="example-date" type="date" name="date">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="example-date">Tgl Plan Selesai</label>
                                                    <input class="form-control" id="example-date" type="date" name="date">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="example-date">Tgl Actual Selesai</label>
                                                    <input class="form-control" id="example-date" type="date" name="date">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">PIlih Photo : </label>
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>
                                                <div class="col-md-3">
                                                    <div id="my_camera"></div>
                                                    <input type=button value="Take Snapshot" onClick="take_snapshot()">
                                                    <input type="hidden" name="image" class="image-tag">
                                                </div>
                                                <!--<div class="col-md-6">
                                                    <div id="results">ambil foto</div>
                                                </div>-->
                                                <div class="form-group mb-3">
                                                    <label for="inputState" class="col-form-label">Status Pekerjaan</label>
                                                    <select id="inputState" class="form-control">
                                                        <option selected>-Pilih Status-</option>
                                                        <option value="1">Pekerjaan Baru</option>
                                                        <option value="2">Dalam pengerjaan</option>
                                                        <option value="3">Selesai</option>
                                                    </select>
                                                </div> <!-- end col -->
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TUTUP</button>
                                            <button type="button" class="btn btn-primary">KIRIM</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="download_laporan.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-download fa-sm text-white-50"></i> Download Laporan</a>
                        </div>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tabel Pekerjaan
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Aktivitas</th>
                                        <th>Deskripsi Pekerjaan</th>
                                        <th>Lokasi</th>
                                        <th>PIC</th>
                                        <th>Tgl Pengajuan</th>
                                        <th>Tgl Plan Selesai</th>
                                        <th>Tgl Actual Selesai</th>
                                        <th>Photo</th>
                                        <th>Status</th>
                                        <th scope="col">Edit/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>zaky</td>
                                        <td>Fix Lamp</td>
                                        <td>Lamp Blinking</td>
                                        <td>nijo room</td>
                                        <td>jono</td>
                                        <td>02/09/2021</td>
                                        <td></td>
                                        <td></td>
                                        <td><a href=""><img src="assets/img/Mechanical.png" width="100" height="100"></a></td>
                                        <td class="text-warning">On Progres</td>
                                        <td>
                                            <a href="editdata.php"><span class="fas fa-edit bg-success p-1 text-white rounded"></span></a>
                                            <a href="#"><span class="fas fa-trash-alt bg-danger p-1 text-white rounded" onclick="deleteData()"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>zaky</td>
                                        <td>Fix Lamp</td>
                                        <td>Lamp Blinking</td>
                                        <td>nijo room</td>
                                        <td>jono</td>
                                        <td>02/09/2021</td>
                                        <td></td>
                                        <td></td>
                                        <td><a href=""><img src="assets/img/Mechanical.png" width="100" height="100"></a></td>
                                        <td class="text-warning">On Progres</td>
                                        <td>
                                            <a href="editdata.php"><span class="fas fa-edit bg-success p-1 text-white rounded"></span></a>
                                            <a href="#"><span class="fas fa-trash-alt bg-danger p-1 text-white rounded" onclick="deleteData()"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>zaky</td>
                                        <td>Fix Lamp</td>
                                        <td>Lamp Blinking</td>
                                        <td>nijo room</td>
                                        <td>jono</td>
                                        <td>02/09/2021</td>
                                        <td></td>
                                        <td></td>
                                        <td><a href=""><img src="assets/img/Mechanical.png" width="100" height="100"></a></td>
                                        <td class="text-warning">On Progres</td>
                                        <td>
                                            <a href="editdata.php"><span class="fas fa-edit bg-success p-1 text-white rounded"></span></a>
                                            <a href="#"><span class="fas fa-trash-alt bg-danger p-1 text-white rounded" onclick="deleteData()"></span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
    </div>
    </div>
    <!-- Configure a few settings and attach camera -->
    <script language="JavaScript">
        Webcam.set({
            width: 390,
            height: 390,
            image_format: 'jpeg',
            jpeg_quality: 90
        });

        Webcam.attach('#my_camera');

        function take_snapshot() {
            Webcam.snap(function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>