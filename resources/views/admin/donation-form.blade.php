@include('admin.header')
@include('admin.sidebar')
<style>
            * {
            margin: 0;
            padding: 0
        }

        html {
            height: 100%
        }

        p {
            color: grey
        }

        #heading {
            text-transform: uppercase;
            color: #673AB7;
            font-weight: normal
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 28px;
            margin-right: -659px;
            margin-left: 263px;
            margin-bottom: 33px;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        .form-card {
            text-align: left
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform input,
        #msform textarea {
            padding: 8px 15px 8px 15px;
            border: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 7px;
            margin-top: 13px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            background-color: rgb(131,177,235);
            font-size: 16px;
            letter-spacing: 1px;
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #673AB7;
            outline-width: 0
        }

        #msform .action-button {
            width: 100px;
            background: #236aee;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 0px 10px 5px;
            float: right
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #311B92
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px 10px 0px;
            float: right
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000
        }

        .card {
            z-index: 0;
            border: none;
            position: relative
        }

        .fs-title {
            
            font-size: 25px;
            color: #673AB7;
            margin-bottom: 13px;
            font-weight: normal;
            text-align: left;
            margin-top: 17px;
            margin-left: 19px;

        }

        .purple-text {
            color: #673AB7;
            font-weight: normal
        }

        .steps {
            font-size: 25px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right
        }

        .fieldlabels {
            color: gray;
            text-align: left;
            margin-left: 9px;
            margin-top: 10px;
        }

        #progressbar {
            margin-bottom: -3px;
            overflow: hidden;
            color: lightgrey;
            height: 78px;
            width: 400%;
        }

        #progressbar .active {
            color: #236aee;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f13e"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f030"
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: rgb(131,177,235);
        }

        .progress {
            height: 10px
        }

        .progress-bar {
            background-color: rgb(131,177,235);
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }
</style>
@if(session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @elseif(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
@endif
<?php
$case_id = isset($_POST['case_id']) ? $_POST['case_id'] : null;
$client_id = isset($_POST['client_id']) ? $_POST['client_id'] : null;
// dd($case_id);
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Sign Up Your User Account</h2>
                <p>Fill all form field to go to next step</p>
                <form action="{{ route('donationReq') }}" id="msform" role="form" method="POST">
                @csrf
                @method('POST')
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Need Amount</strong></li>
                        <!-- <li id="payment"><strong>Image</strong></li> -->
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <!-- <div class="col-7">
                                    <h2 class="fs-title">Account Information:</h2>
                                </div> -->
                                <div class="col-5">
                                    <h2 class="steps"></h2>
                                </div>
                            </div>
                              <input type="hidden" name="case_id" value="{{ $case_id }}">
                              <input type="hidden" name="client_id" value="{{ $client_id }}">
                            <label class="fieldlabels">Amount: *</label>
                              <input type="text" name="amount" placeholder="title of the case" />
                            <label class="fieldlabels">Client's Response for Donation: *</label>
                                <select name="response">
                                    <option value="Need Donation">Pending</option>
                                    <option value="Self Payment">No</option>
                                </select>
                        <input type="submit" name="submit" class="next action-button" value="Submit" /> 
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>