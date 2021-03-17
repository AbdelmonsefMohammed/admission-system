<?php

namespace App\Http\Controllers;

use App\Country;
use App\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissions = Admission::orderBy('updated_at','desc');
        $new_count    = Admission::where('status','new')->get();

        $accepted_count  = Admission::where('status','accepted')->get();
        $scheduled_count = Admission::where('status','scedualed_for_appointment')->get();
        $rejected_count  = Admission::where('status','rejected')->get();
        if(request()->status)
        {
            $admissions = $admissions->where('status', request()->status);
        }
        if(request()->applyingforyear)
        {
            $admissions = $admissions->where('applyingforyear',request()->applyingforyear);
        }
        if(request()->from && request()->to)
        {
            $admissions = $admissions->whereBetween('created_at', [request()->from, request()->to]);
        }

        $admissions = $admissions->get();

        return view('admissions.index',compact('admissions',
                                               'new_count',
                                               'accepted_count',
                                               'scheduled_count',
                                               'rejected_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('admissions.create',compact('countries'));
    }

    public function ajaxform(Request $request){
        if ($request->ajax()) {
            $firstname = $request->get('firstname');
            $lastname = $request->get('lastname');
            $applyingforyear = $request->get('applyingforyear');
            $applicant_phone = $request->get('applicant_phone');
            $applicant_email = $request->get('applicant_email');

             $count = Admission::where('firstname', $firstname)
                                ->where('applicant_phone',$applicant_phone)
                                ->where('applicant_email', $applicant_email)->count();

            $data = array(
                'firstname'         => $firstname,
                'lastname'          => $lastname,
                'applyingforyear'   => $applyingforyear,
                'applicant_phone'   => $applicant_phone,
                'applicant_email'   => $applicant_email,
                'full'              => 0,
            );

            if($count > 0){

            }else{
                Admission::create($data);
            }
            
            $message = 'Something went wrong...';
            $success = 'Success';
            $data = array(
                'message' => $success,
            ); 
            return json_encode($data);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $admission = Admission::where('firstname', $request->firstname)
                            ->where('applicant_phone',$request->applicant_phone)
                            ->where('applicant_email', $request->applicant_email)->first();

        $this->validate($request, Admission::rules($update = true, $admission->id));

        $siblings_names         = implode('/',$request->siblings_names);
        $siblings_currentschools= implode('/',$request->siblings_currentschools);
        $siblings_ages          = implode('/',$request->siblings_ages);
        $siblings_grades        = implode('/',$request->siblings_grades);
        if(request()->hasFile('file'))
        {
            $file = request()->file('file');
            $file_name = time() . $file->getClientOriginalName();
            $file->storeAs('/',"/admissions/files/{$file_name}", '');
            $request->request->add(['filepath' => "/storage/admissions/files/"]);
        }else{
            $request->request->add(['filename' => null]);
        }
        
        $request->request->add(['siblings_names'          => $siblings_names,
                                'siblings_currentschools' => $siblings_currentschools,
                                'siblings_ages'           => $siblings_ages,
                                'siblings_grades'         => $siblings_grades,
                                'full'                    => 1,
                                'filename'                => $file_name
        ]);
        $data = $request->except('_token','whoisapplying','file');
        if (isset($admission)){
            Admission::whereId($admission->id)->update($data);
        }else{
            Admission::create($data);
        }

        return redirect()->back()->with('success','Thanks, You will be contacted soon.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admission = Admission::FindOrfail($id);

        $admission['siblings_names']          = explode('/',$admission['siblings_names']);
        $admission['siblings_currentschools'] = explode('/',$admission['siblings_currentschools']);
        $admission['siblings_grades']         = explode('/',$admission['siblings_grades']);
        $admission['siblings_ages']           = explode('/',$admission['siblings_ages']);
        return view('admissions.show',compact('admission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        //
    }
}
