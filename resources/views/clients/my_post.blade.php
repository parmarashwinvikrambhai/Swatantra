@include('clients.header')
@include('clients.sidebar')
@include('clients.footer')
<style>
        .main {
            box-shadow: 0 0 5px rgba(0, 0, 0, .30);
            padding: 20px;
            position: relative;
            left: 10%;
            margin-top: 20px;
            width: 75%;
            margin-top: -41px;
            margin-left: 157px;
            background-color: #FFFFFF;
            margin-bottom: 74px;
        }

        .image-with-text {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            ;
            height: 80px;
        }

        .name-pic {
            position: relative;
            top: 20px;
            background: rgb(131,177,235);
        }

        .name-pic img {
            width: 50px;
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
            height: 244px;
        }

        .social {
            display: flex;
        }

        .comment,
        .share {
            margin-left: 30px;
        }

        table {
            margin-left: 0px;
            width: 972px;
            border: 2px;
        }

        table thead th {
            border: 1px solid;
            background: rgb(131,177,235);
        }

        table tbody tr td {
            border: 1px solid;
        }

        table tbody tr td strong {
            color: Green;
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
            @if(session('error'))
                <script>
                    alert("{{ session('error') }}");
                </script>
            @elseif(session('success'))
                <script>
                    alert("{{ session('success') }}");
                </script>
            @endif
<body>
@php
     $id = session::get('id');
    @endphp
@foreach($getMyPosts as $val)
    <div class="main">
        <div class="image-with-text">
            <div class="name-pic">
                <img
                src="http://127.0.0.1:8000/images/2.png">
                <span class="span-tags">{{ $val['client_name'] }}</span></br>
                <small>{{ date('d-M-Y', strtotime($val['created_at'])) }}</small>
                <!-- <img src="https://swatantra.globalgarner.com/static/media/Swatantra_logo.508b1ad5.svg" alt="">     -->
            </div>
        </div>

        <p>Swatantra is a part of our Corporate Social Responsibility and a platform to serve the needy</p>
        <div class="all-contain">
            <h3>{{ $val['case_details']}}</h3>
            <p>{{ $val['case_type']}}</p>
            <p>{{ $val['case_title']}}</p>
        </div>
        <table>
            <thead>
                <th>Lawyer-Name</th>
                <th>Lawyer-Email</th>
                <th>Lawyer-Mobile-Number</th>
                <th>Status</th>
            </thead>
            @foreach($hiredLawyers as $hiredLawyer)
            @if($hiredLawyer['case_id'] == $val['case_id'] && $hiredLawyer['client_id'] == $id)
            <tbody>
            <tr>
            <td>{{ $hiredLawyer['lawyer_name'] }}</td>
            <td>{{ $hiredLawyer['email'] }}</td>
            <td>{{ $hiredLawyer['mobile'] }}</td>
            <td>
                <strong>You got a lawyer</strong> 
            </td>
            </tr>
            </tbody>
            @endif
            @endforeach
        </table>
        <form action="{{ route('removePost')}}" method="POST">
            @csrf
            @method('delete')
            <input type="hidden" name="id" id="id" value="{{$val['case_id']}}">
            <td>
                <button type="submit" class="btn btn-danger">Remove</button>
            </td>
        </form>
    </div>
    @endforeach
  </body>
</html>



