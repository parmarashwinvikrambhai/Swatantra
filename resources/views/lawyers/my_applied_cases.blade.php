@include('lawyers.header')
@include('lawyers.sidebar')
<style>
        .main {
            box-shadow: 0 0 5px rgba(0, 0, 0, .30);
            ;
            padding: 20px;
            position: relative;
            left: 10%;
            margin-top: 20px;
            width: 75%;
            margin-top: 10px;
            margin-left: 157px;
            background-color: #FFFFFF;
        }

        .image-with-text {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            ;
            height: 80px;
        }

        .name-pic {
            position: relative;
            top: 20px;
            background: rgb(240, 188, 180);
        }

        .name-pic img {
            width: 40px;
            height: 40px;
        }

        .span-tags {
            color: #ffffff;
            font-size: 21px;
            position: absolute;
            margin-top: 2px;
        }

        .all-contain {
            padding: 10px;
            border-bottom: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black;
            height: 400px;
        }

        .social {
            display: flex;
        }

        table, th, td {
          border: 1px solid;
        }

        strong {
            background-color: green;
            color: white;
        }


        .comment,
        .share {
            margin-left: 30px;
        }
    </style>
</br></br></br></br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(session('error'))
    <script>
        alert("{{ session('error') }}", "color: red");
    </script>
@elseif(session('success'))
    <script>
        alert("{{ session('success') }}", "color: green");
    </script>
@endif
@php
    $id = session::get('id');
@endphp
<div class="main">
<table>
    <thead>
        <tr>
            <th>Case ID</th>
            <th>Client Name</th>
            <th>Created At</th>
            <th>Case Details</th>
            <th>Case Type</th>
            <th>Case Title</th>
            <th>Status</th>
            <th>Upload Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($myCases as $case)
        <tr>
            <td>{{ $case['case_id'] }}</td>
            <td>{{ $case['client_name'] }}</td>
            <td>{{ date('d-M-Y', strtotime($case['created_at'])) }}</td>
            <td>{{ $case['case_details'] }}</td>
            <td>{{ $case['case_type'] }}</td>
            <td>{{ $case['case_title'] }}</td>
            <td>
                @foreach($hiredLawyers as $hiredLawyer)
                    @if($hiredLawyer['case_id'] === $case['case_id'] && $hiredLawyer['lawyer_id'] === $id)
                       <strong>You are a Hire</strong> 
                    @endif
                @endforeach
            </td>
            <form action="{{ route('caseManagement') }}" method="POST">
                @csrf
                @method('POST')
                    <input type="hidden" name="case_id" id="id" value="{{ $case['case_id'] }}">
                    <input type="hidden" name="client_id" id="id" value="{{ $case['client_id'] }}">
                <td>
                @foreach($hiredLawyers as $hiredLawyer)
                    @if($hiredLawyer['case_id'] === $case['case_id'] && $hiredLawyer['lawyer_id'] === $id)
                        <button type="Submit" class="btn btn-primary">Upload</button>
                    @endif
                @endforeach
                </td>
            </form>
            <form action="{{ route('remove_article')}}" method="POST">
                @csrf
                @method('delete')
                    <input type="hidden" name="id" id="id" value="{{$case['case_id']}}">
                <td>
                    <button type="submit" class="btn btn-danger">Remove</button>
                </td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
</td>
  
</td>
    </div>
  </body>
</html>


