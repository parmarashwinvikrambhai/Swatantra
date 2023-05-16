<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cases;
use App\Models\CaseStatus;
use App\Models\DonationReq;
use App\Models\HireStatus;
use App\Models\Users;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function indexing()
    {
        $postArtical = Cases::all();
        return view('client.index')->with('postArtical', $postArtical);
    }

    public function practice()
    {
        return view('client/practice');
    }

    public function client()
    {
        return view('client/clients');
    }

    public function resources()
    {
        return view('client/resources');
    }

    public function registration()
    {
        return view('registration');
    }

    public function contact()
    {
        return view('client/contact');
    }

    public function case()
    {
        $postArtical = Cases::orderBy('updated_at', 'desc')->get();
        return view('client.case')->with('postArtical', $postArtical);
        // return view('client/case');
    }

    public function donation()
    {
        $donationData = DonationReq::join('cases', 'donation_request.case_id', 'cases.case_id')
            ->select('donation_request.amount', 'donation_request.response', 'donation_request.updated_at', 'cases.case_id', 'cases.client_name', 'cases.case_title', 'cases.case_date', 'cases.case_details', 'cases.photo')
            ->where('donation_request.response', 'Need Donation')
            ->get();
        return view('client/donation')->with('donationData', $donationData);
        // return view('client/donation');
    }

    public function getClients()
    {
        $postArtical = Cases::orderBy('updated_at', 'desc')->get();
        return view('clients.Dashboard')->with('postArtical', $postArtical);
        // return view('clients.dashboard' ,['fetch' => $postArtical]);
    }

    public function getCaseStatus()
    {
        $id = session()->get('id');
        $views = CaseStatus::select('id', 'lawyer_name', 'case_name', 'description', 'status', 'next_hearing', 'updated_at')->where("client_id", $id)->get()->toArray();
        return view('clients.case_status')->with('views', $views);
    }

    public function getArtical()
    {
        $userCasesCount = Cases::where('client_id', Session::get('id'))->count();

        if ($userCasesCount >= 2) {
            $message = 'Sorry,You have already uploaded two cases,
                        if you want to post another article,
                        then you have to remove one article first,
                        after that you can upload the post. LIMIT 2 CASES';
            return view('clients.post_artical', compact('message', 'userCasesCount'));
        } else {
            $message = 'Uplode case[Note : You Have Upload Only Two Cases]';
            return view('clients.post_artical', compact('message', 'userCasesCount'));
        }
    }

    public function removePost(Request $request)
    {
        // dd(lawyerStatus::where('id', $request->input('id'))->exists());
        $removeQuery = Cases::where('case_id', $request->input('id'))->delete();
        // return view('lawyers.my_applied_cases');
        if (!$removeQuery) {
            return redirect()->back()->with('error', 'You are not authorized to delete this record.');
        }
        return redirect()->back()->with('success', 'Record has been successfully deleted.');
    }

    public function getMyPost()
    {
        $id = session()->get('id');
        $getMyPosts = Cases::select('case_id', 'photo', 'client_name', 'created_at', 'case_details', 'case_type', 'case_title')->where("client_id", $id)->get()->toArray();

        $hiredLawyers = HireStatus::join('user', 'hire_status.client_id', '=', 'user.id')
            ->join('cases', 'hire_status.case_id', '=', 'cases.case_id')
            ->join('lawyers_documents', 'hire_status.lawyer_id' , 'lawyers_documents.lawyer_id')
            ->select('hire_status.client_id', 'hire_status.lawyer_id', 'cases.case_id', 'hire_status.created_at', 'lawyers_documents.lawyer_name','lawyers_documents.email', 'lawyers_documents.mobile')
            ->where('hire_status.client_id', $id)
            ->get()
            ->toArray();

        $status = '';
        foreach ($hiredLawyers as $hiredLawyer) {
            if (in_array($hiredLawyer['case_id'], array_column($getMyPosts, 'case_id'))) {
                $status = 'You are a diamond';
            } else {
                $status = '';
            }
            $hiredLawyer['status'] = $status;
        }
        return view('clients.my_post', ['getMyPosts' => $getMyPosts, 'hiredLawyers' => $hiredLawyers]);
    }

    public function getPaymentBilling()
    {
        return view('clients/payment');
    }

    public function getMessaging()
    {
        return view('clients/messaging');
    }

    public function getDocument()
    {
        $id = session()->get('id');
        // dd($id);
        $donationData = DonationReq::join('cases', 'donation_request.case_id', 'cases.case_id')
        ->select('donation_request.donate_id', 'donation_request.response', 'donation_request.amount', 'donation_request.updated_at', 'cases.case_id', 'cases.client_name', 'cases.case_title', 'cases.case_date', 'cases.case_details', 'cases.photo')
        ->where("donation_request.client_id", $id)->get()->toArray();
        return view('clients/donation_status')->with('donationData', $donationData);
    }

    public function agreeDonation($donationId)
    {
        DonationReq::where('donate_id', $donationId)->update(['response' => 'Need Donation']);

        return redirect()->route('getDocument');
    }

    public function selfPayment($donationId)
    {
        DonationReq::where('donate_id', $donationId)->update(['response' => 'Self Payment']);

        return redirect()->route('getDocument');
    }

    public function postArtical(Request $request)
    {
        // dd($request->all());
        $postArtical = new Cases();
        $postArtical->client_id = Session::get('id');
        $postArtical->client_name = Session::get('firstname');
        $postArtical->case_title = $request->case_title;
        $postArtical->case_type = $request->case_type;
        $postArtical->case_date = $request->case_date;
        $postArtical->case_details = $request->case_details;
        $postArtical->case_status = $request->case_status;
        $path = $request->file('photo')->store('images');
        $postArtical->photo = $path;

        $postArtical->signature = $request->signature;
        $postArtical->save();
        return redirect()->back();
    }

    public function payment()
    {
        return view('client.payment');
    }

    public function viewDonation()
    {
        $donationData = DonationReq::join('cases', 'donation_request.case_id', 'cases.case_id')
            ->select('donation_request.amount', 'donation_request.response', 'donation_request.updated_at', 'cases.case_id', 'cases.client_name', 'cases.case_title', 'cases.case_date', 'cases.case_details', 'cases.photo')
            ->where('donation_request.response', 'Need Donation')
            ->get();

        return view('clients.donation')->with('donationData', $donationData);
    }

    public function getProfile()
    {
        $id = session()->get('id');
        $profileData = Users::select('email', 'firstname')->where('id', $id)->get()->toArray();
        return view('clients.profile')->with('profileData', $profileData);
    }
}
