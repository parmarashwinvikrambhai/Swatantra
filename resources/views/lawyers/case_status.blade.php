@include('lawyers.header')
@include('lawyers.sidebar')
@include('lawyers.footer')

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
    <div class="main">
    <table>
    <thead>
        <tr>
            <th>Case ID</th>
            <th>Client Id</th>
            <th>Case Name</th>
            <th>Description</th>    
            <th>Status</th>
            <th>Next-Hearing</th>
            <th>Update</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($caseStatusData as $caseStatus)
        <tr>
            <td>{{ $caseStatus['case_id'] }}</td>
            <td>{{ $caseStatus['client_id'] }}</td>
            <td>{{ $caseStatus['case_name'] }}</td>
            <td>{{ $caseStatus['description'] }}</td>
            <td>{{ $caseStatus['status'] }}</td>
            <td>{{ $caseStatus['next_hearing'] }}</td>
            <form action="" method="POST">
                <input type="hidden" name="client_id" id="id" value="">
            <td>
                <button type="Submit" class="btn btn-primary">Update</button>
            </td>
            </form>
            <form action="" method="POST">
            <input type="hidden" name="id" id="id" value="">
            <td>
                <button type="submit" class="btn btn-danger">Remove</button>
            </td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
  </body>
</html>