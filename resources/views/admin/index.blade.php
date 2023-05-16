@include('admin.header')
@include('admin.sidebar')
<style>
        .main {
            box-shadow: 0 0 5px rgba(0, 0, 0, .30);
            padding: 20px;
            position: relative;
            left: 10%;
            margin-top: 20px;
            width: 75%;
            margin-top: 24px;
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
@if(session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @elseif(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
@endif
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

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, qui?</p>
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

<!--main content end-->

<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });

	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}

		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},

			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});


	});
	</script>
    <!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',

			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
</script>
	<!-- //calendar -->
</body>
</html>
