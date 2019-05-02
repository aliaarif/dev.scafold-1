@extends('layouts.backend')

@section('content')
<section id="content">
    <div class="content__header">
        <h2>Data Table</h2>

        <div class="actions">
            <a href="data-tables.html"><i class="zmdi zmdi-check-all"></i></a>
            <a href="data-tables.html"><i class="zmdi zmdi-trending-up"></i></a>
            <div class="dropdown">
                <a href="data-tables.html" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                <ul class="dropdown-menu pull-right">
                    <li><a href="data-tables.html">Change Date Range</a></li>
                    <li><a href="data-tables.html">Change Graph Type</a></li>
                    <li><a href="data-tables.html">Other Settings</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card__header">
            <h2>Basic Example <small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
        </div>

        <div class="card__body">
            <div class="table-responsive">
                <table id="data-table-basic" class="table-striped">
                    <thead>
                        <tr>
                            <th data-column-id="id" data-type="numeric">ID</th>
                            <th data-column-id="sender">Sender</th>
                            <th data-column-id="received" data-order="desc">Received</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10238</td>
                            <td>eduardo@pingpong.com</td>
                            <td>14.10.2013</td>
                        </tr>
                        <tr>
                            <td>10243</td>
                            <td>eduardo@pingpong.com</td>
                            <td>19.10.2013</td>
                        </tr>
                        <tr>
                            <td>10248</td>
                            <td>eduardo@pingpong.com</td>
                            <td>24.10.2013</td>
                        </tr>
                        <tr>
                            <td>10253</td>
                            <td>eduardo@pingpong.com</td>
                            <td>29.10.2013</td>
                        </tr>
                        <tr>
                            <td>10234</td>
                            <td>lila@google.com</td>
                            <td>10.10.2013</td>
                        </tr>
                        <tr>
                            <td>10239</td>
                            <td>lila@google.com</td>
                            <td>15.10.2013</td>
                        </tr>
                        <tr>
                            <td>10244</td>
                            <td>lila@google.com</td>
                            <td>20.10.2013</td>
                        </tr>
                        <tr>
                            <td>10249</td>
                            <td>lila@google.com</td>
                            <td>25.10.2013</td>
                        </tr>
                        <tr>
                            <td>10237</td>
                            <td>robert@bingo.com</td>
                            <td>13.10.2013</td>
                        </tr>
                        <tr>
                            <td>10242</td>
                            <td>robert@bingo.com</td>
                            <td>18.10.2013</td>
                        </tr>
                        <tr>
                            <td>10247</td>
                            <td>robert@bingo.com</td>
                            <td>23.10.2013</td>
                        </tr>
                        <tr>
                            <td>10252</td>
                            <td>robert@bingo.com</td>
                            <td>28.10.2013</td>
                        </tr>
                        <tr>
                            <td>10236</td>
                            <td>simon@yahoo.com</td>
                            <td>12.10.2013</td>
                        </tr>
                        <tr>
                            <td>10241</td>
                            <td>simon@yahoo.com</td>
                            <td>17.10.2013</td>
                        </tr>
                        <tr>
                            <td>10246</td>
                            <td>simon@yahoo.com</td>
                            <td>22.10.2013</td>
                        </tr>
                        <tr>
                            <td>10251</td>
                            <td>simon@yahoo.com</td>
                            <td>27.10.2013</td>
                        </tr>
                        <tr>
                            <td>10235</td>
                            <td>tim@microsoft.com</td>
                            <td>11.10.2013</td>
                        </tr>
                        <tr>
                            <td>10240</td>
                            <td>tim@microsoft.com</td>
                            <td>16.10.2013</td>
                        </tr>
                        <tr>
                            <td>10245</td>
                            <td>tim@microsoft.com</td>
                            <td>21.10.2013</td>
                        </tr>
                        <tr>
                            <td>10250</td>
                            <td>tim@microsoft.com</td>
                            <td>26.10.2013</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card__header">
            <h2>Selection Example <small>Ensure that the data attribute [data-identifier="true"] is set on one column header.</small></h2>
        </div>

        <div class="card__body">
            <div class="table-responsive">
                <table id="data-table-selection" class="table table-striped">
                    <thead>
                        <tr>
                            <th data-column-id="id" data-type="numeric" data-identifier="true">ID</th>
                            <th data-column-id="sender">Sender</th>
                            <th data-column-id="received" data-order="desc">Received</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10238</td>
                            <td>eduardo@pingpong.com</td>
                            <td>14.10.2013</td>
                        </tr>
                        <tr>
                            <td>10243</td>
                            <td>eduardo@pingpong.com</td>
                            <td>19.10.2013</td>
                        </tr>
                        <tr>
                            <td>10248</td>
                            <td>eduardo@pingpong.com</td>
                            <td>24.10.2013</td>
                        </tr>
                        <tr>
                            <td>10253</td>
                            <td>eduardo@pingpong.com</td>
                            <td>29.10.2013</td>
                        </tr>
                        <tr>
                            <td>10234</td>
                            <td>lila@google.com</td>
                            <td>10.10.2013</td>
                        </tr>
                        <tr>
                            <td>10239</td>
                            <td>lila@google.com</td>
                            <td>15.10.2013</td>
                        </tr>
                        <tr>
                            <td>10244</td>
                            <td>lila@google.com</td>
                            <td>20.10.2013</td>
                        </tr>
                        <tr>
                            <td>10249</td>
                            <td>lila@google.com</td>
                            <td>25.10.2013</td>
                        </tr>
                        <tr>
                            <td>10237</td>
                            <td>robert@bingo.com</td>
                            <td>13.10.2013</td>
                        </tr>
                        <tr>
                            <td>10242</td>
                            <td>robert@bingo.com</td>
                            <td>18.10.2013</td>
                        </tr>
                        <tr>
                            <td>10247</td>
                            <td>robert@bingo.com</td>
                            <td>23.10.2013</td>
                        </tr>
                        <tr>
                            <td>10252</td>
                            <td>robert@bingo.com</td>
                            <td>28.10.2013</td>
                        </tr>
                        <tr>
                            <td>10236</td>
                            <td>simon@yahoo.com</td>
                            <td>12.10.2013</td>
                        </tr>
                        <tr>
                            <td>10241</td>
                            <td>simon@yahoo.com</td>
                            <td>17.10.2013</td>
                        </tr>
                        <tr>
                            <td>10246</td>
                            <td>simon@yahoo.com</td>
                            <td>22.10.2013</td>
                        </tr>
                        <tr>
                            <td>10251</td>
                            <td>simon@yahoo.com</td>
                            <td>27.10.2013</td>
                        </tr>
                        <tr>
                            <td>10235</td>
                            <td>tim@microsoft.com</td>
                            <td>11.10.2013</td>
                        </tr>
                        <tr>
                            <td>10240</td>
                            <td>tim@microsoft.com</td>
                            <td>16.10.2013</td>
                        </tr>
                        <tr>
                            <td>10245</td>
                            <td>tim@microsoft.com</td>
                            <td>21.10.2013</td>
                        </tr>
                        <tr>
                            <td>10250</td>
                            <td>tim@microsoft.com</td>
                            <td>26.10.2013</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card__header">
            <h2>Selection Example <small>Ensure that the data attribute [data-identifier="true"] is set on one column header.</small></h2>
        </div>

        <div class="card__body">
            <table id="data-table-command" class="table table-striped table--vmiddle">
                <thead>
                    <tr>
                        <th data-column-id="id" data-type="numeric">ID</th>
                        <th data-column-id="sender">Sender</th>
                        <th data-column-id="received" data-order="desc">Received</th>
                        <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10238</td>
                        <td>eduardo@pingpong.com</td>
                        <td>14.10.2013</td>
                    </tr>
                    <tr>
                        <td>10243</td>
                        <td>eduardo@pingpong.com</td>
                        <td>19.10.2013</td>
                    </tr>
                    <tr>
                        <td>10248</td>
                        <td>eduardo@pingpong.com</td>
                        <td>24.10.2013</td>
                    </tr>
                    <tr>
                        <td>10253</td>
                        <td>eduardo@pingpong.com</td>
                        <td>29.10.2013</td>
                    </tr>
                    <tr>
                        <td>10234</td>
                        <td>lila@google.com</td>
                        <td>10.10.2013</td>
                    </tr>
                    <tr>
                        <td>10239</td>
                        <td>lila@google.com</td>
                        <td>15.10.2013</td>
                    </tr>
                    <tr>
                        <td>10244</td>
                        <td>lila@google.com</td>
                        <td>20.10.2013</td>
                    </tr>
                    <tr>
                        <td>10249</td>
                        <td>lila@google.com</td>
                        <td>25.10.2013</td>
                    </tr>
                    <tr>
                        <td>10237</td>
                        <td>robert@bingo.com</td>
                        <td>13.10.2013</td>
                    </tr>
                    <tr>
                        <td>10242</td>
                        <td>robert@bingo.com</td>
                        <td>18.10.2013</td>
                    </tr>
                    <tr>
                        <td>10247</td>
                        <td>robert@bingo.com</td>
                        <td>23.10.2013</td>
                    </tr>
                    <tr>
                        <td>10252</td>
                        <td>robert@bingo.com</td>
                        <td>28.10.2013</td>
                    </tr>
                    <tr>
                        <td>10236</td>
                        <td>simon@yahoo.com</td>
                        <td>12.10.2013</td>
                    </tr>
                    <tr>
                        <td>10241</td>
                        <td>simon@yahoo.com</td>
                        <td>17.10.2013</td>
                    </tr>
                    <tr>
                        <td>10246</td>
                        <td>simon@yahoo.com</td>
                        <td>22.10.2013</td>
                    </tr>
                    <tr>
                        <td>10251</td>
                        <td>simon@yahoo.com</td>
                        <td>27.10.2013</td>
                    </tr>
                    <tr>
                        <td>10235</td>
                        <td>tim@microsoft.com</td>
                        <td>11.10.2013</td>
                    </tr>
                    <tr>
                        <td>10240</td>
                        <td>tim@microsoft.com</td>
                        <td>16.10.2013</td>
                    </tr>
                    <tr>
                        <td>10245</td>
                        <td>tim@microsoft.com</td>
                        <td>21.10.2013</td>
                    </tr>
                    <tr>
                        <td>10250</td>
                        <td>tim@microsoft.com</td>
                        <td>26.10.2013</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection

@push('css')
<!-- Malihu Scrollbar -->
<link href="{{ asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">

<!-- Bootgrid -->
<link href="{{ asset('vendors/bower_components/jquery.bootgrid/dist/jquery.bootgrid.min.css') }}" rel="stylesheet">
@endpush

@push('js')
<!-- Malihu ScrollBar -->
<script src="{{ asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<!-- Bootstrap Notify -->
<script src="{{ asset('vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') }}"></script>

<!-- Bootgrid -->
<script src="{{ asset('vendors/bower_components/jquery.bootgrid/dist/jquery.bootgrid.min.js') }}"></script>

<!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="{{ asset('vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js') }}"></script>
        <![endif]-->

        <!-- Demo Only -->
        <script src="{{ asset('demo/js/misc.js') }}"></script>
        <script src="{{ asset('demo/js/data-table.js') }}"></script>
        @endpush