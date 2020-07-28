<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fitrend</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-modal.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
    @notifyCss
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body >
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        @include('notify::messages')
        <div id="ex1" class="modal">
            <h3>Please fill your details below</h3>
           <form method="post" class="form-horizontal"  action="{{ route('subscribe') }}">
                @csrf
               <div class="form-group">
                 <label for="">Full Name</label>
                 <input type="text"
                   class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
               </div>
               <div class="form-group">
                <label for="">Contact Address</label>
                <input type="text"
                  class="form-control" name="contact_address" id="" aria-describedby="helpId" placeholder="">
              </div>
               <div class="form-group">
                   <label for="">Mobile Number</label>
                   <input type="text"
                   class="form-control" name="mobile_number" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text"
                    class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
                </div>
               
               <button type="submit" name="" id="" class="btn btn-primary btn-lg btn-block">Submit</button>
               <a href="#" type="button" name="" id="" rel="modal:close" class="btn btn-danger btn-lg btn-block">Close</a>
           </form>
         </div>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/fwl.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="menu_wrap d-none d-lg-block">
                                <div class="menu_wrap_inner d-flex align-items-center justify-content-end">
                                    <div class="main-menu">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="index.html" data-scroll-nav='0'>home</a></li>
                                                <li><a href="about.html" data-scroll-nav='2'>Product features</a></li>
                                                <li><a href="{{ route('app') }}">App</a></li>
                                                <li><a href="{{ route('contact') }}" >Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="book_room">
                                        <div class="book_btn">
                                            <a class="popup-with-form" data-scroll-nav="4" href="#test-form">Request a Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area" data-scroll-index="0">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Quality Health Services</span> <br>
                                    Anyplace, Anytime.</h3>
                                <a href="#" data-scroll-goto="1" class="boxed-btn5">Explore Fitrend
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    
    <!-- quality_area_start  -->
    <div class="quality_area" data-scroll-index="1">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <div class="section_title mb-55 text-center">
                        <h3>Fitrend QHS</h3>
                        <p>We bring Quality Health Services (QHS) through</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_quality">
                        <div class="icon">
                            <i class="flaticon-doctor"></i>
                        </div>
                        <h3>Monitoring</h3>
                        <p>Our continuous monitoring device helps patients in tracking the flunctuations in blood pressure and blood sugar.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_quality">
                        <div class="icon">
                            <i class="flaticon-find"></i>
                        </div>
                        <h3>Services</h3>
                        <p>We provide analytics for patient and doctor, keep health history & record, provide real-time chat, and appointment booking, for effective management.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_quality">
                        <div class="icon">
                            <i class="flaticon-customer-service"></i>
                        </div>
                        <h3>Support</h3>
                        <p>Either you have question (s) about how the system works, or complain on the service rendered — we’ve got your back.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quality_areaend  -->

    <!-- welcome_clicnic_area_start -->
    <div class="welcome_clicnic_area" data-scroll-index="2">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <div class="section_title mb-55 text-center">
                        <h3>Product Features</h3>
                       
                        <p>Understand the impact of blood pressure and sugar on your health with Fitrend monitoring device, enhanced dialogue with your doctor, and access
                            real-time support with Fitrend App.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="img/banner/bp-wrist.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        
                        <p class="pt-5">A non-invasive, wearable device for real time monitoring of blood pressure (BP) and blood sugar (glucose).</p>
                        <ul>
                            <li> <i class="flaticon-verified"></i> Real time monitoring </li>
                            <li> <i class="flaticon-verified"></i> Clinically accurate </li>
                            <li> <i class="flaticon-verified"></i> Alarm trigger, if outside a healthy range</li>
                        </ul>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info pt-5">
                        <p class="pt-5"> A user-friendly mobile and web analytics for patients and doctors interaction and control.</p>
                        <ul>
                            <li> <i class="flaticon-verified"></i> Track trends over time with a color-coded health graph </li>
                            <li> <i class="flaticon-verified"></i> Remote Patient Monitoring</li>
                            <li> <i class="flaticon-verified"></i> Real-time Chat</li>
                            <li> <i class="flaticon-verified"></i> Appointment Scheduling</li>
                            <li> <i class="flaticon-verified"></i> Health History </li>
                            <li> <i class="flaticon-verified"></i> Health Report </li>
                            <li> <i class="flaticon-verified"></i> Notification, & Reminder. </li>
                        </ul>
                    
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="img/banner/manage.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_clicnic_area_end -->
    
    <!-- register_customer_start-->
    <div class="book_apointment_area" data-scroll-index="4">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="popup_box ">
                        <div class="popup_inner">
                            <h3>
                                Request a
                            <span>Demo</span>
                            </h3>
                            <form action="{{ route('request.demo') }}" method="POST" >
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <select class="form-select wide" id="default-select" name="demo_category" class="">
                                            <option data-display="Please select your category">Please select your category</option>
                                            <option value="personal">Personal</option>
                                            <option value="private">Private</option>
                                            <option value="public">Public</option>
                                            <option value="Teaching Hospital">Teaching Hospital</option>
                                            <option value="Insurance Agency">Insurance Agency</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-7">
                                        <input type="text"  name="agency_name" placeholder="Hospital/Insurance Agency name ">
                                    </div>
                                    <div class="col-xl-5">
                                        <input type="text" name="contact_person"  placeholder="Contact Person">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" name="phone_number"  placeholder="Phone Number">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" name="email"  placeholder="Email Address">
                                    </div>
                                    <div class="col-xl-6">
                                        <input class="datepicker" name="appointment_date" placeholder="Appointment Date">
                                    </div>
                                    <div class="col-xl-6">
                                        <input class="timepicker" name="suitable_time" placeholder="Suitable time">
                                    </div>
                                    <div class="col-xl-12">
                                        <button type="submit" class="boxed-btn3">Request Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- register_customer_end -->

    <!-- Emergency_contact start -->
    <div class="Emergency_contact">
        <div class="Emergency_contact_inner ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="single_emergency">
                            <div class="info">
                                <span>We are here for you</span>
                                <h3>Register as a Potential Customer</h3>
                            </div>
                            <div class="info_button">
                                <a  class="boxed-btn3-white" href="#ex1" rel="modal:open">Register Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_emergency align-items-center d-flex justify-content-end">
                            <div class="icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="info">
                                <span>24/7 Customer Service</span>
                                <h3>09056893233</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Emergency_contact end -->

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/fwl.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">A non-invasive, wearable device for real-time monitoring of blood pressure and blood sugar,<br> with analytics for patient-doctor interaction and control.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/Fitrend-117117930091246">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/FitrendHq">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://linkedin.com/company/fitrendhq">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/fitrendhq/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    
                    <div class="col-xl-4  col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                We’re Available
                            </h3>
                            <ul class="meting_time">
                                <li class="d-flex justify-content-between "><span>Monday - Friday</span> <span>8:00 AM - 6:00 PM</span></li>
                                <li class="d-flex justify-content-between "><span>Saturday	</span> <span>8:00 AM - 6:00 PM</span></li>
                                <li class="d-flex justify-content-between "><span>Sunday</span> <span>8:00 AM - 2:00 PM</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Legal</a>
  
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

   

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    
    <script src="js/jquery-modal.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    @notifyJs

    <script src="js/main.js"></script>
    <script>
        $('.datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar"></span>'
            }
        });

        $('.timepicker').timepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-clock-o"></span>'
            }
        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>