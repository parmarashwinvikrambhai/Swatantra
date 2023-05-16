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
            font-size: 25px;
            position: absolute;
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

        <p>Swatantra is a part of our Corporate Social Responsibility and a platform to serve the needy</p>
        <div class="all-contain">
            <h3>{{ $val['case_details']}}</h3>
            <p>{{ $val['case_type']}}</p>
            <p>{{ $val['case_title']}}</p>
        </div>
        <!-- <div class="social">
            <div class="like">
            <i class="fa fa-thumbs-up"><p>like</p></i>
            </div>
            <div class="comment">
            <i class="fa fa-comment"><p>Comment</p></i>
            </div>
            <div class="share">
            <i class="fa fa-share"><p>Share</p></i>
            </div>
        </div> -->
    </div>
  @endforeach
  </body>
</html>



