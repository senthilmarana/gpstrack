@extends('layouts.master_fullwidth')

@section('title') @lang('translation.Single_Dashboard') @endsection

@section('css')
    <!-- leaflet Css -->
    <link href="{{ URL::asset('build/libs/leaflet/leaflet.css') }}" rel="stylesheet" type="text/css" />

     <!-- DataTables -->
     <link href="{{ URL::asset('build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
     type="text/css" />
 <link href="{{ URL::asset('build/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
     type="text/css" />

 <!-- Responsive datatable examples -->
 <link href="{{ URL::asset('build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
     rel="stylesheet" type="text/css" />
@endsection

@section('content')
<style>
    .dataTables_Filter{
        float: left;
    }
</style>
    <div class="row" style="padding:0px;">
        <div class="col-lg-3" style="padding:0px;">
            <div class="card" style="padding:0px;">
                <div class="card-body" style="padding:0px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a style="background:#d9ecd9;color:#50b850;" class="nav-link active" data-bs-toggle="tab" href="#all" role="tab">15 <br> All</a>
                            </li>
                            <li class="nav-item">
                                <a style="background:#d9d9ff;color:#0000ff;" class="nav-link" data-bs-toggle="tab" href="#moving" role="tab">3 <br> Moving</a>
                            </li>
                            <li class="nav-item">
                                <a style="background:#fff6da;color:#d4a51b;" class="nav-link" data-bs-toggle="tab" href="#idle" role="tab">2 <br> Idle</a>
                            </li>
                            <li class="nav-item">
                                <a style="background:#ffd9d9;color:#ff1c1c;" class="nav-link" data-bs-toggle="tab" href="#parking" role="tab">1 <br> Parking</a>
                            </li>
                            <li class="nav-item">
                                <a style="background:#ead0f1;color:#b943d6;" class="nav-link" data-bs-toggle="tab" href="#nodata" role="tab">0 <br> No Data</a>
                            </li>
                            <li class="nav-item">
                                <a style="background:#d9d9d9;color:#737070;" class="nav-link" data-bs-toggle="tab" href="#inactive" role="tab">9 <br> Inactive</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3">
                            <div class="tab-pane active" id="all" role="tabpanel">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>One</th>
                                                <th>Two</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>10 KMPH</td>
                                            </tr>
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>100 KMPH</td>
                                            </tr>
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>100 KMPH</td>
                                            </tr>
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>100 KMPH</td>
                                            </tr>
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>100 KMPH</td>
                                            </tr>
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>100 KMPH</td>
                                            </tr>
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>100 KMPH</td>
                                            </tr>
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>100 KMPH</td>
                                            </tr>
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>100 KMPH</td>
                                            </tr>
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>100 KMPH</td>
                                            </tr>
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>100 KMPH</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="moving" role="tabpanel">Move</div>
                            <div class="tab-pane" id="idle" role="tabpanel">Idle</div>
                            <div class="tab-pane" id="parking" role="tabpanel">Parking</div>
                            <div class="tab-pane" id="nodata" role="tabpanel">No Data</div>
                            <div class="tab-pane" id="inactive" role="tabpanel">Inactive</div>
                        </div>


                    </div>
            </div>
        </div>
        <div class="col-lg-9" style="padding:2px 2px 2px 3px ;margin-bottom:0px;">
            <div class="card" style="padding:0px;margin-bottom:0px;">
                <div class="card-body" style="padding:0px;">
                    <div id="leaflet-map-custom-icons" class="leaflet-map"></div>
                </div>
            </div>
            <div class="card" style="padding:0px;">
                <div class="card-body" style="padding:0px;">
                        <!-- Nav tabs -->

                        <ul class="nav nav-pills nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#full_data" role="tab">Full Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#alerts" role="tab">Alerts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#pockets" role="tab">Pockets</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" style="padding:0px;">
                            <div class="tab-pane active" id="full_data" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-nowrap align-middle mb-0" style="font-size:11px;">
                                            <tr>
                                                <td style="padding-right:20px;background:#fafafa;"><b>Vehicel Details</b></td>
                                                <td style="padding-right:20px;"><b>KM status</b></td>
                                                <td style="padding-right:20px;background:#fafafa;"><b>Fuel Details</b></td>
                                                <td style="padding-right:20px;"><b>Temperaure Details</b></td>
                                                <td style="padding-right:20px;background:#fafafa;"><b>Hour Meter Details</b></td>
                                                <td style="padding-right:20px;"><b>Voltage DEtails</b></td>
                                                <td style="padding-right:20px;background:#fafafa;"><b>Device Status</b></td>
                                            </tr>
                                            <tr>
                                                <td style="padding-right:20px;background:#fafafa;" valign="top"><p>Vehicle Number:</p>
                                                    <p>Vehicle Status:</p>
                                                    <p>AC Status:</p>
                                                    <p>Odometer: </p>
                                                </td>
                                                <td style="padding-right:20px;" valign="top"><p>Today KM:</p>
                                                    <p>Keyon/off KM:</p>
                                                </td>
                                                <td style="padding-right:20px;background:#fafafa;" valign="top"><p>Fuel in Tank1:</p>
                                                    <p>Fuel in Tank2:</p>
                                                    <p>DTE:</p>
                                                </td>
                                                <td style="padding-right:20px;" valign="top"><p>Temperature 1:</p>
                                                    <p>Humidity 1:</p>
                                                    <p>Temperature 2:</p>
                                                    <p>Humidity 2:</p>
                                                </td>
                                                <td style="padding-right:20px;background:#fafafa;" valign="top"><p>RPM:</p>
                                                    <p>Hour Meter:</p>
                                                    <p>Today Hours:</p>
                                                </td>
                                                <td style="padding-right:20px;" valign="top"><p>Vehicle Battery Voltage:</p>
                                                    <p>Devicce Battery Voltage:</p>
                                                    <p>Devicce Battery Percentage:</p>
                                                </td>
                                                <td style="padding-right:20px;background:#fafafa;" valign="top"><p>GSM Status:</p>
                                                    <p>GPS status:</p>
                                                    <p>GPS Satellite:</p>
                                                </td>
                                            </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="alerts" role="tabpanel">Alerts</div>
                            <div class="tab-pane" id="pockets" role="tabpanel">Pockets</div>
                        </div>


                    </div>
            </div>
        </div>
    </div>
    <!-- end row -->



@endsection
@section('script')
    <!-- leaflet plugin -->
    <script src="{{ URL::asset('build/libs/leaflet/leaflet.js') }}"></script>

    <!-- leaflet map.init -->
    <script src="{{ URL::asset('build/js/pages/leaflet-us-states.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/leaflet-map.init.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('build/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <!--<script src="{{ URL::asset('build/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/pdfmakebuild/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/pdfmakebuild/vfs_fonts.js') }}"></script>-->
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ URL::asset('build/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- Datatable init js -->
    <!--<script src="{{ URL::asset('build/js/pages/datatables.init.js') }}"></script>-->
    <script>
        $('#datatable').dataTable({
        "ordering": true,               // Allows ordering
        "searching": true,              // Searchbox
        "paging": true,                 // Pagination
        "info": false,                  // Shows 'Showing X of X' information
        "pagingType": 'simple_numbers', // Shows Previous, page numbers & next buttons only
        "bLengthChange": false,
        "pageLength" : 5,

        "columnDefs": [
            {
                "targets": 'dialPlanButtons',
                "searchable": false,    // Stops search in the fields
                "sorting": false,       // Stops sorting
                "orderable": false      // Stops ordering
            }
        ],
        "dom": '<"top"f>rt<"bottom"lp><"clear">', // Positions table elements
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], // Sets up the amount of records to display
        "language": {
            "search": "_INPUT_",            // Removes the 'Search' field label
            "searchPlaceholder": "Search"   // Placeholder for the search box
        },
        "search": {
            "addClass": 'form-control input-lg col-xs-12'
        },
        "fnDrawCallback":function(){
            $("input[type='search']").attr("id", "searchBox");
            $('#dialPlanListTable').css('cssText', "margin-top: 0px !important;");
            $("select[name='dialPlanListTable_length'], #searchBox").removeClass("input-sm");
            $('#searchBox').css("width", "200px").focus();
            $('#dialPlanListTable_filter').removeClass('dataTables_filter');
        }
    });

    </script>
@endsection
