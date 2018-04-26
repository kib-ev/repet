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
                        <div class="tg-alertmessages">
                            <div class="alert alert-success tg-alertmessage fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <i class="fa fa-check"></i>
                                <span><strong>success Message.</strong> Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minimati.</span>
                            </div>
                            <div class="alert alert-info tg-alertmessage fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <i class="fa fa-commenting-o"></i>
                                <span><strong>info Message.</strong> Adipisicing elit, sed do eiusmod temp labore et dolore magna aliqua enim ad minimati.</span>
                            </div>
                            <div class="alert alert-warning tg-alertmessage fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <i class="fa fa-exclamation-triangle"></i>
                                <span><strong>warning Message.</strong> Adipisicing elit, sed do eiusmod tempor  dolore magna aliqua enim ad minimati.</span>
                            </div>
                            <div class="alert alert-danger tg-alertmessage fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <i class="fa fa-bug"></i>
                                <span><strong>Error Message.</strong> Adipisicing elit, sed do eiusmod et dolore magna aliqua enim ad minimati.</span>
                            </div>
                        </div>
                        <div class="tg-contentbox">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <h2>New Messages</h2>
                                    <ul class="tg-messages">
                                        <li class="th-unread">
                                            <strong>Dante Edberg: </strong>
                                            <span>Cliqua enim ad minim veniam asostrud exierat ullacoi laborisi nisi utmodo</span>
                                            <time datetime="2011-01-12">5 min ago</time>
                                        </li>
                                        <li class="th-unread">
                                            <strong>Mabelle Agostini: </strong>
                                            <span>Cliqua enim ad minim veniam asostrud exierat ullacoi laborisi nisi utmodo</span>
                                            <time datetime="2011-01-12">7 min ago</time>
                                        </li>
                                        <li class="th-unread">
                                            <strong>Ken Boros: </strong>
                                            <span>Cliqua enim ad minim veniam asostrud exierat ullacoi laborisi nisi utmodo</span>
                                            <time datetime="2011-01-12">9 min ago</time>
                                        </li>
                                        <li>
                                            <strong>Kattie Frizzell: </strong>
                                            <span>Cliqua enim ad minim veniam asostrud exierat ullacoi laborisi nisi utmodo</span>
                                            <time datetime="2011-01-12">40 min ago</time>
                                        </li>
                                        <li>
                                            <strong>Saturnina Lynch: </strong>
                                            <span>Cliqua enim ad minim veniam asostrud exierat ullacoi laborisi nisi utmodo</span>
                                            <time datetime="2011-01-12">1 year ago</time>
                                        </li>
                                    </ul>
                                    <a class="tg-btn tg-btn-lg" href="#">view all</a>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <h2>Total Favorites</h2>
                                    <div class="tg-favoritesadded">
                                        <span><span>6298</span>Favorites Added</span>
                                        <p><strong>You're Awesome!</strong>People Like You &amp; added you in their favorites list.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-contentbox">
                            <h2>Views Per Month</h2>
                            <div id="tg-viewpermonthchart" class="tg-viewpermonthchart tg-viewschart"></div>
                        </div>
                        <div class="tg-contentbox">
                            <h2>Recent Reviews</h2>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="tg-ratingbox">
                                        <div class="tg-averagerating">
                                            <h3>Average Rating</h3>
                                            <em>4.7</em>
                                            <span class="tg-stars"><span></span></span>
                                        </div>
                                        <div id="tg-userskill" class="tg-userskill">
                                            <div class="tg-skill">
                                                <span class="tg-skillname">5 Stars</span>
                                                <span class="tg-skillpercentage">75%</span>
                                                <div class="tg-skillbox">
                                                    <div class="tg-skillholder" data-percent="75%">
                                                        <div class="tg-skillbar" style="width: 75%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-skill">
                                                <span class="tg-skillname">4 Stars</span>
                                                <span class="tg-skillpercentage">64%</span>
                                                <div class="tg-skillbox">
                                                    <div class="tg-skillholder" data-percent="64%">
                                                        <div class="tg-skillbar" style="width: 64%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-skill">
                                                <span class="tg-skillname">3 Stars</span>
                                                <span class="tg-skillpercentage">30%</span>
                                                <div class="tg-skillbox">
                                                    <div class="tg-skillholder" data-percent="30%">
                                                        <div class="tg-skillbar" style="width: 30%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-skill">
                                                <span class="tg-skillname">2 Stars</span>
                                                <span class="tg-skillpercentage">46%</span>
                                                <div class="tg-skillbox">
                                                    <div class="tg-skillholder" data-percent="46%">
                                                        <div class="tg-skillbar" style="width: 46%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-skill">
                                                <span class="tg-skillname">1 Stars</span>
                                                <span class="tg-skillpercentage">16%</span>
                                                <div class="tg-skillbox">
                                                    <div class="tg-skillholder" data-percent="16%">
                                                        <div class="tg-skillbar" style="width: 16%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <ul class="tg-comment">
                                        <li>
                                            <div class="tg-commenter">
                                                <a class="tg-btntogglecontent" href="#"><i class="fa fa-angle-down"></i></a>
                                                <figure class="tg-commenterimg">
                                                    <img src="/images/avatar/avatarimg-01.jpg" alt="commenter image">
                                                </figure>
                                                <div class="tg-commenterinfo">
                                                    <div class="tg-authorhead">
                                                        <div class="tg-authorname">
                                                            <h3><a href="#">Dante Edberg</a></h3>
                                                            <time datetime="2016-10-10">2 days ago</time>
                                                        </div>
                                                        <span class="tg-stars"><span></span></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>Cliqua enim ad minim veniam quis nostrud exerciton ullacoi laborisi nisi ut aliquip exmmodo consequat irure.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-commenter">
                                                <a class="tg-btntogglecontent" href="#"><i class="fa fa-angle-down"></i></a>
                                                <figure class="tg-commenterimg">
                                                    <img src="/images/avatar/avatarimg-02.jpg" alt="commenter image">
                                                </figure>
                                                <div class="tg-commenterinfo">
                                                    <div class="tg-authorhead">
                                                        <div class="tg-authorname">
                                                            <h3><a href="#">Dante Edberg</a></h3>
                                                            <time datetime="2016-10-10">2 days ago</time>
                                                        </div>
                                                        <span class="tg-stars"><span></span></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>Cliqua enim ad minim veniam quis nostrud exerciton ullacoi laborisi nisi ut aliquip exmmodo consequat irure.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-commenter">
                                                <a class="tg-btntogglecontent" href="#"><i class="fa fa-angle-down"></i></a>
                                                <figure class="tg-commenterimg">
                                                    <img src="/images/avatar/avatarimg-03.jpg" alt="commenter image">
                                                </figure>
                                                <div class="tg-commenterinfo">
                                                    <div class="tg-authorhead">
                                                        <div class="tg-authorname">
                                                            <h3><a href="#">Dante Edberg</a></h3>
                                                            <time datetime="2016-10-10">2 days ago</time>
                                                        </div>
                                                        <span class="tg-stars"><span></span></span>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>Cliqua enim ad minim veniam quis nostrud exerciton ullacoi laborisi nisi ut aliquip exmmodo consequat irure.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a class="tg-btn tg-btn-lg" href="#">view all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->
@endsection