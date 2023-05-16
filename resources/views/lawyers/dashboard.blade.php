@include('lawyers.header')
@include('lawyers.sidebar')
<style>
        .main {
            box-shadow: 0 0 5px rgba(0, 0, 0, .30);
            padding: 20px;
            position: relative;
            left: 10%;
            margin-top: 20px;
            width: 75%;
            margin-top: 15px;
            margin-left: 157px;
            background-color: #FFFFFF;
            margin-bottom: 36px;
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
            height: 224px;
        }

        .social {
            display: flex;
        }

        .comment,
        .share {
            margin-left: 30px;
        }

         td button{
            margin-left: 880px;
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
            alert("{{ session('error') }}");
        </script>
    @elseif(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @elseif(session('errorr'))
        <script>
            alert("{{ session('errorr') }}");
        </script>
@endif

@php
    $lawyer_id = session::get('id');
@endphp 

@foreach($postArtical as $val)

    <div class="main">
        <div class="image-with-text">
            <div class="name-pic">
                <img
                    src="http://127.0.0.1:8000/images/2.png">
                <span class="span-tags">{{ $val['client_name'] }}</span></br>
                <small>{{ date('d-M-Y', strtotime($val['updated_at'])) }}</small>
            </div>
        </div>

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, qui?</p>
        <div class="all-contain">
            <h3>{{ $val['case_details']}}</h3>
            <p>{{ $val['case_type']}}</p>
            <p>{{ $val['case_title']}}</p>
        </div>
        <form action="{{route('lawyerStatus', ['case_id' => $val['case_id']])}}" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="client_id" id="id" value="{{$val['client_id']}}">
            <td>
            <button class="btn btn-primary">Apply Now</button></a>
            </td>
        </form>
        <div class="social">
            <div class="like">
                <form action="{{ route('likePost', ['post_id' => $val['id']]) }}" method="post">
                    @csrf
                    <input type="hidden" name="lawyer_id" id="id" value="{{$lawyer_id}}">
                    <button type="submit" class="px-4 py-2 text-white bg-gray-600">
                        <i class="fa fa-thumbs-up"></i>
                    </button>
                </form>
            </div>
            <div class="comment">
            <form action="" method="post">
                @csrf
                <button class=" px-4 py-2 text-white bg-gray-600"><i class="fa fa-comment"></i>
                </button>
            </form>
            </div>
            <div class="share">
            <form action="" method="post">
                @csrf
                <button class=" px-4 py-2 text-white bg-gray-600"><i class="fa fa-share"></i>
                </button>
            </form>
            </div>
        </div>
    </div>
  @endforeach
  </body>
</html>