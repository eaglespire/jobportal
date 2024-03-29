<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themezhub.net/resido-live-02/resido/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 16:38:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>@yield('title', config('app.name'))</title>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <!-- Custom Color Option -->
    <link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">

</head>

<body class="blue-skin dashboard">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div id="preloader"><div class="preloader"><span></span><span></span></div></div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    @include('includes.employer_navbar')
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ============================ Page Title Start================================== -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <h2 class="ipt-title">Welcome {{ auth()->user()->name }}!</h2>
                    <span class="ipn-subtitle">Dashboard</span>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    @yield('content')

    <!-- ============================ Call To Action ================================== -->
    <section class="theme-bg call-to-act-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="call-to-act">
                        <div class="call-to-act-head">
                            <h3>Want to Become a Real Estate Agent?</h3>
                            <span>We'll help you to grow your career and growth.</span>
                        </div>
                        <a href="#" class="btn btn-call-to-act">SignUp Today</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Call To Action End ================================== -->

    <!-- ============================ Footer Start ================================== -->
    <footer class="dark-footer skin-dark-footer">
        <div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <img src="assets/img/logo-light.png" class="img-footer" alt="" />
                            <div class="footer-add">
                                <p>Collins Street West, Victoria 8007, Australia.</p>
                                <p>+1 246-345-0695</p>
                                <p>info@example.com</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <div class="footer-widget">
                            <h4 class="widget-title">Navigations</h4>
                            <ul class="footer-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="faq.html">FAQs Page</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="blog.html">Blog</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2">
                        <div class="footer-widget">
                            <h4 class="widget-title">The Highlights</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Apartment</a></li>
                                <li><a href="#">My Houses</a></li>
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#">Nightlife</a></li>
                                <li><a href="#">Villas</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2">
                        <div class="footer-widget">
                            <h4 class="widget-title">My Account</h4>
                            <ul class="footer-menu">
                                <li><a href="#">My Profile</a></li>
                                <li><a href="#">My account</a></li>
                                <li><a href="#">My Property</a></li>
                                <li><a href="#">Favorites</a></li>
                                <li><a href="#">Cart</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="widget-title">Download Apps</h4>
                            <a href="#" class="other-store-link">
                                <div class="other-store-app">
                                    <div class="os-app-icon">
                                        <i class="lni-playstore theme-cl"></i>
                                    </div>
                                    <div class="os-app-caps">
                                        Google Play
                                        <span>Get It Now</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="other-store-link">
                                <div class="other-store-app">
                                    <div class="os-app-icon">
                                        <i class="lni-apple theme-cl"></i>
                                    </div>
                                    <div class="os-app-caps">
                                        App Store
                                        <span>Now it Available</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6">
                        <p class="mb-0">© 2021 Resido. Designd By <a href="https://themezhub.com/">Themez Hub</a> All Rights Reserved</p>
                    </div>

                    <div class="col-lg-6 col-md-6 text-right">
                        <ul class="footer-bottom-social">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="registermodal">
                <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">Log In</h4>
                    <div class="login-form">
                        <form>

                            <div class="form-group">
                                <label>User Name</label>
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" placeholder="Username">
                                    <i class="ti-user"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-with-icon">
                                    <input type="password" class="form-control" placeholder="*******">
                                    <i class="ti-unlock"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Login</button>
                            </div>

                        </form>
                    </div>
                    <div class="modal-divider"><span>Or login via</span></div>
                    <div class="social-login mb-3">
                        <ul>
                            <li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google+</a></li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <p class="mt-5"><a href="#" class="link">Forgot password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Sign Up Modal -->
    <div class="modal fade signup" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="sign-up">
                <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">Sign Up</h4>
                    <div class="login-form">
                        <form>

                            <div class="row">

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Full Name">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="email" class="form-control" placeholder="Email">
                                            <i class="ti-email"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Username">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="password" class="form-control" placeholder="*******">
                                            <i class="ti-unlock"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="password" class="form-control" placeholder="123 546 5847">
                                            <i class="lni-phone-handset"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <select class="form-control">
                                                <option>As a Customer</option>
                                                <option>As a Agent</option>
                                                <option>As a Agency</option>
                                            </select>
                                            <i class="ti-briefcase"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Sign Up</button>
                            </div>

                        </form>
                    </div>
                    <div class="modal-divider"><span>Or login via</span></div>
                    <div class="social-login mb-3">
                        <ul>
                            <li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google+</a></li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <p class="mt-5"><i class="ti-user mr-1"></i>Already Have An Account? <a href="#" class="link">Go For LogIn</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/rangeslider.js"></script>
<script src="/assets/js/select2.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/slick.js"></script>
<script src="/assets/js/slider-bg.js"></script>
<script src="/assets/js/lightbox.js"></script>
<script src="/assets/js/imagesloaded.js"></script>

<script src="/assets/js/custom.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

<script>
    function openFilterSearch() {
        document.getElementById("filter_search").style.display = "block";
    }
    function closeFilterSearch() {
        document.getElementById("filter_search").style.display = "none";
    }
</script>

</body>


</html>
