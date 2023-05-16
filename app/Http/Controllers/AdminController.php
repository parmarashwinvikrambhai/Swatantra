<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\CaseStatus;
use App\Models\DonationReq;
use App\Models\HireStatus;
use App\Models\LawyerDocuments;
use App\Models\lawyerStatus;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $checkLogin = Users::select('password')->where('email', $request->email)->first();
        $postArtical = Cases::orderBy('updated_at', 'desc')->get();
        return view('admin.index')->with('postArtical', $postArtical);
    }
    public function getAdminIndex()
    {
        $postArtical = Cases::orderBy('updated_at', 'desc')->get();
        return view('admin.index')->with('postArtical', $postArtical);
    }

    public function getCaseManagement()
    {
        // $caseDetails = Cases::all();
        $caseDetails = Cases::orderBy('updated_at', 'desc')->get();
        return view('admin.case_management')->with('caseDetails', $caseDetails);
    }

    public function removeCase(Request $request)
    {
        $removeQuery = Cases::where('case_id', $request->input('id'))->delete();
        if (!$removeQuery) {
            return redirect()->back()->with('error', 'You are not authorized to delete this record.');
        }
        return redirect()->back()->with('success', 'Record has been successfully deleted.');
    }

    public function lawyerManagement()
    {
        return view('admin.');
    }

    // public function getLawyerDocumentData()
    // {
    //     $alreadyHire = HireStatus::join('lawyer_status', 'hire_status.case_id', 'lawyer_status.case_id');

    //     $lawyerData = LawyerStatus::join('lawyers_documents', 'lawyer_status.lawyer_id', 'lawyers_documents.lawyer_id')
    //         ->select('lawyer_status.case_id', 'lawyer_status.client_id', 'lawyers_documents.lawyer_id', 'lawyers_documents.lawyer_name', 'lawyers_documents.email', 'lawyers_documents.mobile', 'lawyers_documents.photo', 'lawyers_documents.signature', 'lawyers_documents.degree', 'lawyers_documents.case_pdf')
    //         ->whereNotIn('lawyer_status.case_id', $alreadyHire->pluck('lawyer_status.case_id')->toArray()) // Exclude case_ids from alreadyHire
    //         ->get();

    //     return view('admin.document', compact('lawyerData'));
    // }

    public function getLawyerDocumentData()
    {
        $alreadyHire = HireStatus::join('lawyer_status', 'hire_status.case_id', 'lawyer_status.case_id');

        $lawyerData = LawyerStatus::join('lawyers_documents', 'lawyer_status.lawyer_id', 'lawyers_documents.lawyer_id')
            ->select('lawyer_status.apply_id', 'lawyer_status.case_id', 'lawyer_status.client_id', 'lawyers_documents.lawyer_id', 'lawyers_documents.lawyer_name', 'lawyers_documents.email', 'lawyers_documents.mobile', 'lawyers_documents.photo', 'lawyers_documents.signature', 'lawyers_documents.degree', 'lawyers_documents.case_pdf')
            ->whereNotIn('lawyer_status.case_id', $alreadyHire->pluck('lawyer_status.case_id')->toArray()) // Exclude case_ids from alreadyHire
            ->get();

        return view('admin.document', compact('lawyerData'));
    }

    public function hireLawyer(Request $request, $lawyer_id)
    {
        $case_id = $request->case_id;

        $isHired = HireStatus::where('lawyer_id', $lawyer_id)
            ->where('case_id', $case_id)
            ->exists();

        if ($isHired) {
            return redirect()->back()->with('error', 'Already hired this lawyer for this case.');
        }
        $hiredLawyer = new HireStatus();
        $hiredLawyer->client_id = $request->client_id;
        $hiredLawyer->lawyer_id = $lawyer_id;
        $hiredLawyer->case_id = $request->case_id;
        $hiredLawyer->save();

        // $post = Post::find($request->case_id); // Assuming there is a model called Post that represents the post
        // if ($post) {
        //     $post->delete();
        // }

        return redirect()->back()->with('success', 'Lawyer hired successfully!');
    }

    public function removeDocumentData(Request $request)
    {
        $removeQuery = lawyerStatus::where('apply_id', $request->input('id'))->delete();
        if (!$removeQuery) {
            return redirect()->back()->with('error', 'You are not authorized to delete this record.');
        }
        return redirect()->back()->with('success', 'Record has been successfully deleted.');
    }

    public function getLegalStatus()
    {
        $legalStatus = CaseStatus::all();
        return view('admin.legal_status')->with('legalStatus', $legalStatus);
    }

    public function remove(Request $request)
    {
        $removeQuery = CaseStatus::where('client_id', $request->input('id'))->delete();
        if (!$removeQuery) {
            return redirect()->back()->with('error', 'You are not authorized to delete this record.');
        }
        return redirect()->back()->with('success', 'Record has been successfully deleted.');
    }

    public function getHireLawyer()
    {
        $hiredData = HireStatus::join('cases', 'hire_status.case_id', 'cases.case_id')
        ->select('hire_status.hire_id', 'hire_status.lawyer_id', 'hire_status.client_id', 'cases.case_id', 'cases.client_name', 'cases.case_title', 'cases.case_date', 'cases.case_details', 'cases.photo')
        ->get();
        return view('admin.hire-lawyer')->with('hiredData', $hiredData);
    }

    public function removeHireLawyer(Request $request)
    {
        $removeQuery = HireStatus::where('hire_id', $request->input('id'))->delete();
        if (!$removeQuery) {
            return redirect()->route('getHireLawyer')->with('error', 'You are not authorized to delete this record.');
        }
        return redirect()->route('getHireLawyer')->with('success', 'Record has been successfully deleted.');
    }

    public function getDonationReq(Request $request)
    {
        // dd($request->all());
        $client_id = $request->input('client_id');
        $case_id = $request->input('case_id');
        return view('admin.donation-form', ['case_id' => $case_id, 'client_id' => $client_id]);
    }

    public function donationReq(Request $request)
    {
        $donationRequest = new DonationReq();
        $donationRequest->case_id = $request->case_id;
        $donationRequest->client_id = $request->client_id;
        $donationRequest->amount = $request->amount;
        $donationRequest->response = $request->response;
        $donationRequest->save();

        $donateData = DonationReq::orderBy('updated_at', 'desc')->get();
        return view('admin.donate_report')->with('donateData', $donateData);
    }

    public function getDonateReporting()
    {
        $donateData = DonationReq::orderBy('updated_at', 'desc')->get();
        return view('admin.donate_report')->with('donateData', $donateData);
    }

    public function removeDonation(Request $request)
    {
        $removeQuery = DonationReq::where('case_id', $request->input('id'))->delete();
        if (!$removeQuery) {
            return redirect()->back()->with('error', 'You are not authorized to delete this record.');
        }
        return redirect()->back()->with('success', 'Record has been successfully deleted.');
    }
}
