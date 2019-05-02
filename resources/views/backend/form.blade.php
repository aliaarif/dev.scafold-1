@extends('layouts.backend')

@section('content')
<section id="content">
    <div class="content__header">
        <h2>Form Components</h2>

        <div class="actions">
            <a href="form-components.html"><i class="zmdi zmdi-check-all"></i></a>
            <a href="form-components.html"><i class="zmdi zmdi-trending-up"></i></a>
            <div class="dropdown">
                <a href="form-components.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                <ul class="dropdown-menu pull-right">
                    <li><a href="form-components.html">Change Date Range</a></li>
                    <li><a href="form-components.html">Change Graph Type</a></li>
                    <li><a href="form-components.html">Other Settings</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card__header">
            <h2>Input Groups <small>Extend form controls by adding text or buttons before, after, or on both sides of any text-based inputs.</small></h2>
        </div>

        <div class="card__body">
            <p>Basic Example - Place one add-on or button on either side of an input. You may also place one on both sides of an input.</p>

            <div class="row">
                <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <br/>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact Number">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <br/>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <br/>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Home Address">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="input-group">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Landscape">
                            <i class="form-group__bar"></i>
                        </div>
                        <span class="input-group-addon"><i class="zmdi zmdi-landscape"></i></span>
                    </div>

                    <br/>

                    <div class="input-group">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Weather">
                            <i class="form-group__bar"></i>
                        </div>
                        <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                    </div>

                    <br/>

                    <div class="input-group">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Flight">
                            <i class="form-group__bar"></i>
                        </div>
                        <span class="input-group-addon"><i class="zmdi zmdi-airplane"></i></span>
                    </div>

                    <br/>

                    <div class="input-group">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Location">
                            <i class="form-group__bar"></i>
                        </div>
                        <span class="input-group-addon"><i class="zmdi zmdi-my-location"></i></span>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-arrow-missed"></i></span>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Internet">
                            <i class="form-group__bar"></i>
                        </div>
                        <span class="input-group-addon"><i class="zmdi zmdi-globe"></i></span>
                    </div>

                    <br/>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-money"></i></span>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Notifications">
                            <i class="form-group__bar"></i>
                        </div>
                        <span class="input-group-addon"><i class="zmdi zmdi-plus-circle-o"></i></span>
                    </div>

                    <br/>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Layers">
                            <i class="form-group__bar"></i>
                        </div>
                        <span class="input-group-addon"><i class="zmdi zmdi-layers"></i></span>
                    </div>

                    <br/>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-portable-wifi"></i></span>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Messages">
                            <i class="form-group__bar"></i>
                        </div>
                        <span class="input-group-addon"><i class="zmdi zmdi-dialpad"></i></span>
                    </div>
                </div>
            </div>

            <br/>
            <br/>
            <br/>

            <p>Floating Labels - Basic example for input groups with floating labels</p>

            <div class="row">
                <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="form-group form-group--float">
                            <input type="text" class="form-control">
                            <label>Full Name</label>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="input-group">
                        <div class="form-group form-group--float">
                            <input type="text" class="form-control">
                            <label>Location</label>
                            <i class="form-group__bar"></i>
                        </div>
                        <span class="input-group-addon last"><i class="zmdi zmdi-my-location"></i></span>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
                        <div class="form-group form-group--float">
                            <input type="text" class="form-control">
                            <label>Layers</label>
                            <i class="form-group__bar"></i>
                        </div>
                        <span class="input-group-addon last"><i class="zmdi zmdi-layers"></i></span>
                    </div>
                </div>
            </div>

            <br/>
            <br/>
            <br/>

            <p>Different Sizes - You may use the extra sizing classes to change size of the fields./p>

                <br/>

                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Weather">
                        <i class="form-group__bar"></i>
                    </div>
                </div>

                <br/>

                <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Weather">
                        <i class="form-group__bar"></i>
                    </div>
                </div>

                <br/>

                <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" placeholder="Weather">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>

            <br/>
        </div>

        <div class="card">
            <div class="card__header">
                <h2>Input Mask <small>An input mask helps the user with the input by ensuring a predefined format. This can be useful for dates, numerics, phone numbers etc...</small></h2>
            </div>

            <div class="card__body">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" class="form-control input-mask" data-mask="00/00/0000" placeholder="eg: 23/05/2014">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Time</label>
                            <input type="text" class="form-control input-mask" data-mask="00:00:00" placeholder="eg: 23:06:55">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Date Time</label>
                            <input type="text" class="form-control input-mask" data-mask="00/00/0000 00:00:00" placeholder="eg: 00/00/0000 00:00:00">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>CEP</label>
                            <input type="text" class="form-control input-mask" data-mask="00000-000" placeholder="eg: 00000-000">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control input-mask" data-mask="000-00-0000000" placeholder="eg: 000-00-0000000">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Phone with Odd</label>
                            <input type="text" class="form-control input-mask" data-mask="(00) 0000-0000" placeholder="eg: (00) 0000-0000">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>US Phone Number</label>
                            <input type="text" class="form-control input-mask" data-mask="(000) 000-0000" placeholder="eg: (000) 000-0000">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>CPF</label>
                            <input type="text" class="form-control input-mask" data-mask="000.000.000-00" placeholder="eg: 000.000.000-00">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Money</label>
                            <input type="text" class="form-control input-mask" data-mask="000.000.000.000.000,00" placeholder="eg: 000.000.000.000.000,00">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-3 m-b-20">
                        <div class="form-group">
                            <label>IP Address</label>
                            <input type="text" class="form-control input-mask" data-mask="000.000.000.000" placeholder="eg: 000.000.000.000">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Percentage</label>
                            <input type="text" class="form-control input-mask" data-mask="00000,00%" placeholder="eg: 00000,00%">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Credit Card</label>
                            <input type="text" class="form-control input-mask" data-mask="0000 0000 0000 0000" placeholder="eg: 0000 0000 0000 0000">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card__header">
                <h2>Select 2 <small>Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</small></h2>
            </div>

            <div class="card__body">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <p>Basic Example - Single Select</p>

                        <div class="form-group">
                            <select class="select2">
                                <option>Subaru</option>
                                <option>Mitsubishi</option>
                                <option>Scion</option>
                                <option>Daihatsu</option>
                                <option>Hino</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <p>Placeholder Text</p>

                        <div class="form-group">
                            <select class="select2" data-placeholder="Select a brand">
                                <option>&nbsp;</option>
                                <option>Subaru</option>
                                <option>Mitsubishi</option>
                                <option>Scion</option>
                                <option>Daihatsu</option>
                                <option>Hino</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <p>Disabled Select</p>

                        <div class="form-group">
                            <select class="select2" data-placeholder="This one is disabled" disabled>
                                <option>&nbsp;</option>
                                <option>Subaru</option>
                                <option>Mitsubishi</option>
                                <option>Scion</option>
                                <option>Daihatsu</option>
                                <option>Hino</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <p>Disabled Results</p>

                        <div class="form-group">
                            <select class="select2">
                                <option>Subaru</option>
                                <option>Mitsubishi</option>
                                <option disabled>Scion</option>
                                <option disabled>Daihatsu</option>
                                <option>Hino</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <p>Hide Search Box</p>

                        <div class="form-group">
                            <select class="select2" data-minimum-results-for-search="Infinity">
                                <option>Subaru</option>
                                <option>Mitsubishi</option>
                                <option disabled>Scion</option>
                                <option disabled>Daihatsu</option>
                                <option>Hino</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <p>Multiple</p>

                        <div class="form-group">
                            <select class="select2" multiple data-placeholder="Select one or more choices">
                                <option>Subaru</option>
                                <option>Mitsubishi</option>
                                <option>Scion</option>
                                <option>Daihatsu</option>
                                <option>Hino</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card__header">
                <h2>Toggle Switch <small>CSS only Checkbox based toggle Switches.</small></h2>
            </div>

            <div class="card__body">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <p>Basic Example</p>

                        <div class="form-group">
                            <div class="toggle-switch">
                                <input type="checkbox" class="toggle-switch__checkbox">
                                <i class="toggle-switch__helper"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <p>Active State</p>

                        <div class="form-group">
                            <div class="toggle-switch">
                                <input type="checkbox" class="toggle-switch__checkbox" checked>
                                <i class="toggle-switch__helper"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3">
                        <p>Disabled</p>

                        <div class="form-group">
                            <div class="toggle-switch">
                                <input type="checkbox" class="toggle-switch__checkbox" disabled>
                                <i class="toggle-switch__helper"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card__header">
                <h2>Input Slider <small>noUiSlider is a range slider without bloat. It offers a ton off features, and it is as small, lightweight and minimal as possible, which is great for mobile use on the many supported devices.</small></h2>
            </div>

            <div class="card__body">
                <p>Basic Example</p>

                <div id="slider-basic"></div>

                <br/>
                <br/>

                <p>Range Slider</p>

                <div id="slider-range"></div>

                <br/>
                <br/>

                <p>Output Values</p>

                <div>
                    <div id="slider-complete"></div>

                    <div class="clearfix m-t-15">
                        <div class="pull-left" id="slider-complete-upper"></div>
                        <div class="pull-right" id="slider-complete-lower"></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card__header">
                <h2>Date Time Picker <small>Date/time picker widget based on twitter bootstrap</small></h2>
            </div>

            <div class="card-padding card__header">

                <div class="row">
                    <div class="col-sm-4">
                        <p>Basic Example - Date and Time Picker</p>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                            <div class="form-group">
                                <input type='text' class="form-control date-time-picker" placeholder="Click here...">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <p>Date Picker only</p>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                            <div class="form-group">
                                <input type='text' class="form-control date-picker" placeholder="Click here...">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <p>Time Picker only</p>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
                            <div class="form-group">
                                <input type='text' class="form-control time-picker" placeholder="Click here...">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card__header">
                <h2>Color Picker <small>Simplt HEX and HSL color picker with customizable options</small></h2>
            </div>

            <div class="card__body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="color-picker">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                <div class="form-group dropdown">
                                    <input type="text" class="form-control color-picker__value" value="#03A9F4" data-toggle="dropdown">
                                    <i class="form-group__bar"></i>

                                    <div class="color-picker__value"></div>
                                    <div class="dropdown-menu">
                                        <div class="color-picker__target"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="color-picker">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                <div class="form-group dropdown">
                                    <input type="text" class="form-control color-picker__value" value="#8BC34A" data-toggle="dropdown">
                                    <i class="form-group__bar"></i>

                                    <div class="color-picker__value"></div>
                                    <div class="dropdown-menu">
                                        <div class="color-picker__target"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="color-picker">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                <div class="form-group dropdown">
                                    <input type="text" class="form-control color-picker__value" value="#F44336" data-toggle="dropdown">
                                    <i class="form-group__bar"></i>

                                    <div class="color-picker__value"></div>
                                    <div class="dropdown-menu">
                                        <div class="color-picker__target"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="color-picker">
                            <div class="input-group form-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                <div class="form-group dropdown">
                                    <input type="text" class="form-control color-picker__value" value="#FFC107" data-toggle="dropdown">

                                    <div class="color-picker__value"></div>
                                    <div class="dropdown-menu">
                                        <div class="color-picker__target"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br/>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card__header">
                <h2>Simple File Input <small>This file input plugin allows you to create a visually appealing file or image input widgets</small></h2>
            </div>

            <div class="card__body">
                <div class="row">
                    <div class="col-sm-4">
                        <p >Basic Example</p>

                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <span class="btn btn-default btn-file">
                                <span class="fileinput-new">Select file</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="...">
                            </span>
                            <span class="fileinput-filename"></span>
                            <a href="form-components.html#" class="fileinput__close fileinput-exists" data-dismiss="fileinput">
                                <i class="zmdi zmdi-close-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <br/>
                <br/>

                <p>Image Preview</p>

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview" data-trigger="fileinput"></div>

                    <a href="form-components.html#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    <span class="btn btn-default btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="...">
                    </span>
                </div>

                <br/>
                <br/>
                <p><em>Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.</em></p>
            </div>
        </div>
    </section>
    @endsection

    @push('css')
    <!-- NoUiSlider -->
    <link href="{{ asset('vendors/bower_components/nouislider/distribute/nouislider.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Date/Time picker -->
    <link href="{{ asset('vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

    <!-- Farbtastic Color Picker-->
    <link href="{{ asset('vendors/farbtastic/farbtastic.css') }}" rel="stylesheet">

    <!-- Select 2 -->
    <link href="{{ asset('vendors/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    @endpush

    @push('js')
    <!-- NoUiSlider -->

    <script src="{{ asset('vendors/bower_components/nouislider/distribute/nouislider.min.js') }}"></script>

    <!-- Bootstrap Date/Time Picker -->
    <script src="{{ asset('vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- Select 2 -->
    <script src="{{ asset('vendors/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- Simple File Input -->
    <script src="{{ asset('vendors/fileinput/fileinput.min.js') }}"></script>

    <!-- jQuery Mask -->
    <script src="{{ asset('vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>

    <!-- Farbtastic Color Picker -->
    <script src="{{ asset('vendors/farbtastic/farbtastic.min.js') }}"></script>

    <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="{{ asset('vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js') }}"></script>
        <![endif]-->

        <!-- Demo Only -->
        <script src="{{ asset('demo/js/misc.js') }}"></script>
        @endpush