@extends('layouts.master-without-topnav')

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
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form class="row row-cols-lg-auto g-3 align-items-center">
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                        <select class="form-select" id="inlineFormSelectPref">
                            <option selected="">Admin</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                        <select class="form-select" id="inlineFormSelectPref">
                            <option selected="">Distributor</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                        <select class="form-select" id="inlineFormSelectPref">
                            <option selected="">Dealer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                        <select class="form-select" id="inlineFormSelectPref">
                            <option selected="">Sub Dealer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                        <select class="form-select" id="inlineFormSelectPref">
                            <option selected="">Customer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#all" role="tab">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#moving" role="tab">Moving</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#idle" role="tab">Idle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#parking" role="tab">Parking</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#nodata" role="tab">No Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#inactive" role="tab">Inactive</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3">
                            <div class="tab-pane active" id="all" role="tabpanel">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
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
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div id="leaflet-map-custom-icons" class="leaflet-map"></div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
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
                        <div class="tab-content p-3">
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
    <script src="{{ URL::asset('build/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/pdfmakebuild/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/pdfmakebuild/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ URL::asset('build/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- Datatable init js -->
    <!--<script src="{{ URL::asset('build/js/pages/datatables.init.js') }}"></script>-->
    <script>
    $(document).ready(function() {
        $('#datatable').dataTable({
        "bLengthChange": false,
        "pageLength" : 5,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false });
    });
    </script>
@endsection
