<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Capacitor Job Request</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-nav-fixed sb-topnav navbar navbar-expand navbar-dark bgfooter">
            <!-- Navbar Brand-->
            <a href="home.html"><img src="assets/img/Logo.png" alt="" width="200" height="55" class=""></a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="me-3 btn btn-secondary dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hi, Tatang<i class="fas fa-user fa-fw"></i></a> 
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container margin2">
                        <div class="text-lg-center mt-5"><img src="assets/img/icon facility.png"width="70" height="70">Facility</div>
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="card shadow-lg border-0 rounded-lg mt-2">
                                   <!-- coba2 -->
                                   <div class="container">
                                    <div class="row">
                                        <div class="card-body col-10">
                                            <form>
                                                <div class="text-lg-left">Edit Task</div>
                                                <hr>
                                                <div class="row">
                                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Activity</label>
                                                    <div class="col-sm-5">
                                                      <textarea type="email" class="form-control form-control-lg" id="colFormLabelLg" rows="5"></textarea><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Location</label>
                                                    <div class="col-sm-5">
                                                      <input type="email" class="form-control form-control-lg" id="colFormLabelLg"><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Date Request</label>
                                                    <div class="col-sm-3">
                                                      <input type="date" class="form-control form-control-lg" id="colFormLabelLg" ><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Due Date</label>
                                                    <div class="col-sm-3">
                                                      <input type="date" class="form-control form-control-lg" id="colFormLabelLg" ><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Action</label>
                                                    <div class="col-sm-3">
                                                        <select id="inputState" class="form-select">
                                                        <option>Internal</option>
                                                        <option>External</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">PIC</label>
                                                    <div class="col-sm-5">
                                                      <input type="email" class="form-control form-control-lg" id="colFormLabelLg" ><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Status</label>
                                                    <div class="col-sm-3">
                                                        <select id="inputState" class="form-select">
                                                            <option >Pending</option>
                                                            <option >On Progress</option>
                                                            <option >Finish</option>
                                                        </select>
                                                    </div>    
                                                </div>
                                                <div class="row">
                                                <div class="col-md-1 ms-auto">
                                                    <a class="btn btn-primary" href="#" role="button">Save</a>
                                                </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- kanan -->
                                        
                                        <div class="justify-content-center col-2 margin2">
                                            <div class="col-6 col-md-8">
                                                <img src="assets/img/facility.png" width="400" height="400" class="rounded float-end" alt="...">
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- end coba2 -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="footer py-2 mt-auto">
                    <div class="container-fluid px-2">
                        <div class="font-sans-serif text-lg-center ">
                            <div class="text-light">Copyright &copy;2021 Panasonic Industrial Devices Singapore. All Right Reserved.</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
