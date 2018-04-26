<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-chosen.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.countdown.css')}}">
    <link rel="stylesheet" href="{{asset('css/customScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/simplyscroll.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/transitions.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body class="{{ Route::currentRouteName() == '' ? 'tg-home' : ''}} {{ Auth::check() ? 'tg-login' : ''  }}">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Wrapper Start
*************************************-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <!--************************************
            Header Start
    *************************************-->
    <header id="tg-header" class="tg-header tg-haslayout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <strong class="tg-logo">
                        <a href="{{ url('/') }}"><img src="/images/logo.png" alt="image description"></a>
                    </strong>
                    <div class="tg-navigationarea">
                        <nav id="tg-nav" class="tg-nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#tg-navigation" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="tg-navigation" class="tg-navigation collapse navbar-collapse">
                                <ul>
                                    <li class="{{ Route::currentRouteName() == '' ? 'tg-active' : '' }}">
                                        <a href="{{ url('/') }}">Главная</a>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'tutors' ? 'tg-active' : '' }}">
                                        <a href="{{ route('tutors') }}">Репетиторы</a>
                                        {{--<ul class="tg-dropdownmenu">--}}
                                        {{--<li><a href="jobs.html">Job</a></li>--}}
                                        {{--<li><a href="job-detail.html">Job Detail</a></li>--}}
                                        {{--</ul>--}}
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'tuition-centers' ? 'tg-active' : '' }}">
                                        <a href="{{ route('tuition-centers') }}">Центры обучения</a>
                                        {{--<ul class="tg-dropdownmenu">--}}
                                        {{--<li><a href="tutors.html">tutor</a></li>--}}
                                        {{--<li><a href="tutor-detail.html">tutor Detail</a></li>--}}
                                        {{--</ul>--}}
                                    </li>
                                    <li class="">
                                        <a href="javascript:void(0);">О нас</a>
                                    </li>
                                    <li class="">
                                        <a href="/#tg-infobox">Контакты</a>
                                    </li>
                                    {{--<li class="tg-hasdropdown">--}}
                                    {{--<a href="javascript:void(0);">Tuition Centre</a>--}}
                                    {{--<ul class="tg-dropdownmenu">--}}
                                    {{--<li><a href="tuition-center.html">Tuition Centre</a></li>--}}
                                    {{--<li><a href="tutioncentre-detail.html">Tuition center Detail</a></li>--}}
                                    {{--<li><a href="job-detail-by-tutioncenter.html">job Detail by Tuition center</a></li>--}}
                                    {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="tg-hasdropdown">--}}
                                    {{--<a href="javascript:void(0);">dashboard</a>--}}
                                    {{--<ul class="tg-dropdownmenu">--}}
                                    {{--<li class="tg-hasdropdown">--}}
                                    {{--<a href="javascript:void(0);">dashboard tuition center</a>--}}
                                    {{--<ul class="tg-dropdownmenu">--}}
                                    {{--<li><a href="dashboard-tuition-centres.html">dash board tuition center</a></li>--}}
                                    {{--<li><a href="dashboard-tuitions-team.html">team</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-centres-post-job.html">post job</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-manage-jobs.html">manage jobs</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-favorites-listing.html">favorites list</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-Schedule.html">schedule</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-invoices.html">invoices</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-profile-setting.html">profile setting</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-centres-academics-settings.html">academic settings</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-centres-privacy-settings.html">privacy setting</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-security-setting.html">security setting</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-upgrade-package.html">upgrade package</a></li>--}}
                                    {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="tg-hasdropdown">--}}
                                    {{--<a href="javascript:void(0);">dashboard tutor</a>--}}
                                    {{--<ul class="tg-dropdownmenu">--}}
                                    {{--<li><a href="dashboard-tutor.html">dashboard tutor</a></li>--}}
                                    {{--<li><a href="dashboardtutor-favorites-listing.html">favorites list</a></li>--}}
                                    {{--<li><a href="dashboardtutor-myschedule.html">schedule</a></li>--}}
                                    {{--<li><a href="dashboard-tutor-invoices.html">invoices</a></li>--}}
                                    {{--<li><a href="dashboard-tutor-profile-settings.html">profile setting</a></li>--}}
                                    {{--<li><a href="dashboard-tutor-privacy-settings.html">privacy setting</a></li>--}}
                                    {{--<li><a href="dashboard-tutor-security-settings.html">security setting</a></li>--}}
                                    {{--<li><a href="dashboard-tutor-upgradepackage.html">upgrade package</a></li>--}}
                                    {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="tg-hasdropdown">--}}
                                    {{--<a href="javascript:void(0);">--}}
                                    {{--<i class="hidden-xs fa fa-navicon"></i>--}}
                                    {{--<span class="hidden-lg hidden-md hidden-sm">Pages</span>--}}
                                    {{--</a>--}}
                                    {{--<ul class="tg-dropdownmenu">--}}
                                    {{--<li><a href="job-detail-by-sutudent.html">job Detail by Student</a></li>--}}
                                    {{--<li><a href="how-it-works.html">How it works?</a></li>--}}
                                    {{--<li><a href="contactus.html">Contact</a></li>--}}
                                    {{--<li><a href="404error.html">404</a></li>--}}
                                    {{--<li><a href="news-grid.html">news</a></li>--}}
                                    {{--<li><a href="news-detail.html">news detail</a></li>--}}
                                    {{--</ul>--}}
                                    {{--</li>--}}
                                </ul>
                            </div>
                        </nav>

                        @include('layouts/parts/tg-admin')

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->
@yield('content')
<!--************************************
     Footer Start
*************************************-->
    <footer id="tg-footer" class="tg-footer tg-haslayout">
        <div class="tg-infobox">
            <div class="container">
                <div class="row">
                    <div class="tg-fcols">
                        <div class="tg-fcol">
                            <strong class="tg-logo"><a href="#"><img src="/images/logo.png" alt="image description"></a></strong>
                            <div class="tg-description">
                                <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquat
                                    enim ad minim veniam nostrud exercitation ullamco laboris nisi ut aliquip exeaodo
                                    consequat aute irure dolor.</p>
                            </div>
                            <ul class="tg-socialicons">
                                <li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="tg-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="tg-fcol">
                            <div class="tg-icon">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="tg-title">
                                <h3>Talk To Us</h3>
                            </div>
                            <ul class="tg-email">
                                <li><a href="query@domain.com">query@domain.com</a></li>
                                <li><a href="support@domain.com">support@domain.com</a></li>
                            </ul>
                        </div>
                        <div class="tg-fcol">
                            <div class="tg-icon">
                                <i class="fa fa-paper-plane-o"></i>
                            </div>
                            <div class="tg-title">
                                <h3>Stay Updated</h3>
                            </div>
                            <form class="tg-newsletter" action="index_submit" method="post" enctype="text/plain">
                                <fieldset>
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                    <button type="submit"><i class="fa fa-check"></i></button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-quicklinks">
            <div class="container">
                <div class="row">
                    <div class="tg-fcols">
                        <div class="tg-fcol">
                            <div class="tg-title tg-icon">
                                <h3 class="fa fa-map-signs">By Location</h3>
                            </div>
                            <ul>
                                <li><a href="#">United Kingdom</a></li>
                                <li><a href="#">France</a></li>
                                <li><a href="#">U.S.A</a></li>
                                <li><a href="#">Egypt</a></li>
                                <li><a href="#">United Emirate</a></li>
                                <li><a href="#">China</a></li>
                                <li><a href="#">Saudi Arab</a></li>
                                <li><a href="#">Brazil</a></li>
                                <li><a href="#">Germany</a></li>
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">Sydney</a></li>
                                <li><a href="#">View All</a></li>
                            </ul>
                        </div>
                        <div class="tg-fcol">
                            <div class="tg-title tg-icon">
                                <h3 class="fa fa-location-arrow">By City</h3>
                            </div>
                            <ul>
                                <li><a href="#">Arnos Grove</a></li>
                                <li><a href="#">Dalston</a></li>
                                <li><a href="#">Balham</a></li>
                                <li><a href="#">Denmark Hill</a></li>
                                <li><a href="#">Barkingside</a></li>
                                <li><a href="#">Derry Downs</a></li>
                                <li><a href="#">Barnes Cray</a></li>
                                <li><a href="#">East Bedfont</a></li>
                                <li><a href="#">Camden Town</a></li>
                                <li><a href="#">Eden Park</a></li>
                                <li><a href="#">Canonbury</a></li>
                                <li><a href="#">View All</a></li>
                            </ul>
                        </div>
                        <div class="tg-fcol">
                            <div class="tg-title tg-icon">
                                <h3 class="fa fa-graduation-cap">By Discipline</h3>
                            </div>
                            <ul>
                                <li><a href="#">All Disciplines</a></li>
                                <li><a href="#">Culinary</a></li>
                                <li><a href="#">Academics</a></li>
                                <li><a href="#">Dance</a></li>
                                <li><a href="#">Acting</a></li>
                                <li><a href="#">Health &amp; Fitness</a></li>
                                <li><a href="#">Advising</a></li>
                                <li><a href="#">Languages</a></li>
                                <li><a href="#">Athletics</a></li>
                                <li><a href="#">Mental Health</a></li>
                                <li><a href="#">Counseling</a></li>
                                <li><a href="#">View All</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-footerbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <nav id="tg-footernav" class="tg-footernav">
                            <ul>
                                <li class="tg-active"><a href="">Home</a></li>
                                <li><a href="">jobs</a></li>
                                <li><a href="">tutors</a></li>
                                <li><a href="">Academies</a></li>
                                <li><a href="">How it works?</a></li>
                                <li><a href="">Contact</a></li>
                                <li><a href="">Pages</a></li>
                            </ul>
                        </nav>
                        <span class="tg-copyright">2017 All Rights Reserved &copy; <a
                                    href="#">Tutor Directory</a></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--************************************
            Footer End
    *************************************-->
</div>
<!--************************************
     Wrapper End
*************************************-->
<script src="{{ asset('js/vendor/jquery-library.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-add-clear.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('js/mapclustering/data.json') }}"></script>
<script src="{{ asset('http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=ru') }}"></script>
<script src="{{ asset('js/mapclustering/markerclusterer.min.js') }}"></script>
<script src="{{ asset('js/mapclustering/infobox.js') }}"></script>
<script src="{{ asset('js/mapclustering/map.js') }}"></script>
<script src="{{ asset('js/customScrollbar.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.js') }}"></script>
<script src="{{ asset('js/simplyscroll.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/chosen.jquery.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/countTo.js') }}"></script>
<script src="{{ asset('js/loader.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/gmap3.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script>
    jQuery(document).ready(function(e) {
        if ($('#tg-map').length > 0) {
            tutor_init_map_script();
        }
    });
</script>

</body>
</html>