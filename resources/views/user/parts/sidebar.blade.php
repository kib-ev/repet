<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
    <div class="tg-widgetdashboard">
        <h3>панель управления <a class="tg-btndashboard" href="javascript:void(0);"><i class="fa fa-angle-down"></i></a></h3>
        <time class="tg-currentdatetime" datetime="2011-01-12">
            <span>monday 27, 2017</span>
            <em>10:10 am</em>
        </time>
        <nav id="tg-dashboardnav" class="tg-dashboardnav">
            <ul>
                <li class="{{ Route::currentRouteName() == 'tutor-dashboard' ? 'tg-active' : '' }}">
                    <a href="{{ route('tutor-dashboard') }}">
                        <i class="fa fa-line-chart"></i>
                        <span>Обзор</span>
                    </a>
                </li>
                <li class="{{ Route::currentRouteName() == 'tutor-profile' ? 'tg-active' : '' }}">
                    <a href="{{ route('tutor-profile') }}">
                        <i class="fa fa-user"></i>
                        <span>Настройки профиля</span>
                    </a>
                </li>
                <li class="{{ Route::currentRouteName() == 'tutor-schedule' ? 'tg-active' : '' }}">
                    <a href="{{ route('tutor-schedule') }}">
                        <i class="fa fa-clock-o"></i>
                        <span>Мой режим работы</span>
                    </a>
                </li>
                <li>
                    <a href="dashboardtutor-favorites-listing.html">
                        <i class="fa fa-heart"></i>
                        <span>Favorites Listing</span>
                    </a>
                </li>
                <li class="tg-successmessage">
                    <a href="dashboard-tutor-invoices.html">
                        <i class="fa fa-clone"></i>
                        <span>Invoices</span>
                    </a>
                </li>
                <li class="tg-errormessage">
                    <a href="dashboard-tutor-upgradepackage.html">
                        <i class="fa fa-arrow-up"></i>
                        <span>Upgrade Package</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-tutor-security-settings.html">
                        <i class="fa fa-gears"></i>
                        <span>Security Settings</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard-tutor-privacy-settings.html">
                        <i class="fa fa-eye"></i>
                        <span>Privacy Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-sign-out"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="tg-widgetdashboard">
        <a class="tg-customerviewpage" href="#">
            <i class="fa fa-tv"></i>
            <span>What do my customers see?</span>
        </a>
    </div>
    <div class="tg-widgetdashboard">
        <div class="tg-dashboardnotification tg-jobsposted"><span>06</span>Total Job Posted</div>
        <div class="tg-dashboardnotification tg-jobsremaining"><span>02</span>Total Job Remaining</div>
        <div class="tg-dashboardnotification tg-pkgexpirey"><span>13 days</span>silver package Expire in</div>
    </div>
</div>