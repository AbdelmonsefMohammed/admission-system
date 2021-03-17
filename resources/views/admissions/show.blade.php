@extends('layouts.app')

@section('title')
    {{ $admission->name }}
@endsection

@section('admissions')
    active-sub
@endsection

@section('collapse-admissions')
    in
@endsection

@section('all-admissions')
    active-link
@endsection

@section('content')
    <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Admissions</h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="demo-pli-home"></i></a></li>
            <li><a href="{{ url('admissions') }}">Admissions</a></li>
            <li class="active">{{$admission->firstname.' '.$admission->middlename.' '.$admission->lastname}}</li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

        <!-- Contact Toolbar -->
        <!---------------------------------->
        <div class="row pad-btm">
            <div class="col-sm-6 toolbar-left">
            </div>
            {{--<div class="col-sm-6 toolbar-right text-right">
                Sort by :
                <div class="select">
                    <select id="demo-ease">
                        <option value="date-created" selected="">Date Created</option>
                        <option value="date-modified">Date Modified</option>
                        <option value="frequency-used">Frequency Used</option>
                        <option value="alpabetically">Alpabetically</option>
                        <option value="alpabetically-reversed">Alpabetically Reversed</option>
                    </select>
                </div>
                <button class="btn btn-default">Filter</button>
                <button class="btn btn-primary"><i class="demo-psi-gear icon-lg"></i></button>
            </div>--}}
        </div>
        <!---------------------------------->

        <div class="panel">
            <div class="panel-body">
                <div class="fixed-fluid">
                    <div class="fixed-md-200 pull-sm-left fixed-right-border">

                        <!-- Simple profile -->
                        <div class="text-center">
                            <div class="pad-ver">
                                @if($admission->gender == 'female')
                                    <img src=" {{ asset('img/profile-photos/8.png') }}" class="img-lg img-circle" alt="Profile Picture">
                                @else
                                    <img src=" {{ asset('img/profile-photos/1.png') }}" class="img-lg img-circle" alt="Profile Picture">
                                @endif
                            </div>
                            <h4 class="text-lg text-overflow mar-no">{{$admission->firstname.' '.$admission->middlename.' '.$admission->lastname}}</h4>
                            <p class="text-sm text-muted"><i class="demo-pli-clock icon-lg"></i> {{ $admission->created_at->diffForHumans() }}</p>

                            <div class="pad-ver btn-groups">

                            </div>
                            <button onclick="location.href='{{ url('#') }}';" class="btn btn-block btn-success btn-lg">{{ $admission->applyingforyear }}</button>
                        </div>
                        <hr>



                    </div>
                    <div class="fluid">
                        <div class="text-right">
                            <a class="btn btn-sm btn-default " id="print"><i class="icon-lg demo-pli-printer"></i>
                            Print </a>
                        </div>

                        <hr class="new-section-md bord-no">

                        <div class="col-sm-12">
                            <!--Hover Rows-->
                            <!--===================================================-->
                            <div class="panel-body">
                                <table class="table table-hover table-vcenter">
                                    <thead>
                                    <tr>
                                        <th class="min-width">#</th>
                                        <th>Name</th>
                                        <th class="text-center">Information</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-male icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Name</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{$admission->firstname.' '.$admission->lastname}}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Applying For Grade</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->applyingforyear }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Applicant</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->applicant }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-calendar-4 icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Date of Birth</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->date_of_birth }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-map-2 icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Place of Birth</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->placeofbirth }}</span></td>
                                    </tr>
                                     <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Nationality</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->nationality }}</span></td>
                                    </tr>
                                     <tr>
                                        <td class="text-center"><i class="demo-pli-male icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Gender</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->gender }}</span></td>
                                    </tr>
                                     <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Religion</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->religion }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-building icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Previous School</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->previosschool }}</span></td>
                                    </tr>
                                     <tr>
                                        <td class="text-center"><i class="demo-pli-calendar-4 icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">National Id</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->national_id }}</span></td>
                                    </tr>
                                     <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Passport No.</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->passportnumber }}</span></td>
                                    </tr>
                                     <tr>
                                        <td class="text-center"><i class="ti-home icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Language spoken at home</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->homelanguage }}</span></td>
                                    </tr>
                                     <tr>
                                        <td class="text-center"><i class="ti-world icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Other Languages</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->otherlanguage }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Father's Name</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->fathername }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Father Nationality</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->fathernationality }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Father's Email</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->fatheremail }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Father's Street</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->fatherstreet }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Father's Flat</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->fatherflat }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Father's City</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->fathercity }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Father's State</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->fatherstate }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Father's Postal</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->fatherpostal }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Father Occupation</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->fatheroccupation }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Father's Business</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->fatherbusiness }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Father's Company Name</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->fathercompanyname }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Father's University</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->fatheruniversity }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's Name</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->mothername }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's Nationality</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->mothernationality }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's Mobile</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->mothermobile }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's Email</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->motheremail }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's Street</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->motherstreet }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's Flat</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->motherflat }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's City</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->mothercity }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's State</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->motherstate }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's Postal</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->motherpostal }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's Occupation</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->motheroccupation }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's Business</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->motherbusiness }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's Company Name</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->mothercompanyname }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's University</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->motheruniversity }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Mother's University</span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->motheruniversity }}</span></td>
                                    </tr>
                                    @if($admission->siblings_names > 0)
                                        @php $i = 0; @endphp
                                        @for ($i = 0; $i < count($admission->siblings_names); $i++)
                                            @php
                                                if($i == 0){ $count = '1st';}
                                                elseif($i == 1){$count = '2nd';}
                                                elseif($i == 2){$count = '3rd';}
                                                else{$count = $i++ . 'th';}
                                            @endphp
                                            <tr>
                                                <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                                <td>
                                                    <span class="text-main text-semibold">{{$count}} Sibling's Name</span>
                                                </td>
                                                <td class="text-center"><span class="text-success text-semibold">{{ $admission->siblings_names[$i] }}</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                                <td>
                                                    <span class="text-main text-semibold">{{$count}} Sibling's current school</span>
                                                </td>
                                                <td class="text-center"><span class="text-success text-semibold">{{ $admission->siblings_currentschools[$i] }}</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                                <td>
                                                    <span class="text-main text-semibold">{{$count}} Sibling's Grade</span>
                                                </td>
                                                <td class="text-center"><span class="text-success text-semibold">{{ $admission->siblings_grades[$i] }}</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                                <td>
                                                    <span class="text-main text-semibold">{{$count}} Sibling's Age</span>
                                                </td>
                                                <td class="text-center"><span class="text-success text-semibold">{{ $admission->siblings_ages[$i] }}</span></td>
                                            </tr>
                                        @endfor
                                    @endif
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Emergency contact's Name </span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->emergency_firstname }} {{$admission->emergency_lastname}}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Emergency contact's Phone </span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->emergency_contact_mobile }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Emergency contact's Relation to the child </span>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">{{ $admission->emergency_relationtothechild }}</span></td>
                                    </tr>
                                    <tr>
                                        
                                        <td class="text-center"><i class="demo-pli-information icon-2x"></i></td>
                                        <td>
                                            <span class="text-main text-semibold">Document </span>
                                        </td>
                                        
                                            <td class="text-center">
                                                <a href="{{asset($admission->filepath . $admission->filename)}}" target="_blank">
                                                    <span class="text-success text-semibold">Document</span></td>
                                                </a>
                                    </tr> 
                                    </tbody>
                                </table>
                            </div>
                            <!--===================================================-->
                            <!--End Hover Rows-->

                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--===================================================-->
    <!--End page content-->
@endsection

@section('script')
    <!--Bootbox Modals [ OPTIONAL ]-->
    <script src="{{ asset('plugins/bootbox/bootbox.min.js') }}"></script>

    <!--Modals [ SAMPLE ]-->
    <script src="{{ asset('js/demo/ui-modals.js') }}"></script>
    <script>
        $('#demo-bootbox-confirm').on('click', function(){

            bootbox.confirm("Are you sure you want to delete this user?", function(result) {

                if (result) {
                    /*$.niftyNoty({
                        type: 'success',
                        icon : 'pli-like-2 icon-2x',
                        message : 'User confirmed dialog',
                        container : 'floating',
                        timer : 5000
                    });*/
                    $('#delete_form{{$admission -> id}}').submit();
                }else{
                    $.niftyNoty({
                        type: 'danger',
                        icon : 'pli-cross icon-2x',
                        message : 'Your deleting request is canceled.',
                        container : 'floating',
                        timer : 5000
                    });
                }

            });
        });
        $('#delete_admin').on('click', function(){

            bootbox.confirm("Are you sure you want to delete this user?", function(result) {

                if (result) {
                    /*$.niftyNoty({
                        type: 'success',
                        icon : 'pli-like-2 icon-2x',
                        message : 'User confirmed dialog',
                        container : 'floating',
                        timer : 5000
                    });*/
                    $('#delete_form').submit();
                }else{
                    $.niftyNoty({
                        type: 'danger',
                        icon : 'pli-cross icon-2x',
                        message : 'Your deleting request is canceled.',
                        container : 'floating',
                        timer : 5000
                    });
                }

            });
        });

        $('.reviewed').click(function () {
              var value = $(this).find('input').val();
              if($(this).hasClass('btn-primary'))
              {
                  $.ajax({
                      url: '{{url('admission/ajax')}}',
                      method: 'GET',
                      data: {
                          contacted: 0,
                          admission_id:  value,
                      },
                      dataType: 'json',
                      success: function (data) {
                          if(data.success != ''){
                              $.niftyNoty({
                                  type: "success",
                                  icon: "ti-check icon-2x",
                                  focus: true,
                                  container : "floating",
                                  title : '<span>'+data.success+'</span>',
                                  message : '',
                                  closeBtn : true,
                                  timer : 3000,
                              });
                              $(this).removeClass('btn-default').addClass('btn-primary');
                          } else{
                              $.niftyNoty({
                                  type: "danger",
                                  icon: "ti-close icon-2x",
                                  focus: true,
                                  container : "floating",
                                  title : '<span>'+data.message+'</span>',
                                  message : '',
                                  closeBtn : true,
                                  timer : 3000,
                              });
                          }

                      },
                      error: function(data) {
                          $.niftyNoty({
                              type: "danger",
                              icon: "ti-close icon-2x",
                              focus: true,
                              container : "floating",
                              title : '<span>Something went wrong. Please try again later.</span>',
                              message : '',
                              closeBtn : true,
                              timer : 3000,
                          });

                      },
                  });
                  $(this).removeClass('btn-primary').addClass('btn-default');
              }else{
                  $.ajax({
                      url: '{{url('admission/ajax')}}',
                      method: 'GET',
                      data: {
                          contacted: 1,
                          admission_id:  value,
                      },
                      dataType: 'json',
                      success: function (data) {
                          if(data.success != ''){
                              $.niftyNoty({
                                  type: "success",
                                  icon: "ti-check icon-2x",
                                  focus: true,
                                  container : "floating",
                                  title : '<span>'+data.success+'</span>',
                                  message : '',
                                  closeBtn : true,
                                  timer : 3000,
                              });
                              $(this).removeClass('btn-default').addClass('btn-primary');
                          } else{
                              $.niftyNoty({
                                  type: "danger",
                                  icon: "ti-close icon-2x",
                                  focus: true,
                                  container : "floating",
                                  title : '<span>'+data.message+'</span>',
                                  message : '',
                                  closeBtn : true,
                                  timer : 3000,
                              });
                          }

                      },
                      error: function(data) {
                          $.niftyNoty({
                              type: "danger",
                              icon: "ti-close icon-2x",
                              focus: true,
                              container : "floating",
                              title : '<span>Something went wrong. Please try again later.</span>',
                              message : '',
                              closeBtn : true,
                              timer : 3000,
                          });

                      },
                  });
                  $(this).removeClass('btn-default').addClass('btn-primary');
              }
            });

        $('#print').on('click', function () {
            window.print()
        })
    </script>
@endsection


