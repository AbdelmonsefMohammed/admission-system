<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Application</title>


		<!-- MATERIAL DESIGN ICONIC FONT -->
        <link rel="stylesheet" href="{{ asset('application/fonts/material-design-iconic-font/css/material-design-iconic-font.css') }}">

        <!-- DATE-PICKER -->
        <link rel="stylesheet" href="{{ asset('application/vendor/date-picker/css/datepicker.min.css') }}">

        <!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('application/css/style.css') }}">

	</head>
	<body>
		<div class="wrapper">

            <form action="{{ route('admissions.store') }}" id="wizard" method="POST" enctype="multipart/form-data">
                @csrf

                @if($message = \Illuminate\Support\Facades\Session::get('success'))
                    <h2  style="color: green!important;"> {{$message}} </h2>
                @endif

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <h2  style="color: red!important;"> {{$error}} </h2>
                    @endforeach
                @endif

                <!-- SECTION 1 -->
                <h4></h4>
                <section>
                         <h3>Online Application</h3>
                         <h2 class="h4 mb-2 text-left">Online Application steps</h2>
                         <br>
                         <h2 class="h4 mb-2 text-left">First Step:</h2>
                         <h4>Complete Our Application Form online</h4>
                         <br>
                         <h2 class="h4 mb-2 text-left">Second Step:</h2>
                         <h4>We will contact the parents soon to determine an appointment for the assessment .</h4>
                         <br>
                         <h2 class="h4 mb-2 text-left">Third Step:</h2>
                         <h4>Visit us to: </h4>
                         <p>* Complete the rest of essential data</p>
                         <p>* Sign the application</p>
                         <p>* Submit the required documents as detailed below:</p>
                         <br>
                         <p style="font-weight:bold;"> (Egyptian Students & Parents) </p>
                         <p>    - Original birth computerized certificate </p>
                         <p>    - Copy of mother’s &father’s ID</p>
                         <p>    - Report from previous Nursery/School </p>
                         <p>    - Student’s recent photo size 4x6</p>

                                <br>
                         <p style="font-weight:bold;">(Non-Egyptian Students & Parents)</p>
                         <p>    - Copy of student’s passport </p>
                         <p>    - Copy of mother’s &father’s passport </p>
                         <p>    - Report from previous Nursery/School </p>
                         <p>    - Student’s recent photo size 4x6</p>
                     </section>

                <!-- SECTION 2 -->
                <h4></h4>
                <section>
                    <h3>Main Information</h3>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Pupil's First Name
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" class="form-control" id="firstname"
                                       name="firstname" value="{{ old('firstname') }}" required>
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Pupil's Last Name
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" class="form-control" id="lastname"
                                       name="lastname" value="{{ old('lastname') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Applying for
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <select name="applyingforyear"  class="form-control" id="applyingforyear" required>
                                    <option value="Foundation Stage 1" class="option" @if( old('applyingforyear') == 'Foundation Stage 1') selected @endif>Foundation Stage 1</option>
                                    <option value="Foundation Stage 2" class="option" @if( old('applyingforyear') == 'Foundation Stage 2') selected @endif>Foundation Stage 2</option>
                                    <option value="Year 1" class="option" @if( old('applyingforyear') == 'Year 1') selected @endif>Year 1</option>
                                    <option value="Year 2" class="option" @if( old('applyingforyear') == 'Year 2') selected @endif>Year 2</option>
                                    <option value="Year 3" class="option" @if( old('applyingforyear') == 'Year 3') selected @endif>Year 3</option>
                                    <option value="Year 4" class="option" @if( old('applyingforyear') == 'Year 4') selected @endif>Year 4</option>
                                    <option value="Year 5" class="option" @if( old('applyingforyear') == 'Year 5') selected @endif>Year 5</option>
                                    <option value="Year 6" class="option" @if( old('applyingforyear') == 'Year 6') selected @endif>Year 6</option>
                                    <option value="Year 7" class="option" @if( old('applyingforyear') == 'Year 7') selected @endif>Year 7</option>
                                    <option value="Year 8" class="option" @if( old('applyingforyear') == 'Year 8') selected @endif>Year 8</option>
                                    <option value="Year 9" class="option" @if( old('applyingforyear') == 'Year 9') selected @endif>Year 9</option>
                                    <option value="Year 10" class="option" @if( old('applyingforyear') == 'Year 10') selected @endif>Year 10</option>
                                    <option value="Year 11" class="option" @if( old('applyingforyear') == 'Year 11') selected @endif>Year 11</option>
                                    <option value="Year 12" class="option" @if( old('applyingforyear') == 'Year 12') selected @endif>Year 12</option>
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Parent's Email
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="email" class="form-control" id="applicant_email" name="applicant_email" value="{{ old('applicant_email') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Parent's Mobile
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-smartphone"></i>
                                <input type="text" class="form-control" id="applicant_phone" name="applicant_phone" value="{{ old('applicant_phone') }}" required>
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Who is Applying
                            </label>
                            <div class="form-holder" style="cursor: pointer">
                                <input class="form-check-input" type="radio" name="applicant" id="whoisapplying" value="father" style="cursor: pointer" checked required>
                                <label style="color: #333; display: inline!important;cursor: pointer" for="whoisapplying">
                                    Pupil's Father
                                </label>
                            </div>
                            <div class="form-holder" style="cursor: pointer">
                                <input class="form-check-input" type="radio" name="applicant" id="whoisapplying2" value="mother" style="cursor: pointer" required>
                                <label style="color: #333; display: inline!important;cursor: pointer" for="whoisapplying2">
                                    Pupil's Mother
                                </label>
                            </div>
                            {{-- <div class="form-holder" style="cursor: pointer">
                                <input class="form-check-input" type="radio" name="applicant" id="whoisapplying3" value="guardian" style="cursor: pointer">
                                <label style="color: #333; display: inline!important;cursor: pointer" for="whoisapplying3">
                                    Pupil's Guardian
                                </label>
                            </div> --}}
                        </div>
                    </div>

                    <h4 class="h4 mb-2 text-left"> You must fill all fields to be able to continue.</h4>

                </section>

                <!-- SECTION 3 -->
                <h4></h4>
                <section>
                    <h3>Pupil's Data</h3>

                    <div class="form-row">

                        <div class="form-col">
                            <label for="">
                                Date of Birth
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-calendar"></i>
                                <input type="text" class="form-control datepicker-here" value="{{ old('date_of_birth') }}" name="date_of_birth" data-language='en' data-date-format="dd - mm - yyyy" id="dp1">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Gender
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <select name="gender"  class="form-control">
                                    <option value="male" class="option" @if( old('gender') == 'male') selected @endif>Male</option>
                                    <option value="female" class="option"  @if( old('gender') == 'female') selected @endif>Female</option>
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Place of birth
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-map"></i>
                                <select name="placeofbirth"  class="form-control" id="place-of-birth">
                                    @foreach ($countries as $country)
                                        <option value="{{$country->country_enName}}" {{$country->country_enName == 'Egypt' ? 'selected':''}}>
                                            {{$country->country_enName}}
                                        </option>
                                    @endforeach                                
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Nationality
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-folder-person"></i>
                                <select name="nationality"  class="form-control" id="nationality">
                                    @foreach ($countries as $country)
                                        <option value="{{$country->country_enNationality}}" {{$country->country_enNationality == 'Egyptian' ? 'selected':''}}>
                                            {{$country->country_enNationality}}
                                        </option>
                                    @endforeach                                
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-col">
                            <label for="">
                                Religion
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-folder-person"></i>
                                <select name="religion"  class="form-control" id="religion">
                                    <option value="Islam" class="option" @if( old('religion') == 'Islam') selected @endif>Islam</option>
                                    <option value="Christianity" class="option" @if( old('religion') == 'Christianity') selected @endif>Christianity</option>
                                    <option value="Other" class="option" @if( old('religion') == 'Other') selected @endif>Other</option>
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                        <div class="form-col">

                            <label for="">
                                Previous School/Nursery <small>(If existed)</small>
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-home"></i>
                                <input type="text" class="form-control"  name="previosschool" value="{{ old('previosschool') }}">
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                National ID
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-card"></i>
                                <input type="number" name="national_id" class="form-control" value="{{ old('national_id') }}">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Passport Number
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-calendar"></i>
                                <input type="number" name="passportnumber" class="form-control" value="{{ old('passportnumber') }}">
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Language spoken at home
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-bus"></i>
                                <select data-placeholder="Choose a Language..." name="homelanguage" class="form-control">
                                    @include('admissions.components.languageOptions')
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Other languages
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-spellcheck"></i>
                                <input type="text" name="otherlanguage" class="form-control" value="{{ old('otherlanguage') }}">
                            </div>
                        </div>

                    </div>
                </section>

                <!-- SECTION 4 -->
                <h4></h4>
                <section>
                    <h3>Father Data</h3>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Father Name
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" class="form-control" id="fathername"
                                       name="fathername" value="{{ old('fathername') }}">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Nationality
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-folder-person"></i>
                                <select name="fathernationality"  class="form-control" id="fathernationality">
                                    @foreach ($countries as $country)
                                        <option value="{{$country->country_enNationality}}" {{$country->country_enNationality == 'Egyptian' ? 'selected':''}}>
                                            {{$country->country_enNationality}}
                                        </option>
                                    @endforeach                                
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Phone Number
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-smartphone"></i>
                                <input type="number" class="form-control" id="fathermobile" name="fathermobile" value="{{ old('fathermobile') }}">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Email
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="email" class="form-control" id="fatheremail" name="fatheremail" value="{{ old('fatheremail') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Street Address
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="fatherstreet" name="fatherstreet" value="{{ old('fatherstreet') }}">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Building and Flat number
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="fatherflat" name="fatherflat" value="{{ old('fatherflat') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Area/State
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-map"></i>
                                <select name="fatherstate" class="form-control" id="fatherstate" >
                                    @include('admissions.components.stateOptions')
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                City
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="fathercity" name="fathercity" value="{{ old('fathercity') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Postal / Zip Code
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="fatherpostal" name="fatherpostal" value="{{ old('fatherpostal') }}">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Occupation
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-map"></i>
                                <select class="form-control dropdown" id="fatheroccupation" name="fatheroccupation">
                                    @include('admissions.components.jobsOptions')                                
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Type of Business
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="fatherbusiness" name="fatherbusiness" value="{{ old('fatherbusiness') }}">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Company Name
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="fathercompanyname" name="fathercompanyname" value="{{ old('fathercompanyname') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                University Certificate
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="fatheruniversity" name="fatheruniversity" value="{{ old('fatheruniversity') }}">
                            </div>
                        </div>
                    </div>

                   {{-- <h4 class="h4 mb-2 text-left"> You must fill all fields to be able to continue.</h4>--}}

                </section>

                <!-- SECTION 5 -->
                <h4></h4>
                <section>
                    <h3>Mother Data</h3>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Mother Name
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" class="form-control" id="mothername"
                                       name="mothername" value="{{ old('mothername') }}">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Nationality
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-folder-person"></i>
                                <select name="mothernationality"  class="form-control" id="mothernationality">
                                    @foreach ($countries as $country)
                                        <option value="{{$country->country_enNationality}}" {{$country->country_enNationality == 'Egyptian' ? 'selected':''}}>
                                            {{$country->country_enNationality}}
                                        </option>
                                    @endforeach                                
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Phone Number
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-smartphone"></i>
                                <input type="number" class="form-control" id="mothermobile" name="mothermobile" value="{{ old('mothermobile') }}">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Email
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="email" class="form-control" id="motheremail" name="motheremail" value="{{ old('motheremail') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-holder">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" style="cursor: pointer">
                                <label style="/*color: #3377C0;*/ font-size: large; display: inline!important;cursor: pointer" for="defaultCheck1" >
                                    Use same address as Father
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Street Address
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="motherstreet" name="motherstreet" value="{{ old('motherstreet') }}">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Building and Flat number
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="motherflat" name="motherflat" value="{{ old('motherflat') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Area/State
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-map"></i>
                                <select name="motherstate" class="form-control" id="motherstate" >
                                    @include('admissions.components.stateOptions')
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                City
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="mothercity" name="mothercity" value="{{ old('mothercity') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Postal / Zip Code
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="motherpostal" name="motherpostal" value="{{ old('motherpostal') }}">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Occupation
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-map"></i>
                                <select class="form-control dropdown" id="motheroccupation" name="motheroccupation">
                                    @include('admissions.components.jobsOptions')
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Type of Business
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="motherbusiness" name="motherbusiness" value="{{ old('motherbusiness') }}">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Company Name
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="mothercompanyname" name="mothercompanyname" value="{{ old('mothercompanyname') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                University Certificate
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" id="motheruniversity" name="motheruniversity" value="{{ old('motheruniversity') }}">
                            </div>
                        </div>
                    </div>

                   {{-- <h4 class="h4 mb-2 text-left"> You must fill all fields to be able to continue.</h4>--}}

                </section>

                <!-- SECTION 6 -->
                <h4></h4>
                <section>
                    <h3>Siblings Data</h3>
                    <h4>List all siblings, including those not of school age (maximum 4 siblings).</h4>
                    <br>
                    <h3 class="title-siblings">1st Sibling</h3>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">Name</label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" class="form-control" name="siblings_names[]">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">Current School/Nursery</label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" class="form-control" name="siblings_currentschools[]">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">Age</label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-smartphone"></i>
                                <input type="number" class="form-control" name="siblings_ages[]">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">Grade Level</label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" name="siblings_grades[]">
                            </div>
                        </div>
                    </div>
                    <h4 href="javascript:void(0);" style="cursor: pointer" class="siblings-add" onclick="myFunction()">+ Add Sibling</h4>
                </section>

                <!-- SECTION 7 -->
                <h4></h4>
                <section>
                        <h3>Emergency Contact <br><small style="font-size: small;letter-spacing: 1px;padding: 0">Other than the father and mother</small></h3>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    First Name
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-account-o"></i>
                                    <input type="text" class="form-control" id="emergency_firstname"
                                           name="emergency_firstname" value="{{ old('emergency_firstname') }}">
                                </div>
                            </div>
                            <div class="form-col">
                                <label for="">
                                    Last Name
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-account-o"></i>
                                    <input type="text" class="form-control" id="emergency_lastname"
                                           name="emergency_lastname" value="{{ old('emergency_lastname') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="">
                                    Mobile
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-smartphone"></i>
                                    <input type="number" class="form-control" name="emergency_contact_mobile" value="{{ old('emergency_contact_mobile') }}">
                                </div>
                            </div>
                            <div class="form-col">
                                <label for="">
                                    Relation to the Child
                                </label>
                                <div class="form-holder">
                                    <i class="zmdi zmdi-map"></i>
                                    <select name="emergency_relationtothechild"  class="form-control" id="emergency_relationtothechild">
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                        <option value="Grandfather">Grandmother</option>
                                        <option value="Stepfather">Stepfather</option>
                                        <option value="Aunt">Aunt</option>
                                        <option value="Uncle">Uncle</option>
                                        <option value="Cousin">Cousin</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <h4 class="h4 mb-2 text-left">You will be contacted soon.</h4>

                    </section>

                <!-- SECTION 8 -->
                <h4></h4>
                <section>
                    <h3>Upload Documents</h3>

                    <div class="form-row">

                        <div class="form-col">
                            <label for="">
                                Upload ID/Birth Certificate
                            </label>
                            <div class="form-holder">
                                <input type="file"  id="file" name="file" value="{{ old('file') }}">
                            </div>
                        </div>
                    </div>


                    {{--<h4 class="h4 mb-2 text-left"> You must fill all fields to be able to continue.</h4>--}}

                </section>

            </form>
		</div>

		<script src="{{ asset('application/js/jquery-3.3.1.min.js') }}"></script>

		<!-- JQUERY STEP -->
		<script src="{{ asset('application/js/jquery.steps.js') }}"></script>

		<!-- DATE-PICKER -->
		<script src="{{ asset('application/vendor/date-picker/js/datepicker.js') }}"></script>
		<script src="{{ asset('application/vendor/date-picker/js/datepicker.en.js') }}"></script>

		<script src="{{ asset('application/js/main.js') }}"></script>

        <script>
            $(function(){
                $("#wizard").steps({
                    headerTag: "h4",
                    bodyTag: "section",
                    transitionEffect: "fade",
                    enableAllSteps: true,
                    transitionEffectSpeed: 300,
                    labels: {
                        next: "Next",
                        previous: "Back"
                    },
                    onStepChanging: function (event, currentIndex, newIndex) {
                        if ( newIndex === 1 ) {
                            $('.steps ul').addClass('step-2');
                        } else {
                            $('.steps ul').removeClass('step-2');
                        }
                        if ( newIndex === 2 ) {
                            $('.steps ul').addClass('step-3');
                            var firstname = $('#firstname').val();
                            var lastname = $('#lastname').val();
                            var applyingforyear = $('#applyingforyear').val();
                            var applicant_phone = $('#applicant_phone').val();
                            var applicant_email = $('#applicant_email').val();
                            $.ajax({
                                url:'{{ route("form-start") }}',
                                method:'GET',
                                dataType: 'json',
                                data: {
                                    firstname:firstname,
                                    lastname:lastname,
                                    applyingforyear:applyingforyear,
                                    applicant_phone:applicant_phone,
                                    applicant_email:applicant_email,
                                },
                                success:function (data) {
                                    // alert(data.message)
                                },
                                error: function(data) {
                                    alert('something went wrong')
                                }
                            })
                            if($('#whoisapplying').is(':checked')){
                                var fathermobile = $('#applicant_phone').val();
                                var fatheremail = $('#applicant_email').val();
                                $('#fathermobile').val(fathermobile);
                                $('#fatheremail').val(fatheremail);
                            }else if('#whoisapplying2'){
                                var mothermobile = $('#applicant_phone').val();
                                var motheremail = $('#applicant_email').val();
                                $('#mothermobile').val(mothermobile);
                                $('#motheremail').val(motheremail);
                            }
                        } else {
                            $('.steps ul').removeClass('step-3');
                        }
                        if ( newIndex === 3 ) {
                            $('.steps ul').addClass('step-4');
                        } else {
                            $('.steps ul').removeClass('step-4');
                        }
                        if ( newIndex === 4 ) {
                            $('.steps ul').addClass('step-5');
                            $('#defaultCheck1').on('change',function () {
                                if($('#defaultCheck1').is(':checked')){
                                    var fatherstreet = $('#fatherstreet').val();
                                    var fatherflat = $('#fatherflat').val();
                                    var fathercity = $('#fathercity').val();
                                    var fatherstate = $('#fatherstate').val();
                                    var fatherpostal = $('#fatherpostal').val();
                                    $('#motherstreet').val(fatherstreet);
                                    $('#motherflat').val(fatherflat);
                                    $('#mothercity').val(fathercity);
                                    $('#motherstate').val(fatherstate);
                                    $('#motherpostal').val(fatherpostal);
                                }else{
                                    $('#motherstreet').val('');
                                    $('#motherflat').val('');
                                    $('#mothercity').val('');
                                    $('#motherstate').val('');
                                    $('#motherpostal').val('');
                                }
                            })
                        } else {
                            $('.steps ul').removeClass('step-5');
                        }
                        if ( newIndex === 5 ) {
                            $('.steps ul').addClass('step-6');
                        } else {
                            $('.steps ul').removeClass('step-6');
                        }
                        if ( newIndex === 6 ) {
                            $('.steps ul').addClass('step-7');
                        } else {
                            $('.steps ul').removeClass('step-7');
                        }
                        if ( newIndex === 7 ) {
                            $('.steps ul').addClass('step-8');
                        } else {
                            $('.steps ul').removeClass('step-8');
                        }
                        return true;
                    }
                });
                // Custom Button Jquery Steps
                $('.forward').click(function(){
                    $("#wizard").steps('next');
                });
                $('.backward').click(function(){
                    $("#wizard").steps('previous');
                });

                // Grid
                $('.grid .grid-item').click(function(){
                    $('.grid .grid-item').removeClass('active');
                    $(this).addClass('active');
                });
                // Click to see password
                $('.password i').click(function(){
                    if ( $('.password input').attr('type') === 'password' ) {
                        $(this).next().attr('type', 'text');
                    } else {
                        $('.password input').attr('type', 'password');
                    }
                });
                // Date Picker
                var dp1 = $('#dp1').datepicker().data('datepicker');
                dp1.selectDate( new Date( ));
                var dp1 = $('#dp2').datepicker().data('datepicker');
                dp1.selectDate( new Date( ));
                var dp1 = $('#dp3').datepicker().data('datepicker');
                dp1.selectDate( new Date( ));
                var dp1 = $('#dp4').datepicker().data('datepicker');
                dp1.selectDate( new Date( ));
                var dp1 = $('#dp5').datepicker().data('datepicker');
                dp1.selectDate( new Date( ));
                var dp1 = $('#dp6').datepicker().data('datepicker');
                dp1.selectDate( new Date( ));
                var dp1 = $('#dp7').datepicker().data('datepicker');
                dp1.selectDate( new Date( ));
                var dp1 = $('#dp8').datepicker().data('datepicker');
                dp1.selectDate( new Date( ));
                var dp1 = $('#dp9').datepicker().data('datepicker');
                dp1.selectDate( new Date( ));
                var dp1 = $('#dp10').datepicker().data('datepicker');
                dp1.selectDate( new Date( ));

            });
            function myFunction() {
                var number = 1;
                $('.title-siblings').each(function(){
                    number++;
                });
                if(number == 2){
                    var count = '2nd';
                }else if(number == 3){
                    count = '3rd';
                }else{
                    count = number+'th';
                }
                var html = '<h3 class="title-siblings">'+count+' Sibling</h3>\n' +
                    '<div class="form-row">\n' +
                    '     <div class="form-col">\n' +
                    '          <label for="">Name</label>\n' +
                    '          <div class="form-holder">\n' +
                    '               <i class="zmdi zmdi-account-o"></i>\n' +
                    '               <input type="text" class="form-control" name="siblings_names[]" >\n' +
                    '          </div>\n' +
                    '     </div>\n' +
                    '     <div class="form-col">\n' +
                    '          <label for="">Current School/Nursery</label>\n' +
                    '          <div class="form-holder">\n' +
                    '               <i class="zmdi zmdi-account-o"></i>\n' +
                    '               <input type="text" class="form-control" name="siblings_currentschools[]" >\n' +
                    '          </div>\n' +
                    '     </div>\n' +
                    '</div>\n' +
                    '<div class="form-row">\n' +
                    '     <div class="form-col">\n' +
                    '          <label for="">Age</label>\n' +
                    '          <div class="form-holder">\n' +
                    '               <i class="zmdi zmdi-account-o"></i>\n' +
                    '               <input type="number" class="form-control" name="siblings_ages[]" >\n' +
                    '          </div>\n' +
                    '     </div>\n' +
                    '     <div class="form-col">\n' +
                    '          <label for="">Grade Level</label>\n' +
                    '          <div class="form-holder">\n' +
                    '               <i class="zmdi zmdi-account-o"></i>\n' +
                    '               <input type="text" class="form-control" name="siblings_grades[]" >\n' +
                    '          </div>\n' +
                    '     </div>\n' +
                    '</div>';
                $(html).insertBefore( ".siblings-add" );
            }
        $( document ).ready(function() {
        $('a[href="#finish"]').click(function(){
            $("#wizard").submit();
        });
        });
        </script>

<!-- Template created and distributed by Colorlib -->
</body>
</html>
