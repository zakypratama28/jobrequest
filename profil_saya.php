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
        <!-- Navbar Profil-->
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
    <div id="layoutAuthentication_content">
        <main>
            <!-- profil saya -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Profil Saya</h3>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">EE No : </label>
                                        <input type="text" id="simpleinput" class="form-control" readonly="" value="700123">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-password">Password : </label>
                                        <input type="password" id="example-password" class="form-control" readonly="" value="password">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Nama : </label>
                                        <input type="text" id="simpleinput" class="form-control" readonly="readonly" value="zaky">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-email">Email</label>
                                        <input type="email" id="example-email" name="example-email" class="form-control" readonly="" value="zakyp@gmail.com">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-palaceholder">Department : </label>
                                        <input type="text" id="example-readonly" class="form-control" readonly="" value="Capacitor">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="example-textarea">Jabatan : </label>
                                        <input type="text" id="example-readonly" class="form-control" readonly="" value="Supervisor">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="example-readonly">Tahun Masuk</label>
                                        <input type="text" id="example-readonly" class="form-control" readonly="" value="Tahun Masuk">
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><a class="btn btn-primary btn-block" href="home.php">Kembali</a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>