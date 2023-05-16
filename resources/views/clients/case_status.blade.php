@include('clients.header')
@include('clients.sidebar')
@include('clients.footer')
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
            color: #365899;
            font-size: 25px;
            position: absolute;
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

        thead {
          background-color: thistle;
          height: 75px;
        }

        tbody{
          height: 150px;
        }

        /* tr{
          height: 135px;
        } */
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
    <div class="main">
    <table>
    <thead>
        <tr>
            <th>Lawyer Name</th>
            <th>Case name</th>
            <th>Description</th>
            <th>status</th>
            <th>Next Hearing Date</th>
            <th>updated at</th>
        </tr>
    </thead>
    <tbody>
    @foreach($views as $val)
        <tr>
            <td>{{$val['lawyer_name']}}</td>
            <td>{{ $val['case_name'] }}</td>
            <td>{{ $val['description'] }}</td>
            <td>{{ $val['status'] }}</td>
            <td>{{ date('d-M-Y', strtotime($val['next_hearing'])) }}</td>
            <td>{{ date('d-M-Y', strtotime($val['updated_at'])) }}</td>
        </tr>
        @endforeach 
    </tbody>
</table>
    </div>
  </body>
</html>