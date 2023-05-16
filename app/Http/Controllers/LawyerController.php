<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\CaseStatus;
use App\Models\DonationReq;
use App\Models\HireStatus;
use Illuminate\Http\Request;
use App\Models\Lawyer;
use App\Models\LawyerDocuments;
use App\Models\LawyerStatus;
use App\Models\Likes;
use App\Models\Users;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

// use Illuminate\Support\Facades\Session;

class LawyerController extends Controller
{
    public function view()
    {
        return view('lawyers.index');
    }

    // public function dashboard()
    // {

    //     // $id = Session::get('id');
    //     // $lawyerCases = LawyerStatus::select('case_id')->whereIn('lawyer_id', $id)->pluck('case_id')->toArray();
    //     // $postArtical = Cases::whereNotIn('case_id', $lawyerCases)->get();
    //     $id = Session::get('id');
    //     $lawyerData = lawyerStatus::join('cases', 'lawyer_status.case_id', 'cases.case_id')
    //         ->select('lawyer_status.case_id', 'lawyer_status.lawyer_id', 'cases.case_id')
    //         ->whereNotIn('lawyer_status.lawyer_id', $id->pluck('lawyer_status.lawyer_id')->toArray())
    //         ->get();


    //     $postArtical = Cases::orderBy('updated_at', 'desc')->get();
    //     return view('lawyers.dashboard')->with('postArtical', $postArtical);

    // }

    public function dashboard()
    {
        $id = Session::get('id');
        $lawyerData = lawyerStatus::join('cases', 'lawyer_status.case_id', 'cases.case_id')
            ->select('lawyer_status.case_id', 'lawyer_status.lawyer_id', 'cases.case_id')
            ->whereNotIn('lawyer_status.lawyer_id', [$id])
            ->get();

        $postArtical = Cases::orderBy('updated_at', 'desc')->get();
        return view('lawyers.dashboard')->with('postArtical', $postArtical)->with('lawyerData', $lawyerData);

    }

    public function likePost($post_id, $lawyer_id)
    {
        $post = Likes::find($post_id);

        if ($post) {
            $post->likes += 1;
            $post->save();

            return redirect()->back()->with('success', 'Post liked successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to like the post. Post not found.');
        }
    }
    public function myAppliedCases()
    {
        $id = Session::get('id');
        $myCases = Cases::join('lawyer_status', 'cases.case_id', '=', 'lawyer_status.case_id')
            ->select('cases.case_id', 'cases.client_id', 'cases.client_name', 'cases.created_at', 'cases.case_details', 'cases.case_type', 'cases.case_title')
            ->where('lawyer_status.lawyer_id', $id)
            ->get()
            ->toArray();
        // dd($myCases);

        $hiredLawyers = HireStatus::join('user', 'hire_status.lawyer_id', '=', 'user.id')
            ->join('cases', 'hire_status.case_id', '=', 'cases.case_id')
            ->select('hire_status.lawyer_id', 'user.firstname as lawyer_name', 'cases.case_id', 'hire_status.created_at')
            ->where('hire_status.lawyer_id', $id)
            ->get()
            ->toArray();

        $status = '';
        foreach ($hiredLawyers as $hiredLawyer) {
            if (in_array($hiredLawyer['case_id'], array_column($myCases, 'case_id'))) {
                $status = 'You are a diamond';
            } else {
                $status = '';
            }
            $hiredLawyer['status'] = $status;
        }

        return view('lawyers.my_applied_cases', ['myCases' => $myCases, 'hiredLawyers' => $hiredLawyers]);
    }

    public function getLawyerCaseManagement()
    {
        $id = session()->get('id');
        $caseStatusData = CaseStatus::select('case_id', 'client_id', 'case_name', 'description', 'status', 'next_hearing')->where('lawyer_id', $id)->get()->toArray();
        return view('lawyers.case_status')->with('caseStatusData', $caseStatusData);
    }

    public function caseManagement(Request $request)
    {
        $client_id = $request->input('client_id');
        $caseId = $request->input('case_id');
        // return view('lawyers.case_management')->with('client_id', $client_id);
        return view('lawyers.case_management', ['case_id' => $caseId, 'client_id' => $client_id]);

    }

    public function documentManagement()
    {
        $existingDocument = LawyerDocuments::where('lawyer_id', Session::get('id'))->first();
        if ($existingDocument) {
            $message = 'You have already uploaded a document.';
            return view('lawyers.document_management', compact('message'));
        } else {
            $message = 'Please upload your document.';
            return view('lawyers.document_management', compact('message'));
        }
    }

    public function postDocuments(Request $request)
    {
        $existingDocument = LawyerDocuments::where('lawyer_id', Session::get('id'))->first();
        if ($existingDocument) {
            return redirect()->back()->with('error', 'You have already uploaded a document.');
        }

        $postDocument = new LawyerDocuments();
        $postDocument->lawyer_id = Session::get('id');
        $postDocument->lawyer_name = Session::get('firstname');
        $postDocument->email = Session::get('email');
        $postDocument->mobile = $request->mobile;
        $postDocument->photo = $request->photo;
        $postDocument->signature = $request->signature;
        $postDocument->degree = $request->degree;
        $postDocument->case_pdf = $request->case_pdf;
        $postDocument->save();

        return redirect()->route('dashboard')->with('success', 'Your Documents has been submitted successfully.');
    }

    public function chatBox()
    {
        return view('lawyers.chat_box');
    }

    public function billing()
    {
        return view('lawyers.billing');
    }

    public function profile()
    {
        $id = session()->get('id');
        $profileData = LawyerDocuments::select('lawyer_id', 'lawyer_name', 'email', 'mobile', 'photo', 'signature', 'degree', 'case_pdf')->where('lawyer_id', $id)->get()->toArray();
        return view('lawyers.profile')->with('profileData', $profileData);
    }

    public function postCaseStatus(Request $request)
    {
        //  dd($request->all());
        $postStatus = new CaseStatus();
        $postStatus->case_id = $request->case_id;
        $postStatus->lawyer_id = Session::get('id');
        $postStatus->case_name = $request->case_name;
        $postStatus->description = $request->description;
        $postStatus->status = $request->status;
        $postStatus->client_id = $request->client_id;
        $postStatus->next_hearing = $request->next_hearing;
        $postStatus->lawyer_name = $request->lawyer_name;
        $postStatus->save();
        return redirect()->route('myAppliedCases')->with('success', 'Your application has been submitted successfully.');
    }

    // public function lawyerStatus(Request $request)
    // {
    //     $lawyer_id = Session::get('id');
    //     $profileData = LawyerDocuments::select('lawyer_id', 'lawyer_name', 'email', 'mobile', 'photo', 'signature', 'degree', 'case_pdf')->where('lawyer_id', $lawyer_id)->get()->toArray();

    //     if (empty($profileData['photo']) || empty($profileData['signature']) || empty($profileData['degree']) || empty($profileData['case_pdf'])) {
    //         return redirect()->back()->with('error', 'Please upload all the required documents first.');
    //     }

    //     $case_id = $request->case_id;
    //     $existingApplication = LawyerStatus::where('case_id', $case_id)
    //                                          ->where('lawyer_id', $lawyer_id)
    //                                          ->first();

    //     if ($existingApplication) {
    //         return redirect()->back()->with('errorr', 'You have already applied for this case.');
    //     }

    //     $job = new LawyerStatus();
    //     $job->client_id = $request->client_id;
    //     $job->case_id = $request->case_id;
    //     $job->lawyer_id = $lawyer_id;
    //     $job->save();

    //     return redirect()->back()->with('success', 'Your application has been submitted successfully.');
    // }

    public function lawyerStatus(Request $request)
    {
        $lawyer_id = Session::get('id');
        $profileData = LawyerDocuments::select('lawyer_id', 'lawyer_name', 'email', 'mobile', 'photo', 'signature', 'degree', 'case_pdf')->where('lawyer_id', $lawyer_id)->first();

        if (empty($profileData) || empty($profileData->photo) || empty($profileData->signature) || empty($profileData->degree) || empty($profileData->case_pdf)) {
            return redirect()->route('documentManagement')->with('error', 'Please upload all the required documents first.');
        }

        $case_id = $request->case_id;
        $existingApplication = LawyerStatus::where('case_id', $case_id)
                                             ->where('lawyer_id', $lawyer_id)
                                             ->first();

        if ($existingApplication) {
            return redirect()->back()->with('error', 'You have already applied for this case.');
        }

        $job = new LawyerStatus();
        $job->client_id = $request->client_id;
        $job->case_id = $request->case_id;
        $job->lawyer_id = $lawyer_id;
        $job->save();

        return redirect()->back()->with('success', 'Your application has been submitted successfully.');
    }

    public function remove(Request $request)
    {
        // dd(lawyerStatus::where('id', $request->input('id'))->exists());
        $removeQuery = LawyerStatus::where('case_id', $request->input('id'))->delete();
        // return view('lawyers.my_applied_cases');
        if (!$removeQuery) {
            return redirect()->back()->with('error', 'You are not authorized to delete this record.');
        }
        return redirect()->back()->with('success', 'Record has been successfully deleted.');
    }

    public function viewListDonation()
    {
        $donationData = DonationReq::join('cases', 'donation_request.case_id', 'cases.case_id')
            ->select('donation_request.amount', 'donation_request.response', 'donation_request.updated_at', 'cases.case_id', 'cases.client_name', 'cases.case_title', 'cases.case_date', 'cases.case_details', 'cases.photo')
            ->where('donation_request.response', 'Need Donation')
            ->get();
        return view('lawyers.donation')->with('donationData', $donationData);
    }

    public function edit($id)
    {
        // dd($id);
        $editProfile = LawyerDocuments::where('lawyer_id', $id)->first()->toArray();
        // dd($job);
        return view('lawyers.edit_profile', compact('editProfile'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $updateProfile = LawyerDocuments::find($request->lawyer_id)->first();
        $updateProfile->lawyer_name = $request->lawyer_name;
        $updateProfile->email = $request->email;
        $updateProfile->update();
    }
}
