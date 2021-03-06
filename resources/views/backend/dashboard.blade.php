@extends('layouts.backend')

@section('content')
<section id="content">
    <div class="card">
        <div class="card__header">
            <h2>Sales Statistics <small>Vestibulum purus quam scelerisque, mollis nonummy metus</small></h2>

            <div class="actions">
                <a href="index.html"><i class="zmdi zmdi-check-all"></i></a>
                <a href="index.html"><i class="zmdi zmdi-trending-up"></i></a>
                <div class="dropdown">
                    <a href="index.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="index.html">Change Date Range</a></li>
                        <li><a href="index.html">Change Graph Type</a></li>
                        <li><a href="index.html">Other Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="flot-chart-edge">
            <div id="chart-curved-line" class="flot-chart"></div>
        </div>
    </div>

    <div id="content__grid" data-columns>
        <div class="card widget-analytic">
            <div class="card__header">
                <h2>Website Impressions <small>Consectetur Ultricies Porta Fringilla</small></h2>
                <div class="actions">
                    <div class="dropdown">
                        <a href="index.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="index.html">Refresh</a></li>
                            <li><a href="index.html">Manage</a></li>
                            <li><a href="index.html">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card__body">
                <div class="widget-analytic__info">
                    <i class="zmdi zmdi-caret-up-circle"></i>
                    <h2>987,453</h2>
                </div>
                <div class="widget-analytic__chart">
                    <div class="chart-sparkline-line">9,5,6,3,9,7,5,4,6,5,6,4,9</div>
                </div>
            </div>
        </div>

        <div class="card widget-analytic">
            <div class="card__header">
                <h2>Website Traffics <small>Nullam Adipiscing Pellentesque</small></h2>
                <div class="actions">
                    <div class="dropdown">
                        <a href="index.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="index.html">Refresh</a></li>
                            <li><a href="index.html">Manage</a></li>
                            <li><a href="index.html">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card__body">
                <div class="widget-analytic__info">
                    <i class="zmdi zmdi-caret-up-circle"></i>
                    <h2>356,785K</h2>
                </div>
                <div class="widget-analytic__chart">
                    <div class="chart-sparkline-line">2,4,6,5,6,4,5,3,7,3,6,5,9,6</div>
                </div>
            </div>
        </div>

        <div class="card widget-analytic">
            <div class="card__header">
                <h2>Total Sales <small>Purus Malesuada Consectetur</small></h2>
                <div class="actions">
                    <div class="dropdown">
                        <a href="index.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="index.html">Refresh</a></li>
                            <li><a href="index.html">Manage</a></li>
                            <li><a href="index.html">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card__body">
                <div class="widget-analytic__info">
                    <i class="zmdi zmdi-caret-down-circle"></i>
                    <h2>$458,778</h2>
                </div>
                <div class="widget-analytic__chart">
                    <div class="chart-sparkline-line">9,4,6,5,6,4,5,7,9,3,6,5,9</div>
                </div>
            </div>
        </div>

        <div class="card widget-pie-grid">
            <div class="col-xs-4 col-sm-6 col-md-4 widget-pie-grid__item">
                <div class="chart-pie" data-percent="92" data-pie-size="80">
                    <span class="chart-pie__value">92</span>
                </div>
                <div class="widget-pie-grid__title">Email<br> Scheduled</div>
            </div>
            <div class="col-xs-4 col-sm-6 col-md-4 widget-pie-grid__item">
                <div class="chart-pie" data-percent="11" data-pie-size="80">
                    <span class="chart-pie__value">11</span>
                </div>
                <div class="widget-pie-grid__title">Email<br> Bounced</div>
            </div>
            <div class="col-xs-4 col-sm-6 col-md-4 widget-pie-grid__item">
                <div class="chart-pie" data-percent="52" data-pie-size="80">
                    <span class="chart-pie__value">52</span>
                </div>
                <div class="widget-pie-grid__title">Email<br> Opened</div>
            </div>
            <div class="col-xs-4 col-sm-6 col-md-4 widget-pie-grid__item">
                <div class="chart-pie" data-percent="44" data-pie-size="80">
                    <span class="chart-pie__value">44</span>
                </div>
                <div class="widget-pie-grid__title">Storage<br>Remaining</div>
            </div>
            <div class="col-xs-4 col-sm-6 col-md-4 widget-pie-grid__item">
                <div class="chart-pie" data-percent="78" data-pie-size="80">
                    <span class="chart-pie__value">78</span>
                </div>
                <div class="widget-pie-grid__title">Web Page<br> Views</div>
            </div>
            <div class="col-xs-4 col-sm-6 col-md-4 widget-pie-grid__item">
                <div class="chart-pie" data-percent="32" data-pie-size="80">
                    <span class="chart-pie__value">32</span>
                </div>
                <div class="widget-pie-grid__title">Server<br> Processing</div>
            </div>
        </div>

        <div class="card">
            <div class="card__header">
                <h2>Recent Posts <small>Venenatis portauam Inceptos ameteiam</small></h2>
                <div class="actions">
                    <div class="dropdown">
                        <a href="index.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="index.html">Refresh</a></li>
                            <li><a href="index.html">Manage</a></li>
                            <li><a href="index.html">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="list-group">
                <a href="index.html" class="list-group-item media">
                    <div class="pull-left">
                        <img class="avatar-img" src="demo/img/profile-pics/1.jpg" alt="">
                    </div>

                    <div class="media-body">
                        <div class="list-group__heading">David Villa Jacobs</div>
                        <small class="list-group__text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                    </div>
                </a>

                <a href="index.html" class="list-group-item media">
                    <div class="pull-left">
                        <img class="avatar-img" src="demo/img/profile-pics/5.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <div class="list-group__heading">Candice Barnes</div>
                        <small class="list-group__text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                    </div>
                </a>

                <a href="index.html" class="list-group-item media">
                    <div class="pull-left">
                        <img class="avatar-img" src="demo/img/profile-pics/3.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <div class="list-group__heading">Jeannette Lawson</div>
                        <small class="list-group__text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                    </div>
                </a>

                <a href="index.html" class="list-group-item media">
                    <div class="pull-left">
                        <img class="avatar-img" src="demo/img/profile-pics/4.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <div class="list-group__heading">Darla Mckinney</div>
                        <small class="list-group__text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                    </div>
                </a>

                <a href="index.html" class="list-group-item media">
                    <div class="pull-left">
                        <img class="avatar-img" src="demo/img/profile-pics/2.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <div class="list-group__heading">Rudolph Perez</div>
                        <small class="list-group__text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                    </div>
                </a>

                <a href="index.html" class="view-more">
                    <i class="zmdi zmdi-long-arrow-right"></i> View all
                </a>
            </div>
        </div>

        <div class="card widget-past-days">
            <div class="card__header">
                <h2>For the past 30 days <small>Pellentesque ornare sem lacinia quam</small></h2>
                <div class="actions">
                    <div class="dropdown">
                        <a href="index.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="index.html">Refresh</a></li>
                            <li><a href="index.html">Manage</a></li>
                            <li><a href="index.html">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flot-chart-edge">
                <div class="flot-chart flot-chart--sm" id="chart-past-days"></div>
            </div>

            <div class="list-group list-group--striped">
                <div class="list-group-item">
                    <div class="widget-past-days__chart hidden-sm">
                        <div class="chart-sparkline-bar">6,9,5,6,3,7,5,4,6,5,6,4,2,5,8,2,6,9</div>
                    </div>

                    <div class="widget-past-days__info">
                        <small>Page Views</small>
                        <h3>47,896,536</h3>
                    </div>
                </div>

                <div class="list-group-item">
                    <div class="widget-past-days__chart hidden-sm">
                        <div class="chart-sparkline-bar">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                    </div>

                    <div class="widget-past-days__info">
                        <small>Site Visitors</small>
                        <h3>24,456,799</h3>
                    </div>
                </div>

                <div class="list-group-item">
                    <div class="widget-past-days__chart hidden-sm">
                        <div class="chart-sparkline-bar">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                    </div>

                    <div class="widget-past-days__info">
                        <small>Total Clicks</small>
                        <h3>13,965</h3>
                    </div>
                </div>

                <div class="list-group-item">
                    <div class="widget-past-days__chart hidden-sm">
                        <div class="chart-sparkline-bar">3,9,1,3,5,6,7,6,8,2,5,2,7,5,6,7,6,8</div>
                    </div>

                    <div class="widget-past-days__info">
                        <small>Total Returns</small>
                        <h3>198</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="card widget-recent-signups">
            <div class="card__header card__header--highlight">
                <h2>Most Recent Signups <small>Magna Cursus Malesuada</small></h2>
                <div class="actions">
                    <div class="dropdown">
                        <a href="index.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="index.html">Refresh</a></li>
                            <li><a href="index.html">Manage</a></li>
                            <li><a href="index.html">Settings</a></li>
                        </ul>
                    </div>
                </div>

                <div class="chart-sparkline-line m-t-20">9,4,6,5,6,4,5,7,9,3,6,5,9</div>
            </div>

            <div class="card__body widget-recent-signups__list">
                <a href="index.html"><div class="avatar-char">B</div></a>
                <a href="index.html"><img class="avatar-img" src="demo/img/profile-pics/5.jpg" alt=""></a>
                <a href="index.html"><div class="avatar-char">L</div></a>
                <a href="index.html"><div class="avatar-char">A</div></a>
                <a href="index.html"><img class="avatar-img" src="demo/img/profile-pics/4.jpg" alt=""></a>
                <a href="index.html"><div class="avatar-char">Z</div></a>
                <a href="index.html"><div class="avatar-char">I</div></a>
                <a href="index.html"><div class="avatar-char">S</div></a>
                <a href="index.html"><div class="avatar-char">C</div></a>
                <a href="index.html"><div class="avatar-char">W</div></a>
                <a href="index.html"><img class="avatar-img" src="demo/img/profile-pics/3.jpg" alt=""></a>
                <a href="index.html"><div class="avatar-char">A</div></a>
                <a href="index.html"><img class="avatar-img" src="demo/img/profile-pics/9.jpg" alt=""></a>
                <a href="index.html"><div class="avatar-char">N</div></a>
                <a href="index.html"><div class="avatar-char">X</div></a>
                <a href="index.html"><div class="avatar-char">V</div></a>
                <a href="index.html"><img class="avatar-img" src="demo/img/profile-pics/7.jpg" alt=""></a>
                <a href="index.html"><img class="avatar-img" src="demo/img/profile-pics/6.jpg" alt=""></a>
                <a href="index.html"><img class="avatar-img" src="demo/img/profile-pics/8.jpg" alt=""></a>
                <a href="index.html"><div class="avatar-char">F</div></a>
                <a href="index.html"><div class="avatar-char">E</div></a>
                <a href="index.html"><div class="avatar-char">A</div></a>
                <a href="index.html"><div class="avatar-char">A</div></a>
                <a href="index.html"><div class="avatar-char">M</div></a>
                <a href="index.html"><div class="avatar-char">O</div></a>
                <a href="index.html"><div class="avatar-char">I</div></a>
            </div>
        </div>

        <div class="card widget-todo-lists">
            <div class="card__header card__header--highlight">
                <h2>Todo lists <small>Mattis Malesuada Risus</small></h2>

                <button class="btn btn--float"><i class="zmdi zmdi-plus"></i></button>
            </div>

            <div class="list-group">
                <div class="list-group-item">
                    <div class="checkbox checkbox--char">
                        <label>
                            <input type="checkbox" checked>
                            <span class="checkbox__helper"><i>F</i></span>
                            <span class="widget-todo-lists__info">
                                Fivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                <small>Today at 8.30 AM</small>
                            </span>

                            <span class="list-group__attrs">
                                <span>#Messages</span>
                                <span>!!!</span>
                            </span>
                        </label>
                    </div>

                    <div class="actions list-group__actions">
                        <div class="dropdown">
                            <a href="index.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                            <ul class="dropdown-menu pull-right">
                                <li><a href="index.html">Mark as done</a></li>
                                <li><a href="index.html">Edit</a></li>
                                <li><a href="index.html" data-demo-action="delete-listing">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="list-group-item">
                    <div class="checkbox checkbox--char">
                        <label>
                            <input type="checkbox" checked>
                            <span class="checkbox__helper"><i>N</i></span>
                            <span class="widget-todo-lists__info">
                                Nullam id dolor id nibh ultricies vehicula ut id elit
                                <small>Today at 12.30 PM</small>
                            </span>

                            <span class="list-group__attrs">
                                <span>#Clients</span>
                                <span>!!</span>
                            </span>
                        </label>
                    </div>

                    <div class="actions list-group__actions">
                        <div class="dropdown">
                            <a href="index.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                            <ul class="dropdown-menu pull-right">
                                <li><a href="index.html">Mark as done</a></li>
                                <li><a href="index.html">Edit</a></li>
                                <li><a href="index.html" data-demo-action="delete-listing">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="list-group-item">
                    <div class="checkbox checkbox--char">
                        <label>
                            <input type="checkbox">
                            <span class="checkbox__helper"><i>C</i></span>
                            <span class="widget-todo-lists__info">
                                Cras mattis consectetur purus sit amet fermentum
                                <small>Tomorrow at 10.30 AM</small>
                            </span>

                            <span class="list-group__attrs">
                                <span>#Clients</span>
                                <span>!!</span>
                            </span>
                        </label>
                    </div>

                    <div class="actions list-group__actions">
                        <div class="dropdown">
                            <a href="index.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                            <ul class="dropdown-menu pull-right">
                                <li><a href="index.html">Mark as done</a></li>
                                <li><a href="index.html">Edit</a></li>
                                <li><a href="index.html" data-demo-action="delete-listing">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="list-group-item">
                    <div class="checkbox checkbox--char">
                        <label>
                            <input type="checkbox">
                            <span class="checkbox__helper"><i>I</i></span>
                            <span class="widget-todo-lists__info">
                                Integer posuere erat a ante venenatis dapibus posuere velit aliquet
                                <small>05/08/2016 at 08.00 AM</small>
                            </span>

                            <span class="list-group__attrs">
                                <span>#Server</span>
                                <span>!</span>
                            </span>
                        </label>
                    </div>

                    <div class="actions list-group__actions">
                        <div class="dropdown">
                            <a href="index.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                            <ul class="dropdown-menu pull-right">
                                <li><a href="index.html">Mark as done</a></li>
                                <li><a href="index.html">Edit</a></li>
                                <li><a href="index.html" data-demo-action="delete-listing">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="list-group-item">
                    <div class="checkbox checkbox--char">
                        <label>
                            <input type="checkbox">
                            <span class="checkbox__helper"><i>P</i></span>
                            <span class="widget-todo-lists__info">
                                Praesent commodo cursus magnavel scelerisque nisl consectetur
                                <small>10/08/2016 at 04.00 AM</small>
                            </span>

                            <span class="list-group__attrs">
                                <span>#Server</span>
                                <span>!</span>
                            </span>
                        </label>
                    </div>

                    <div class="actions list-group__actions">
                        <div class="dropdown">
                            <a href="index.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                            <ul class="dropdown-menu pull-right">
                                <li><a href="index.html">Mark as done</a></li>
                                <li><a href="index.html">Edit</a></li>
                                <li><a href="index.html" data-demo-action="delete-listing">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <a href="index.html" class="view-more"><i class="zmdi zmdi-long-arrow-right"></i> View all</a>
        </div>

        <div class="card widget-calendar">
            <div class="card__header card__header--highlight">
                <div class="widget-calendar__year"></div>
                <div class="widget-calendar__day"></div>

                <button class="btn btn--float"><i class="zmdi zmdi-plus"></i></button>
            </div>

            <div class="card__body--sm">
                <div id="widget-calendar__main"></div>
            </div>
        </div>

        <div class="card">
            <div class="card__header card__header--img" style="background-image: url(demo/img/note.png); height: 250px;"></div>
            <div class="card__header">
                <h2>
                    Pellentesque Ligula Fringilla

                    <small>by Malinda Hollaway on 19th June 2015 at 09:10 AM</small>
                </h2>
            </div>
            <div class="card__body">
                <p>Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra </p>

                <a href="index.html" class="view-more text-left"><i class="zmdi zmdi-long-arrow-right"></i> View Article...</a>
            </div>
        </div>
    </div>
</section>
@endsection
@push('css')
<!-- Malihu Scrollbar -->
<link href="{{ asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
<!-- Full Calendar -->
<link href="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
@endpush
@push('js')
<!-- FullCalendar -->
<script src="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<!-- Simple Weather -->
<script src="{{ asset('vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>
<!-- Salvattore -->
<script src="{{ asset('vendors/bower_components/salvattore/dist/salvattore.min.js') }}"></script>
<!-- Flot Charts -->
<script src="{{ asset('vendors/bower_components/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('vendors/bower_components/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('vendors/bower_components/flot.curvedlines/curvedLines.js') }}"></script>
<!-- Sparkline Charts -->
<script src="{{ asset('vendors/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
<!-- EasyPie Charts -->
<script src="{{ asset('vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
<!-- Placeholder for IE9 -->
<!--[if IE 9 ]><script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js') }}"></script><![endif]-->
<!-- Demo Only -->
<script src="{{ asset('demo/js/flot-charts/curved-line.js') }}"></script>
<script src="{{ asset('demo/js/flot-charts/line.js') }}"></script>
<script src="{{ asset('demo/js/easy-pie-charts.js') }}"></script>
<script src="{{ asset('demo/js/misc.js') }}"></script>
<script src="{{ asset('demo/js/sparkline-charts.js') }}"></script>
<script src="{{ asset('demo/js/calendar.js') }}"></script>
@endpush