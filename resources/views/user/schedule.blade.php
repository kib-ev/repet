@extends('layouts/site')

@section('content')
    <!--************************************
                    Inner Banner Start
            *************************************-->
    <div id="tg-innerbanner" class="tg-innerbanner tg-dashboardinnerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="/images/parallax/bgparallax-12.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-innerbannercontent">
                        <div class="tg-pagehead">
                            <figure class="tg-tutordp">
                                <a href="#"><img src="/images/tutors/img-01.jpg" height="120" width="120" alt="image description"></a>
                                <figcaption>
                                    <a class="tg-usericon tg-iconfeatured" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-bolt"></i>
                                            <span>featured</span>
                                        </em>
                                    </a>
                                    <a class="tg-usericon tg-iconvarified" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-shield"></i>
                                            <span>varified</span>
                                        </em>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="tg-tutorinfo">
                                <a class="tg-btnedit" href="#"><i class="fa fa-pencil"></i></a>
                                <div class="tg-jobhead">
                                    <h2>Lawrence Troutman</h2>
                                    <div class="tg-subjects">Mathematics &amp; Statistics</div>
                                    <ul class="tg-jobsmetadata">
                                        <li><span class="tg-stars"><span></span></span></li>
                                        <li><a href="#">1509 view</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Inner Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-content" class="tg-content tg-dashboard tg-tutordashboard">

                    @include('user/parts/sidebar')

                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                        <div class="tg-pagehead">
                            <figure class="tg-tutordp">
                                <a href="#"><img src="/images/tutors/img-01.jpg" height="120" width="120" alt="image description"></a>
                                <figcaption>
                                    <a class="tg-usericon tg-iconfeatured" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-bolt"></i>
                                            <span>featured</span>
                                        </em>
                                    </a>
                                    <a class="tg-usericon tg-iconvarified" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-shield"></i>
                                            <span>varified</span>
                                        </em>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="tg-tutorinfo">
                                <a class="tg-btnedit" href="#"><i class="fa fa-pencil"></i></a>
                                <div class="tg-jobhead">
                                    <h2>Lawrence Troutman</h2>
                                    <div class="tg-subjects">Mathematics &amp; Statistics</div>
                                    <ul class="tg-jobsmetadata">
                                        <li><span class="tg-stars"><span></span></span></li>
                                        <li><a href="#">1509 view</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <form class="tg-formtheme">
                            <h3>My Schedule</h3>
                            <fieldset>
                                <label>Sunday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="sundystarttime" name="sundystarttime" value="sundystarttime">
                                            <label for="sundystarttime">Not working today</label>
                                        </span>
                                <label>Monday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="mondaystarttime" name="mondaystarttime" value="mondaystarttime">
                                            <label for="mondaystarttime">Not working today</label>
                                        </span>
                                <label>Tuesday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="tuesdaystarttime" name="tuesdaystarttime" value="tuesdaystarttime">
                                            <label for="tuesdaystarttime">Not working today</label>
                                        </span>
                                <label>Wednesday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="wednesdaystarttime" name="wednesdaystarttime" value="wednesdaystarttime">
                                            <label for="wednesdaystarttime">Not working today</label>
                                        </span>
                                <label>Thursday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="thursdaystarttime" name="thursdaystarttime" value="thursdaystarttime">
                                            <label for="thursdaystarttime">Not working today</label>
                                        </span>
                                <label>Friday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="fridaydaystarttime" name="fridaydaystarttime" value="fridaydaystarttime">
                                            <label for="fridaydaystarttime">Not working today</label>
                                        </span>
                                <label>Saturday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group">
                                        <div class="tg-inputicon">
                                            <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                            <span class="fa fa-calendar-check-o"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group">
                                        <div class="tg-inputicon">
                                            <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                            <span class="fa fa-calendar-check-o"></span>
                                        </div>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="saturdaydaystarttime" name="saturdaydaystarttime" value="saturdaydaystarttime">
                                            <label for="saturdaydaystarttime">Not working today</label>
                                        </span>
                            </fieldset>
                            <fieldset>
                                <a class="tg-btn" href="#">Update All Changes</a>
                                <span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->
@endsection