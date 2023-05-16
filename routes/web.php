<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\http\Controllers\LawyerController;
use Illuminate\Support\Facades\Lang;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('welcome', function () {
//     return view('welcome');
// });

// Route::get('welcome', [AuthController::class, 'indexx'])->name('login');


// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/allusers', function () {
//     return view('manage-users');
// });

//auth
Route::any('login', [AuthController::class, 'indexx'])->name('login');
Route::post('logins', [AuthController::class, 'login'])->name('logindata');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');




// admin related
Route::get('/document', [UserController::class, 'document'])->name('document');


//this is for client related
Route::get('/', [ClientController::class, 'indexing'])->name('indexing');
Route::get('/practice', [ClientController::class, 'practice'])->name('practice');
Route::get('/client', [ClientController::class, 'client'])->name('client');
Route::get('/resources', [ClientController::class, 'resources'])->name('resources');
Route::get('/registration', [ClientController::class, 'registration'])->name('registrationss');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
Route::get('/case', [ClientController::class, 'case'])->name('case');
Route::get('/donation', [ClientController::class, 'donation'])->name('donation');
Route::get('/clients', [ClientController::class, 'getClients'])->name('getClients');
Route::get('/status', [ClientController::class, 'getCaseStatus'])->name('status');
Route::get('/user', [UserController::class, 'index']);
Route::get('/get-payment-billing', [ClientController::class, 'getPaymentBilling'])->name('getPaymentBilling');
Route::get('/Messaging', [ClientController::class, 'getMessaging'])->name('getMessaging');
Route::get('/Document', [ClientController::class, 'getDocument'])->name('getDocument');
Route::get('/get-artical', [ClientController::class, 'getArtical'])->name('getArtical');
Route::delete('/remove-post', [ClientController::class, 'removePost'])->name('removePost');
Route::get('/my-post',[ClientController::class, 'getMyPost'])->name('my-post');
Route::post('/post-artical', [ClientController::class, 'postArtical'])->name('postArtical');
Route::get('/fetch-artical', [ClientController::class, 'fetchArtical'])->name('fetchArtical');
Route::get('/payment',[ClientController::class,'payment'])->name('payment');
Route::get('/donation-clients',[ClientController::class,'viewDonation'])->name('ViewDonation');
Route::get('client-profile',[ClientController::class,'getProfile'])->name('getProfile');


Route::post('/client/agree-donation/{donationId}',[ClientController::class,'agreeDonation'])->name('donationResponseYes');
Route::post('/client/self-payment/{donationId}',[ClientController::class,'selfPayment'])->name('donationResponseNo');







Route::get('/registrations', [AuthController::class, 'index'])->name('registrations');
Route::post('register', [AuthController::class, 'register'])->name('registration');

Route::get('/viewuser', [UserController::class, 'index'])->name('viewuser');
Route::delete('/viewusers/{id}', [UserController::class, 'destroy'])->name('destroy');      

//lawyer
    // Route::get('/lawyers', [LawyerController::class, 'view'])->name('lawyers.index');
Route::get('/lawyerIndex', [LawyerController::class,'lawyerIndex'])->name('lawyerIndex');
Route::get('/lawyers/create', [LawyerController::class,'create'])->name('lawyers.create');
Route::post('/lawyers', [LawyerController::class,'store'])->name('lawyers.store');
Route::get('/lawyers/{id}/edit', [LawyerController::class,'edit'])->name('lawyers.edit');
Route::put('/lawyers/{id}',[LawyerController::class,'update'])->name('lawyers.update');
Route::delete('/lawyers/{id}',[LawyerController::class,'destroy'])->name('lawyers.destroy');
Route::post('/case-management', [LawyerController::class,'caseManagement'])->name('caseManagement');
Route::get('/view-case-status',[LawyerController::class,'getLawyerCaseManagement'])->name('getLawyerCaseManagement');
Route::get('/document-management', [LawyerController::class,'documentManagement'])->name('documentManagement');
Route::post('/post-documents',[LawyerController::class,'postDocuments'])->name('postDocuments');
Route::get('/chat-box', [LawyerController::class,'chatBox'])->name('chatBox');
Route::get('/billing', [LawyerController::class,'billing'])->name('billing');
Route::get('/profile', [LawyerController::class,'profile'])->name('profile');
Route::get('/dashboard', [LawyerController::class,'dashboard'])->name('dashboard');
Route::get('/applied-cases',[LawyerController::class,'myAppliedCases'])->name('myAppliedCases');
Route::post('/status', [LawyerController::class, 'postCaseStatus'])->name('postCaseStatus');
Route::any('/lawyer-status', [LawyerController::class, 'lawyerStatus'])->name('lawyerStatus');
Route::delete('/remove-article', [LawyerController::class, 'remove'])->name('remove_article');
// Route::get('/remove_job/{id}', [AppliedController::class, 'remove'])->name('remove_job');
Route::get('donation-page',[LawyerController::class,'viewListDonation'])->name('viewListDonation');
Route::get('/edit{id}', [LawyerController::class, 'edit'])->name('edit');
Route::post('/update_post', [LawyerController::class, 'update'])->name('postUpdate');
Route::post('/like',[LawyerController::class, 'likePost'])->name('likePost');





// Route::prefix('clients')->group(function () {
//     Route::get('/anuj', [ClientController::class, 'getCaseStatus'])->name('anuj');
// });

// Route::get('/users', 'UserController@index')->name('users.index');
// Route::get('/search',[LawyerController::class,'search'])->name('search');

Route::get('/get-admin-login',[AdminController::class,'index']);
Route::post('login-admin', [AdminController::class, 'loginAdmin'])->name('loginAdmin');
Route::get('/admin', [AdminController::class, 'getAdminIndex'])->name('getAdminIndex');
Route::get('/get-case-management', [AdminController::class,'getCaseManagement'])->name('getCaseManagement');
Route::delete('/delete-case', [AdminController::class, 'removeCase'])->name('removeCase');
Route::delete('delete-document',[AdminController::class,'removeDocumentData'])->name('removeDocumentData');
Route::get('/legal-status',[AdminController::class,'getLegalStatus'])->name('getLegalStatus');
Route::delete('/remove-status', [AdminController::class, 'remove'])->name('remove_status');
Route::get('/hire-lawyer',[AdminController::class, 'getHireLawyer'])->name('getHireLawyer');
Route::post('/Donation',[AdminController::class, 'getDonationReq'])->name('getDonationReq');
Route::post('/donation-req',[AdminController::class, 'donationReq'])->name('donationReq');
Route::get('/donate-report',[AdminController::class, 'getDonateReporting'])->name('getDonateReporting');
Route::delete('/delete-donation', [AdminController::class, 'removeDonation'])->name('removeDonation');
Route::get('/document-data',[AdminController::class,'getLawyerDocumentData'])->name('getLawyerDocumentData');
Route::post('/hire-lawyer/{id}',[AdminController::class,'hireLawyer'])->name('hireLawyer');
Route::delete('/remove-lawyer', [AdminController::class, 'removeHireLawyer'])->name('removeHireLawyer');

Route::get('/viewuser', [UserController::class, 'index'])->name('viewuser');
Route::delete('/viewusers/{id}', [UserController::class, 'destroy'])->name('destroy');


