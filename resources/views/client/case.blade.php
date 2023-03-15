@include('client/header')
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
<link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       

       <div class="boxes">
                      <div class="box">
                          <img src="https://img.fifa.com/image/upload/t_s2/ifp62ztph7flmwrovv5c.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div>
                      <div class="box">
                          <img src="https://i.guim.co.uk/img/media/92bf599eb73a7c2e79ddd040531de8dd7f7c2073/0_186_5568_3341/master/5568.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=b72bb640ae9c81d958e471b562154d10">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div>
                      <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div>
                      <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div> <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div> <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div> <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div>v <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div> <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div> <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div> <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div> <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div> <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div> <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div> <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div> <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div> <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div> <div class="box">
                          <img src="https://cdn.mos.cms.futurecdn.net/dTmN5T76osqhn4xnyj7nbG-320-80.jpg">
                          <div class="content">
                              <a href="#">Sports</a>
                              <div class="row">
                                  <div class="col">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span>Someone Famous</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                       <span>Dec 6,2021</span>
                                  </div>
                                  <div class="col">
                                       <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                                       <span>12</span>
                                  </div>
                              </div>
                              <h1>2020 Fifa World Cup Official Theme Song Released</h1>
                              <p>
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                   printer took a galley of type and scrambled it to make a type specimen book. It has 
                                   survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. 
                              </p>
                          </div>
                      </div>
                  </div>