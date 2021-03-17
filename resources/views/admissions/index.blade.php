@extends('layouts.app')

@section('title')
    Applications
@endsection

@section('style')
    <!--Morris.js [ OPTIONAL ]-->
    <link href="{{ asset('plugins/morris-js/morris.min.css') }}" rel="stylesheet">

    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="{{ asset('plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select.dataTables.min.css') }}">
    <style>
        .bootstrap-select{
            margin: 0;!important;
        }
        .media{
            overflow: inherit;!important;
        }
        .label-table{
            max-width: 100%;!important;
        }
    </style>
@endsection

@section('applications')
    active-sub
@endsection

@section('collapse-applications')
    in
@endsection

@section('all-applications')
    active-link
@endsection

@section('content')

    <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Admission</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="demo-pli-home"></i></a></li>
            <li class="active">Admission</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->
    </div>



    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

        <!-- Add Row -->
        <!--===================================================-->
        <div class="panel">
            <div class="panel-body">
                <h4 class="bord-btm pad-ver text-main text-bold">Admissions</h4><br>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <!-- Line Chart -->
                        <!---------------------------------->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Admissions analysis</h3>
                            </div>
                            <div class="pad-all">
                                <div id="demo-morris-line-legend" class="text-center"></div>
                                <div id="demo-morris-line" style="height:268px"></div>
                            </div>
                        </div>
                        <!---------------------------------->

                        <div class="row">
                            <div class="col-md-3">
                                <div class="panel panel-warning panel-colorful media middle pad-all">
                                    <div class="media-left">
                                        <div class="pad-hor">
                                            <i class="demo-pli-male icon-3x"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-2x mar-no text-semibold">{{ count($new_count) }}</p>
                                        <p class="mar-no">New</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel panel-mint panel-colorful media middle pad-all">
                                    <div class="media-left">
                                        <div class="pad-hor">
                                            <i class="demo-pli-check icon-3x"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-2x mar-no text-semibold">{{ count($accepted_count) }}</p>
                                        <p class="mar-no">Accepted</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel panel-info panel-colorful media middle pad-all">
                                    <div class="media-left">
                                        <div class="pad-hor">
                                            <i class="demo-pli-calendar-4 icon-3x"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-2x mar-no text-semibold">{{ count($scheduled_count) }}</p>
                                        <p class="mar-no">Scheduled</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel panel-danger panel-colorful media middle pad-all">
                                    <div class="media-left">
                                        <div class="pad-hor">
                                            <i class="demo-pli-cross icon-3x"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-2x mar-no text-semibold">{{ count($rejected_count) }}</p>
                                        <p class="mar-no">Rejected</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="row">
                    <!-- Student Attendence Search Area Start Here -->
                    <div class="panel-body" style="padding: 60px">
                        <div class="col-12">
                            <div class="heading-layout1">
                                        <div class="item-title">
                                            <h3>Admissions</h3>
                                        </div>
                                    </div>
                            <form class="new-added-form">
                                        <div class="row">
                                            <div class="col-md-3 form-group">
                                                <p class="text-main text-bold">Select Assignment</p>

                                                <!-- Bootstrap Select with Search Input -->
                                                <!--===================================================-->
                                                <select name="status" class="selectpicker" data-live-search="true" data-width="100%">
                                                    <option value="">Select Status</option>
                                                    <option {{ request()->status == 'new' ? 'selected' : '' }} value="new">New</option>
                                                    <option {{ request()->status == 'accepted' ? 'selected' : '' }} value="accepted">Accepted</option>
                                                    <option {{ request()->status == 'rejected' ? 'selected' : '' }} value="rejected">Rejected</option>
                                                    <option {{ request()->status == 'scedualed_for_appointment' ? 'selected' : '' }} value="scedualed_for_appointment">Scedualed For Appointment.</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <p class="text-main text-bold">Select Stage</p>

                                                <!-- Bootstrap Select with Search Input -->
                                                <!--===================================================-->
                                                <select name="applyingforyear" class="selectpicker" data-live-search="true" data-width="100%">
                                                    <option value="">Select Stage</option>
                                                    <option value="Foundation Stage 1" class="option" @if( request()->applyingforyear == 'Foundation Stage 1') selected @endif>Foundation Stage 1</option>
                                                    <option value="Foundation Stage 2" class="option" @if( request()->applyingforyear == 'Foundation Stage 2') selected @endif>Foundation Stage 2</option>
                                                    <option value="Year 1" class="option" @if( request()->applyingforyear == 'Year 1') selected @endif>Year 1</option>
                                                    <option value="Year 2" class="option" @if( request()->applyingforyear == 'Year 2') selected @endif>Year 2</option>
                                                    <option value="Year 3" class="option" @if( request()->applyingforyear == 'Year 3') selected @endif>Year 3</option>
                                                    <option value="Year 4" class="option" @if( request()->applyingforyear == 'Year 4') selected @endif>Year 4</option>
                                                    <option value="Year 5" class="option" @if( request()->applyingforyear == 'Year 5') selected @endif>Year 5</option>
                                                    <option value="Year 6" class="option" @if( request()->applyingforyear == 'Year 6') selected @endif>Year 6</option>
                                                    <option value="Year 7" class="option" @if( request()->applyingforyear == 'Year 7') selected @endif>Year 7</option>
                                                    <option value="Year 8" class="option" @if( request()->applyingforyear == 'Year 8') selected @endif>Year 8</option>
                                                    <option value="Year 9" class="option" @if( request()->applyingforyear == 'Year 9') selected @endif>Year 9</option>
                                                    <option value="Year 10" class="option" @if( request()->applyingforyear == 'Year 10') selected @endif>Year 10</option>
                                                    <option value="Year 11" class="option" @if( request()->applyingforyear == 'Year 11') selected @endif>Year 11</option>
                                                    <option value="Year 12" class="option" @if( request()->applyingforyear == 'Year 12') selected @endif>Year 12</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <p class="text-main text-bold">Time From</p>
                                                <input class="form-control" type="date" name="from" id="">
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <p class="text-main text-bold">Time To</p>
                                                <input class="form-control" type="date" name="to" id="">
                                            </div>
                                            <div class="col-12 form-group mg-t-8">
                                                <button type="submit" class="btn btn-success">Search</button>
                                                <a class="btn btn-danger" href="{{url('applications')}}">Reset</a>
                                            </div>
                                        </div>
                                    </form>
                        </div>
                    </div>

                    <div class="panel-body" >

                        <table id="demo-dt-addrow" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Application Date</th>
                                <th>Applying For Grade</th>
                                <th class="no-sort">Applicant Phone</th>
                                <th class="no-sort">Status</th>
                                <th class="no-sort">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($admissions as $admission)
                                <tr>
                                    <td>{{$admission->firstname}} {{$admission->lastname}}</td>
                                    <td>{{$admission->updated_at->diffForHumans()}}</td>
                                    <td>{{$admission->applyingforyear}}</td>
                                    <td>{{$admission->applicant_phone}}</td>
                                    <td>
                                        @if($admission->status == 'new')
                                            <div class="label label-table label-warning">{{$admission->status}}</div>
                                        @elseif($admission->status == 'scedualed_for_appointment')
                                            <div class="label label-table label-info">{{$admission->status}}</div>
                                        @elseif($admission->status == 'accepted')
                                            <div class="label label-table label-success">{{$admission->status}}</div>
                                        @else
                                            <div class="label label-table label-danger">{{$admission->status}}</div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href='{{ route('admissions.show', $admission->id) }}'' class="btn btn-icon demo-pli-male icon-lg add-tooltip" data-original-title="Show" data-container="body"></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!-- End Add Row -->


    </div>
    <!--===================================================-->
    <!--End page content-->


@endsection
@section('datatable')

    <!--Bootbox Modals [ OPTIONAL ]-->
    <script src="{{ asset('plugins/bootbox/bootbox.min.js') }}"></script>

    <!--Modals [ SAMPLE ]-->
    <script src="{{ asset('js/demo/ui-modals.js') }}"></script>

    <!--DataTables [ OPTIONAL ]-->
    <script src="{{ asset('plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('js/jszip.min.js') }}"></script>
    <script src="{{ asset('js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('js/buttons.colVis.min.js') }}"></script>

    <!--DataTables Sample [ SAMPLE ]-->
    <script src="{{ asset('js/demo/tables-datatables.js') }}"></script>

    <!--Morris.js [ OPTIONAL ]-->
    <script src="{{ asset('plugins/morris-js/morris.min.js') }}"></script>
    <script src="{{ asset('plugins/morris-js/raphael-js/raphael.min.js') }}"></script>

    <!--Bootstrap Select [ OPTIONAL ]-->
    <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>


    <!--Custom script [ DEMONSTRATION ]-->
    <!--===================================================-->
    <script>
        $(document).on('nifty.ready', function () {

            // MORRIS LINE CHART
            // =================================================================
            // Require MorrisJS Chart
            // -----------------------------------------------------------------
            // http://morrisjs.github.io/morris.js/
            // =================================================================
            var day_data = [
                @for ($i = 0; $i <= 11; $i++)
                    @php $count = 0; @endphp
                    @foreach($admissions as $admission)
                        @if(date("Y-m", strtotime( $admission->created_at)) == $months[] = date("Y-m", strtotime( date( 'Y-m-01' )." -$i months")))
                            @php $count+= 1; @endphp
                        @endif
                    @endforeach
                    {'elapsed': '{{ $months[] = date("F", strtotime( date( 'Y-m-01' )." -$i months")) }}', 'value': {{ $count }}},
                @endfor
            ];
            Morris.Line({
                element: 'demo-morris-line',
                data: day_data,
                xkey: 'elapsed',
                ykeys: ['value'],
                labels: ['value'],
                gridEnabled: true,
                gridLineColor: 'rgba(0,0,0,.1)',
                gridTextColor: '#8f9ea6',
                gridTextSize: '11px',
                lineColors: ['#177bbb'],
                lineWidth: 2,
                parseTime: false,
                resize:true,
                hideHover: 'auto'
            });

        });
    </script>
@endsection
