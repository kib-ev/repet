@extends('layouts/site')

@section('content')
    <!--************************************
				Inner Banner Start
		*************************************-->
    <div id="tg-innerbanner" class="tg-innerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-innerbannercontent">
                        <div class="tg-pagetitle">
                            <h1>Highly Capable Tutors</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="tg-active">Tutors</li>
                        </ol>
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
                <div id="tg-twocolumns" class="tg-twocolumns">
                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 pull-right">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-tutors tg-tutorsgrid">
                                <div class="tg-mapbox">
                                    <div id="tg-map" class="tg-map"></div>
                                    <div class="tg-map-controls">
                                        <span id="doc-mapplus"><i class="fa fa-plus"></i></span>
                                        <span id="doc-mapminus"><i class="fa fa-minus"></i></span>
                                        <span id="doc-lock"><i class="fa fa-lock"></i></span>
                                    </div>

                                </div>
                                <div class="tg-activefilters">
                                    <div class="tg-filtertitle">
                                        <h2>Active Filters:</h2>
                                    </div>
                                    <div class="tg-filters">
                                        <a class="tg-btnfilter" href="#">
                                            <span><i>Gender:</i> Both</span>
                                        </a>
                                        <a class="tg-btnfilter" href="#">
                                            <span><i>Language:</i> English</span>
                                        </a>
                                        <a class="tg-btnfilter" href="#">
                                            <span><i>Age:</i> 22 - 26</span>
                                        </a>
                                        <a class="tg-btnfilter" href="#">
                                            <span><i>Time:</i> 09:00 - 18:00</span>
                                        </a>
                                        <a class="tg-btnclearall" href="#">Clear All</a>
                                    </div>
                                </div>
                                <div class="tg-tutor">
                                    <figure class="tg-tutordp">
                                        <a href="#"><img src="images/tutors/img-01.jpg" height="120" width="120" alt="image description"></a>
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
                                        <div class="tg-jobhead">
                                            <span class="tg-priceperhour">29$ <em>Per Hour</em></span>
                                            <h3><a href="#">Lawrence Troutman</a></h3>
                                            <div class="tg-subjects">Mathematics &amp; Statistics</div>
                                            <ul class="tg-jobsmetadata">
                                                <li><span class="tg-stars"><span></span></span></li>
                                                <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                                <li><a href="#">1509 view</a></li>
                                            </ul>
                                        </div>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elit eiusmod tempor incididunt ut laborei dolore magna aliqua minim veniam quis atrud exeration ullamcoaoris nisi ut aliquip exeao consuataui te irure.</p>
                                        </div>
                                        <div class="tg-jobfoot">
                                            <ul class="tg-tags">
                                                <li><a class="tg-tag" href="#">Accounting</a></li>
                                                <li><a class="tg-tag" href="#">Finance</a></li>
                                                <li><a class="tg-tag" href="#">Law</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-tutor">
                                    <figure class="tg-tutordp">
                                        <a href="#"><img src="images/tutors/img-02.jpg" height="120" width="120" alt="image description"></a>
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
                                        <div class="tg-jobhead">
                                            <span class="tg-priceperhour">24$ <em>Per Hour</em></span>
                                            <h3><a href="#">Ahmad Carstensen</a></h3>
                                            <div class="tg-subjects">Mathematics &amp; Statistics</div>
                                            <ul class="tg-jobsmetadata">
                                                <li><span class="tg-stars"><span></span></span></li>
                                                <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                                <li><a href="#">1509 view</a></li>
                                            </ul>
                                        </div>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elit eiusmod tempor incididunt ut laborei dolore magna aliqua minim veniam quis atrud exeration ullamcoaoris nisi ut aliquip exeao consuataui te irure.</p>
                                        </div>
                                        <div class="tg-jobfoot">
                                            <ul class="tg-tags">
                                                <li><a class="tg-tag" href="#">Accounting</a></li>
                                                <li><a class="tg-tag" href="#">Finance</a></li>
                                                <li><a class="tg-tag" href="#">Law</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-tutor">
                                    <figure class="tg-tutordp">
                                        <a href="#"><img src="images/tutors/img-03.jpg" height="120" width="120" alt="image description"></a>
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
                                        <div class="tg-jobhead">
                                            <span class="tg-priceperhour">29$ <em>Per Hour</em></span>
                                            <h3><a href="#">Lawrence Troutman</a></h3>
                                            <div class="tg-subjects">Mathematics &amp; Statistics</div>
                                            <ul class="tg-jobsmetadata">
                                                <li><span class="tg-stars"><span></span></span></li>
                                                <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                                <li><a href="#">1509 view</a></li>
                                            </ul>
                                        </div>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elit eiusmod tempor incididunt ut laborei dolore magna aliqua minim veniam quis atrud exeration ullamcoaoris nisi ut aliquip exeao consuataui te irure.</p>
                                        </div>
                                        <div class="tg-jobfoot">
                                            <ul class="tg-tags">
                                                <li><a class="tg-tag" href="#">Accounting</a></li>
                                                <li><a class="tg-tag" href="#">Finance</a></li>
                                                <li><a class="tg-tag" href="#">Law</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-tutor">
                                    <figure class="tg-tutordp">
                                        <a href="#"><img src="images/tutors/img-04.jpg" height="120" width="120" alt="image description"></a>
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
                                        <div class="tg-jobhead">
                                            <span class="tg-priceperhour">24$ <em>Per Hour</em></span>
                                            <h3><a href="#">Ahmad Carstensen</a></h3>
                                            <div class="tg-subjects">Mathematics &amp; Statistics</div>
                                            <ul class="tg-jobsmetadata">
                                                <li><span class="tg-stars"><span></span></span></li>
                                                <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                                <li><a href="#">1509 view</a></li>
                                            </ul>
                                        </div>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elit eiusmod tempor incididunt ut laborei dolore magna aliqua minim veniam quis atrud exeration ullamcoaoris nisi ut aliquip exeao consuataui te irure.</p>
                                        </div>
                                        <div class="tg-jobfoot">
                                            <ul class="tg-tags">
                                                <li><a class="tg-tag" href="#">Accounting</a></li>
                                                <li><a class="tg-tag" href="#">Finance</a></li>
                                                <li><a class="tg-tag" href="#">Law</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-tutor">
                                    <figure class="tg-tutordp">
                                        <a href="#"><img src="images/tutors/img-05.jpg" height="120" width="120" alt="image description"></a>
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
                                        <div class="tg-jobhead">
                                            <span class="tg-priceperhour">29$ <em>Per Hour</em></span>
                                            <h3><a href="#">Lawrence Troutman</a></h3>
                                            <div class="tg-subjects">Mathematics &amp; Statistics</div>
                                            <ul class="tg-jobsmetadata">
                                                <li><span class="tg-stars"><span></span></span></li>
                                                <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                                <li><a href="#">1509 view</a></li>
                                            </ul>
                                        </div>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elit eiusmod tempor incididunt ut laborei dolore magna aliqua minim veniam quis atrud exeration ullamcoaoris nisi ut aliquip exeao consuataui te irure.</p>
                                        </div>
                                        <div class="tg-jobfoot">
                                            <ul class="tg-tags">
                                                <li><a class="tg-tag" href="#">Accounting</a></li>
                                                <li><a class="tg-tag" href="#">Finance</a></li>
                                                <li><a class="tg-tag" href="#">Law</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-tutor">
                                    <figure class="tg-tutordp">
                                        <a href="#"><img src="images/tutors/img-06.jpg" height="120" width="120" alt="image description"></a>
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
                                        <div class="tg-jobhead">
                                            <span class="tg-priceperhour">24$ <em>Per Hour</em></span>
                                            <h3><a href="#">Ahmad Carstensen</a></h3>
                                            <div class="tg-subjects">Mathematics &amp; Statistics</div>
                                            <ul class="tg-jobsmetadata">
                                                <li><span class="tg-stars"><span></span></span></li>
                                                <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                                <li><a href="#">1509 view</a></li>
                                            </ul>
                                        </div>
                                        <div class="tg-description">
                                            <p>Consectetur adipisicing elit eiusmod tempor incididunt ut laborei dolore magna aliqua minim veniam quis atrud exeration ullamcoaoris nisi ut aliquip exeao consuataui te irure.</p>
                                        </div>
                                        <div class="tg-jobfoot">
                                            <ul class="tg-tags">
                                                <li><a class="tg-tag" href="#">Accounting</a></li>
                                                <li><a class="tg-tag" href="#">Finance</a></li>
                                                <li><a class="tg-tag" href="#">Law</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <nav class="tg-pagination">
                                    <ul>
                                        <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="tg-active"><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>...</li>
                                        <li><a href="#">10</a></li>
                                        <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-left">
                        <aside id="tg-sidebar" class="tg-sidebar">
                            <form class="tg-formjobsearch">
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Categories</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="form-group">
                                                <div class="tg-joinus">
														<span class="tg-radio">
															<input type="radio" id="jobs" name="search" value="jobs" checked="">
															<label for="jobs">jobs</label>
														</span>
                                                    <span class="tg-radio">
															<input type="radio" id="stutor" name="search" value="tutor">
															<label for="stutor">tutor</label>
														</span>
                                                    <span class="tg-radio">
															<input type="radio" id="sacademy" name="search" value="academy">
															<label for="sacademy">academy</label>
														</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="tg-select">
                                                    <select>
                                                        <option>Academics</option>
                                                        <option>Academics</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="tg-select">
                                                    <select>
                                                        <option>A-Levels</option>
                                                        <option>A-Levels</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-widgettitle tg-paddingtop">
                                            <h3>Subjects</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="form-group">
                                                <div class="tg-filterscrollbar tg-themescrollbar tg-subjectcheckbox">
														<span class="tg-checkbox">
															<input type="checkbox" id="subject1" name="subject" value="a">
															<label for="subject1">English Literature</label>
														</span>
                                                    <span class="tg-checkbox">
															<input type="checkbox" id="subject2" name="subject" value="b">
															<label for="subject2">Economics</label>
														</span>
                                                    <span class="tg-checkbox">
															<input type="checkbox" id="subject3" name="subject" value="c">
															<label for="subject3">Computer Science</label>
														</span>
                                                    <span class="tg-checkbox">
															<input type="checkbox" id="subject4" name="subject" value="d">
															<label for="subject4">Business Studies</label>
														</span>
                                                    <span class="tg-checkbox">
															<input type="checkbox" id="subject5" name="subject" value="e">
															<label for="subject5">Art &amp; Design</label>
														</span>
                                                    <span class="tg-checkbox">
															<input type="checkbox" id="subject6" name="subject" value="f">
															<label for="subject6">English Literature</label>
														</span>
                                                    <span class="tg-checkbox">
															<input type="checkbox" id="subject7" name="subject" value="g">
															<label for="subject7">Economics</label>
														</span>
                                                    <span class="tg-checkbox">
															<input type="checkbox" id="subject8" name="subject" value="h">
															<label for="subject8">Computer Science</label>
														</span>
                                                    <span class="tg-checkbox">
															<input type="checkbox" id="subject9" name="subject" value="i">
															<label for="subject9">Business Studies</label>
														</span>
                                                </div>
                                            </div>
                                            <span class="tg-geolocationicon">
													<input type="text" name="geolocation" class="form-control" placeholder="Geo Location">
												</span>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Fee Range</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div id="tg-feerangeslider" class="tg-feerangeslider tg-themerangeslider"></div>
                                            <div class="tg-amountbox">
                                                <input type="text" id="tg-feerangeamount" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Gender</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="tg-genderradio">
													<span class="tg-radio">
														<input type="radio" id="male" name="gender" value="male" checked="">
														<label for="male"><span>male</span><i>(240)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="female" name="gender" value="female">
														<label for="female"><span>female</span><i>(149)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="both" name="gender" value="both">
														<label for="both"><span>both</span><i>(389)</i></label>
													</span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Age Range</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="tg-widgetcontent">
                                                <div id="tg-agerangeslider" class="tg-agerangeslider tg-themerangeslider"></div>
                                                <div class="tg-amountbox">
                                                    <input type="text" id="tg-agerangeamount" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Language</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="tg-filterscrollbar tg-themescrollbar tg-languagesradio">
													<span class="tg-radio">
														<input type="radio" id="all" name="language" value="all" checked="">
														<label for="all"><span>all</span><i>(389)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="eng" name="language" value="english">
														<label for="eng"><span>english</span><i>(256)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="arabic" name="language" value="arabic">
														<label for="arabic"><span>Arabic</span><i>(56)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="czech" name="language" value="czech">
														<label for="czech"><span>czech</span><i>(43)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="danish" name="language" value="danish">
														<label for="danish"><span>danish</span><i>(38)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="chinese" name="language" value="chinese">
														<label for="chinese"><span>Chinese</span><i>(389)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="french" name="language" value="french">
														<label for="french"><span>French</span><i>(256)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="german" name="language" value="german">
														<label for="german"><span>German</span><i>(56)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="portuguese" name="language" value="portuguese">
														<label for="portuguese"><span>Portuguese</span><i>(43)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="romanian" name="language" value="romanian">
														<label for="romanian"><span>Romanian</span><i>(38)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="dutch" name="language" value="dutch">
														<label for="dutch"><span>Dutch</span><i>(389)</i></label>
													</span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Time Slots</h3>
                                        </div>
                                        <div class="input-group tg-timepicker">
                                            <input id="tg-timepicker1" type="text" class="form-control input-small" placeholder="From">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                        </div>
                                        <div class="input-group tg-timepicker">
                                            <input id="tg-timepicker2" type="text" class="form-control input-small" placeholder="T0">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="tg-timeslotradio">
													<span class="tg-radio">
														<input type="radio" id="timeslotone" name="timeslot" value="all" checked="">
														<label for="timeslotone">All</label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="timeslottwo" name="timeslot" value="10:00 - 11:00">
														<label for="timeslottwo">10:00 - 11:00</label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="timeslotthree" name="timeslot" value="11:00 - 12:00">
														<label for="timeslotthree">11:00 - 12:00</label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="timeslotfour" name="timeslot" value="12:00 - 13:00">
														<label for="timeslotfour">12:00 - 13:00</label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="timeslotfive" name="timeslot" value="13:00 - 14:00">
														<label for="timeslotfive">13:00 - 14:00</label>
													</span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection