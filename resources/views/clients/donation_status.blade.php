@include('clients.header')
@include('clients.sidebar')
@include('clients.footer')
<style>
    #grid-container {
        border-collapse: collapse;
    margin: auto;
    width: 100%;
    max-width: 1085px;
    border: 1px solid black;
    margin-right: 12px;
    }
    #card-hdr {
    background-color: #dcfce7;
    width: 100%;
    font-size: 20px;
    color: #166534;
    }

    #hdr-start {
    text-align: right;
    }

    thead th,
    tbody td {
    border: none;
    padding: 3px;
    }

    thead th {
    text-align: right;
    white-space: nowrap;
    }

    tbody td:first-child {
    text-align: left;
    white-space: wrap;
    }

    tbody td:last-child {
    text-align: left;
    white-space: wrap;
    }

    tr:not(:first-child) td {
    word-wrap: break-word;
    white-space: normal;
    }

    h4{
        color: red;
    }

    b img{  
        height: 37px;
        width: 52px;
    }

    tr td input {
        align: center;
    }

    @media (max-width: 600px) {
    /* On screens smaller than 600px, shrink the table to fit */
    table {
        font-size: 12px;
    }
    }
</style>
<style>
        .progress {
    margin:20px auto;
    padding:0;
    width:90%;
    height:30px;
    overflow:hidden;
    background:#e5e5e5;
    border-radius:6px;
    }

    .barrrr {
        position:relative;
    float:left;
    min-width:1%;
    height:100%;
    background:cornflowerblue;
    }

    .percent {
        position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    margin:0;
    font-family:tahoma,arial,helvetica;
    font-size:12px;
    color:white;
    }

    td img{
      height: 25px;
    width: 25px;
    }
</style>
</br>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
@foreach($donationData as $donation)  
<?php
// dd($donationData);
?>
<div id="grid-container">
  <table id="card-hdr">
    <tr>
      <td><b><img src="http://127.0.0.1:8000/images/2.png">{{($donation['client_name'])}}</b></td>   
      <td id="hdr-start">{{ date('d-M-Y', strtotime($donation['updated_at']))}}</td>
    </tr>
  </table>
  <table>
    <tbody>
      <tr>
        <td><strong>Amount:</strong></td>
        <td><h4>{{ $donation['amount'] }}</h4></td>
      </tr>
      <tr>
        <td><strong>Case Title:</strong></td>
        <td>{{ $donation['case_title'] }}</td>
      </tr>
      <tr>
        <td><strong>Case Date:</strong></td>
        <td>{{ $donation['case_date'] }}</td>
      </tr>
      <tr>
        <td><strong>Case Details:</strong></td>
        <td>{{ $donation['case_details'] }}</td>
      </tr>
      <tr>
        <td><strong>Payment Type:</strong></td>
        <td><img src="https://icons.iconarchive.com/icons/paomedia/small-n-flat/256/sign-check-icon.png">{{ $donation['response'] }}</img></td>
      </tr>
      <tr>
      <td>
    @if($donation['response'] === 'Self Payment')
        <form action="{{ route('donationResponseYes', $donation['donate_id']) }}" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="response" value="yes">
            <button type="submit" class="btn btn-primary">Agree for Donation</button>
        </form>
    @endif
      </td>
        <td>
    @if($donation['response'] === 'Need Donation')
            <form action="{{ route('donationResponseNo', $donation['donate_id']) }}" method="POST">
                @csrf
                @method('POST')
                <input type="hidden" name="response" value="self_payment">
                <button type="submit" class="btn btn-primary">Self Payment</button>
            </form>
      @endif
        </td>
      </tr>
    <div class="progress">  
	    <div class="barrrr" style="width:35%">  
		    <p class="percent"> 35% </p>
	    </div>
    </div>
    </tbody>
  </table>
</div>    
</br>
@endforeach