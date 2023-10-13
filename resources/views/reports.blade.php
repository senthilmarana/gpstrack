@extends('layouts.master')

@section('title') @lang('translation.Reports') @endsection

@section('css')
    <link href="{{ URL::asset('build/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('build/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ URL::asset('build/libs/spectrum-colorpicker2/spectrum.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('build/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ URL::asset('build/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@chenfengyuan/datepicker/datepicker.min.css') }}">
@endsection


@section('content')

@component('components.breadcrumb')
    @slot('li_1') Reports @endslot
    @slot('title') Ideal Reports @endslot
@endcomponent

<div class="row">

    <div class="col-xl-12">

        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Ideal Reports</h4>

                        <div>
                            <ul class="list-unstyled product-list">
                                <li><a href="javascript: void(0);"><i class="mdi mdi-chevron-right me-1"></i> T-shirts</a></li>
                                <li><a href="javascript: void(0);"><i class="mdi mdi-chevron-right me-1"></i> Shirts</a></li>
                                <li><a href="javascript: void(0);"><i class="mdi mdi-chevron-right me-1"></i> Jeans</a></li>
                                <li><a href="javascript: void(0);"><i class="mdi mdi-chevron-right me-1"></i> Jackets</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-xl-6">


                                        <div class="card">
                                            <div class="card-body">

                                                <h4 class="card-title">Timepicker</h4>
                                                <p class="card-title-desc">Easily select a time for a text input using your mouse or
                                                    keyboards arrow keys.</p>

                                                <form action="#">
                                                    <div class="mb-3">
                                                        <label class="form-label">Default Time Picker</label>

                                                        <div class="input-group" id="timepicker-input-group1">
                                                            <input id="timepicker" type="text" class="form-control" data-provide="timepicker">
                                                            <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">24 Hour Mode Time Picker</label>

                                                        <div class="input-group" id="timepicker-input-group2">
                                                            <input id="timepicker2" type="text" class="form-control" data-provide="timepicker">

                                                            <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                                        </div>

                                                    </div>

                                                    <div>
                                                        <label class="form-label">Specify a step for the minute field</label>

                                                        <div class="input-group" id="timepicker-input-group3">
                                                            <input id="timepicker3" type="text" class="form-control" data-provide="timepicker">

                                                            <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body">

                                                <h4 class="card-title">Bootstrap Datepicker</h4>
                                                <p class="card-title-desc">Examples of twitter bootstrap datepicker.</p>

                                                <form action="#">
                                                    <div class="mb-4">
                                                        <label>Default Functionality</label>
                                                        <div class="input-group" id="datepicker1">
                                                            <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                                data-date-format="dd M, yyyy" data-date-container='#datepicker1'
                                                                data-provide="datepicker">

                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>

                                                    <div class="mb-4">
                                                        <label>Auto Close</label>
                                                        <div class="input-group" id="datepicker2">
                                                            <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                                data-date-format="dd M, yyyy" data-date-container='#datepicker2'
                                                                data-provide="datepicker" data-date-autoclose="true">

                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>

                                                    <div class="mb-4">
                                                        <label>Multiple Date</label>
                                                        <div class="input-group" id="datepicker3">
                                                            <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                                data-provide="datepicker" data-date-container='#datepicker3'
                                                                data-date-format="dd M, yyyy" data-date-multidate="true">

                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>

                                                    <div class="mb-4">
                                                        <label>Month View</label>
                                                        <div class="position-relative" id="datepicker4">
                                                            <input type="text" class="form-control" data-date-container='#datepicker4'
                                                                data-provide="datepicker" data-date-format="MM yyyy" data-date-min-view-mode="1">
                                                        </div>

                                                    </div>

                                                    <div class="mb-4">
                                                        <label>Year View</label>
                                                        <div class="position-relative" id="datepicker5">
                                                            <input type="text" class="form-control" data-provide="datepicker"
                                                                data-date-container='#datepicker5' data-date-format="dd M, yyyy"
                                                                data-date-min-view-mode="2">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4">
                                                        <label>Date Range</label>

                                                        <div class="input-daterange input-group" id="datepicker6" data-date-format="dd M, yyyy"
                                                            data-date-autoclose="true" data-provide="datepicker" data-date-container='#datepicker6'>
                                                            <input type="text" class="form-control" name="start" placeholder="Start Date" />
                                                            <div class="input-group" id="timepicker-input-group1">
                                                                <input id="timepicker" type="text" class="form-control" data-provide="timepicker">
                                                                <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" name="end" placeholder="End Date" />
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <label>Inline Datepicker</label>

                                                        <div data-provide="datepicker-inline" class="bootstrap-datepicker-inline"></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- end row -->
                            </div>


        </div>


    </div>
</div>
<!-- end row -->

@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/spectrum-colorpicker2/spectrum.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/@chenfengyuan/datepicker/datepicker.min.js') }}"></script>

    <!-- form advanced init -->
    <script src="{{ URL::asset('build/js/pages/form-advanced.init.js') }}"></script>
@endsection


