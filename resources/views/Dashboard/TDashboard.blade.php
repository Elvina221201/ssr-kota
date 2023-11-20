<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>
    <link rel="icon" href="/images/logo_msikota.png" type="image/x-icon">

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.css" rel="stylesheet">
    <!-- CSS FILES -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/bootstrap-icons.css" rel="stylesheet">

    <link href="/css/templatemo-kind-heart-charity.css" rel="stylesheet">


</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion shadow" id="accordionSidebar">

            <hr class="sidebar-divider">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Dashboard">
                <div class="sidebar-brand-icon">
                    <img src="/images/logo_msikota.png" class="img-thumbnail" alt="...">
                </div>
                <div class="sidebar-brand-text mx-3">SSR Kota Semarang</div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/Dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Interface
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>SITK (??)</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Keuanga / Quill (???)</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Menu :
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Berita</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/input-berita">Input Berita</a>
                        <a class="collapse-item" href="/arsip-berita">Arsip Berita</a>
                    </div>
                </div>
            </li>

            <!-- Kegiatan -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kegiatanPages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Kegiatan</span>
                </a>
                <div id="kegiatanPages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/input-kegiatan">Input Kegiatan</a>
                        <a class="collapse-item" href="/arsip-kegiatan">Arsip Kegiatan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="/pesan">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pesan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0 bg-gray" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @if (Auth::check())
                    @include('./template-dasar/menuLogin')
                @endif
                @yield('konten')

                <!-- Footer -->
                <footer class="site-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-12 mb-4">
                                <img src="images/logo_msikota.png" class="logo img-fluid" alt="">
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-4">
                                <h5 class="site-footer-title mb-3">Link Selengkapnya</h5>

                                <ul class="footer-menu">
                                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Ketuk
                                            Pintu</a></li>

                                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Grebek
                                            TBC</a></li>

                                    <li class="footer-menu-item"><a href="http://wa.me/+6285879475373"
                                            class="footer-menu-link">Konsultasi</a></li>

                                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Become a
                                            volunteer</a></li>

                                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Partner
                                            with us</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                                <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                                <p class="text-white d-flex mb-2">
                                    <i class="bi-telephone me-2"></i>

                                    <a href="tel: 0858-7947-5373" class="site-footer-link">
                                        0858-7947-5373
                                    </a>
                                </p>

                                <p class="text-white d-flex">
                                    <i class="bi-envelope me-2"></i>

                                    <a href="mailto: ssrmsikotasemarang@gmail.com" class="site-footer-link">
                                        ssrmsikotasemarang@gmail.com
                                    </a>
                                </p>

                                <p class="text-white d-flex mt-3">
                                    <i class="bi-geo-alt me-2"></i>
                                    Jl. Kp. Pentul I No.6, Tinjomoyo, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50262
                                </p>

                                <a href="#" class="custom-btn btn mt-3">Lainnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="site-footer-bottom">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-md-7 col-12">
                                    <p class="copyright-text mb-0">Copyright © 2023 <a href="#">SSR MSI Kota
                                            Semarang</a>
                                    </p>
                                </div>

                                <div
                                    class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-facebook"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="https://instagram.com/msikotasemarang?igshid=MzRlODBiNWFlZA=="
                                                class="social-icon-link bi-instagram"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-linkedin"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="https://youtube.com/templatemo"
                                                class="social-icon-link bi-youtube"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
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



        <!-- Bootstrap core JavaScript-->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="/js/demo/chart-area-demo.js"></script>
        <script src="/js/demo/chart-pie-demo.js"></script>

        <!-- JAVASCRIPT FILES -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.sticky.js"></script>
        <script src="/js/click-scroll.js"></script>
        <script src="/js/counter.js"></script>
        <script src="/js/custom.js"></script>

        </body>

</html>
