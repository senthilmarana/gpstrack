@extends('layouts.master-without-topnav')

@section('title') @lang('translation.Single_Dashboard') @endsection

@section('css')
    <!-- leaflet Css -->
    <link href="{{ URL::asset('build/libs/leaflet/leaflet.css') }}" rel="stylesheet" type="text/css" />
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
                                    <table class="table table-hover datatable " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>10 KMPH</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>100 KMPH</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
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
                                    <table class="table table-hover datatable " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>10 KMPH</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>HR 26 D 5506</td>
                                                <td>100 KMPH</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
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
@endsection
