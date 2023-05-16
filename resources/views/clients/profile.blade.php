@include('clients.header')
@include('clients.sidebar')

<style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      list-style: none;
      /* font-family: 'Josefin Sans', sans-serif; */
    }

    body{
      background-color: #f3f3f3;
    }

    .wrapper{
        position: absolute;
        top: 43%;
        left: 59%;
        transform: translate(-50%,-50%);
        width: 1061px;
        display: flex;
        height: 535px;
      box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
    }

    .wrapper .left{
      width: 35%;
      background: linear-gradient(to right,rgb(131,177,235),rgb(131,177,235));
      padding: 30px 25px;
      border-top-left-radius: 5px;
      border-bottom-left-radius: 5px;
      text-align: center;
      color: #fff;
    }

    .wrapper .left img{
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .wrapper .left h4{
      margin-bottom: 10px;
    }

    .wrapper .left p{
      font-size: 12px;
    }

    .wrapper .right{
      width: 65%;
      background: #fff;
      padding: 30px 25px;
      border-top-right-radius: 5px;
      border-bottom-right-radius: 5px;
    }

    .wrapper .right .info,
    .wrapper .right .projects{
      margin-bottom: 25px;
    }

    .wrapper .right .info h3,
    .wrapper .right .projects h3{
        margin-bottom: 15px;
        padding-bottom: 5px;
        border-bottom: 1px solid #e0e0e0;
        color: #353c4e;
      text-transform: uppercase;
      letter-spacing: 5px;
    }

    .wrapper .right .info_data,
    .wrapper .right .projects_data{
      display: flex;
      justify-content: space-between;
    }

    .wrapper .right .info_data .data,
    .wrapper .right .projects_data .data{
      width: 45%;
    }

    .wrapper .right .info_data .data h4,
    .wrapper .right .projects_data .data h4{
        color: #353c4e;
        margin-bottom: 5px;
    }

    .wrapper .right .info_data .data p,
    .wrapper .right .projects_data .data p{
      font-size: 13px;
      margin-bottom: 10px;
      color: #919aa3;
    }

    .wrapper .social_media ul{
      display: flex;
    }

    .wrapper .social_media ul li{
      width: 45px;
      height: 45px;
      background: linear-gradient(to right,#ee82ee,#01dbdf);
      margin-right: 10px;
      border-radius: 5px;
      text-align: center;
      line-height: 45px;
    }

    .wrapper .social_media ul li a{
      color :#fff;
      display: block;
      font-size: 18px;
    }
</style>
<script src="https://kit.fontawesome.com/b99e675b6e.js">
</script>

@foreach($profileData as $profile)
<div class="wrapper">
    <div class="left">
        <img src="http://127.0.0.1:8000/images/2.png" alt="user" width="100">
        <p>Name</p>
        <h4>{{$profile['firstname']}}</h4>
         <!-- <p>UI Developer</p> -->
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <h4><b bgcolor="tan">{{$profile['email']}}</b></h4>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
                    <h3></h3>
              </div>
            </div>
        </div>
      
      <div class="projects">
            <h3>Personal Information</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>upload</h4>
                    <p>Your Photo:</p><button class="btn"><i class="fa fa-download"></i></button></br>
                    <p>Your Signature:</p><button class="btn"><i class="fa fa-download"></i></button>
                 </div>
                 <div class="data">
                 <h4>Legal Documents</h4>
                 <p>Your Degree:</p><button class="btn"><i class="fa fa-download"></i></button>
                    <p>Your Case Certificate</p><button class="btn"><i class="fa fa-download"></i></button>
              </div>
            </div>
        </div>
      
        <div class="social_media">
            <ul>
            <h3>
                
                    <button class="fa fa-pencil-square-o">Edit</button>
                </a>
            </h3>
              <!-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li> -->
          </ul>
      </div>
    </div>
</div>
@endforeach