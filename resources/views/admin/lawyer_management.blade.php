@include('admin.header')
<!--main content start-->
<style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');
    *{
        padding: 0;
        margin: 0; 
        font-family: 'Quicksand', sans-serif;
    }
    body{
        background: white;
    }
    .boxes{
        position: relative;
        top: 5vh;
        width: 100%;  text-align: center;
    }
    .boxes .box{
        position: relative;
        display: inline-block;
        width: 28%;   height: 400px;
        background: #ff0;
        margin: 0 10px;
        overflow: hidden;
    }
    .boxes{
        position: relative;
        top: 16vh;
        width: 92%;
        text-align: center;
        position: relative;
        left: 170px;
    }
    .boxes .box img{
        position: relative;
        width: 100%;   height: 100%;
    }
    .boxes .box .content{
        position: absolute;
        bottom: -43%;   left: 0;
        height: 70%;  width: 100%;
        padding: 15px;
        box-sizing: border-box;
        background: #fff;
        text-align: left;
        transition: .9s;
    }
    .boxes .box:hover .content{
        bottom: 0;
    }
    .boxes .box .content a{
        text-decoration: none;  text-transform: uppercase;
        color: #fff;  background: #00bcd4;
        position: absolute;
        top: 0;  left: 0;
        transform: translateY(-100%);
        display: inline-block;
        padding: 5px 10px;
    }
    .boxes .box .content .row{
        position: relative;
        width: 100%;
    }
    .boxes .box .content .row .col{
        position: relative;
        display: inline-block;
        margin-right: 7px;
    }
    .boxes .box .content .row .col:last-child{
        float: right;
    }
    .boxes .box .content span{
        font-size: 1.2vw;
    }

    .boxes .box .content h1{
        font-size: 1.8vw;
        color: #00bcd4;
        margin: 10px 0
    }
    .boxes .box .content p{
        font-size: 1.1vw;
        line-height: 18px;
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

@include('admin.sidebar')
<link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

       <div class="boxes">
       @foreach($views as $lawyer)
                      <div class="box">
                          <img src="https://images.cdn1.stockunlimited.net/thumb450/po…f-a-lawyer-holding-a-file-and-smiling_2056111.jpg">
                          <div class="content">
                              <a href="#">Delete</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i>Name:</span>
                                    <span>{{ $lawyer['name']; }}</span>
                                  </div></br>
                                  <div class="col">
                                       <span><i class="fa fa-envelope" aria-hidden="true">Email:</i></span>
                                       <span>{{ $lawyer['email']; }}</span>
                                  </div></br>
                                  <div class="col">
                                       <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                       <span> <td>{{ $lawyer['phone']; }}</span>
                                  </div></br>
                                  <div class="col">
                                       <span><i class="fa fa-address-card" aria-hidden="true"></i></span>
                                       <span>{{ $lawyer['address']; }}</span>
                                  </div></br>
                              </div>
                              <h1><i class="icon-legal">{{ $lawyer['description']; }}</i></h1>
                              <p>
                              {{ $lawyer['description']; }} 
                              </p>
                              <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                          </div>
                      </div>
                      @endforeach
       </div>

<!--main content end-->



