@include('client/header')
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- banner-starts -->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>	
								<div class="banner-text">
									<h2>“GLOBAL GARNER IS WORLD’S 1st  AND ONLY POST PAID SALES SERVICE PROVIDER!”</h2>
									<p>GG is world’s 1st and only post paid sales company with Zero Rental, which helps the vendor to sell their products and services with our advanced digital and on ground sales support also providing best offer to their customers of 100% cashback with no upper limit.Which makes us the first choice for any vendor as we first perform and then seek for our commission only, Nothing in advance.</p>
									<a class="hvr-shutter-in-horizontal" href="#">Read More</a>
								</div>
							</li>
							<li>	
								<div class="banner-text">
									<h2>“MOST SECURED WAY TO SOCIALISE AND EARN !”</h2>
									<p>Global garner is also world’s 1st and only social media platform on which all users are verified through Mobile, PAN & Adhaar which makes it the safest place to socialize and above all now when you Socialise On GG- RELATIONS You Earn Too</p>
									<a class="hvr-shutter-in-horizontal" href="#">Read More</a>
								</div>
							<li>	
								<div class="banner-text">
									<h2>“AN EXPERT LEGAL WE OFFER OUR CLIENTS  ADVICE!”</h2>
									<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
									<a class="hvr-shutter-in-horizontal" href="#">Read More</a>
								</div>
							</li>
						</ul>
					</div>
				</section>
			
							<!-- FlexSlider -->
									  <script defer="" src="js1/jquery.flexslider.js"></script>
									  <script type="text/javascript">
										$(function(){
										 
										});
										$(window).load(function(){
										  $('.flexslider').flexslider({
											animation: "slide",
											start: function(slider){
											  $('body').removeClass('loading');
											}
										  });
										});
									  </script>
								<!-- FlexSlider -->
			</div>
		</div>
	</div>
	<!--banner-end-->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="col-md-8 welcome-left">
				<h3>Welcome</h3>
				<div class="col-md-6 wel-lft">
					<img src="images1/20.jpg" alt=" " class="img-responsive">
				</div>
				<div class="col-md-6 wel-rgt">
					<p> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'</p>
					<p>Will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes</p>
					<a class="hvr-shutter-in-horizontal" href="#">Read More</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 welcome-right">
				<h3>Areas Of Practice</h3>
					<ul>
						<li><a href="#"><span></span>Social Security Law</a></li>
						<li><a href="#"><span></span>Real Property Law </a></li>
						<li><a href="#"><span></span>Criminal Law</a></li>
						<li><a href="#"><span></span>intellectual property </a></li>
						<li><a href="#"><span></span>Serious Personal Injury Cases </a></li>
						<li><a href="#"><span></span>Immigration Law </a></li>
						
					</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- welcome -->
	<!-- cases -->
	<div class="cases">
		<div class="container">
			<div class="col-md-4 cases-left">
				<h3>Experience</h3>
				<img src="images1/11.jpg" alt=" " class="img-responsive">
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				<a class="hvr-shutter-in-horizontal" href="#">Read More</a>
			</div>
			<div class="col-md-4 cases-left">
				<h3>Resources</h3>
				<img src="images1/9.jpg" alt=" " class="img-responsive">
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				<a class="hvr-shutter-in-horizontal" href="#">Read More</a>
			</div>
			<div class="col-md-4 cases-left">
				<h3>Cases</h3>
				<img src="images1/6.jpg" alt=" " class="img-responsive">
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				<a class="hvr-shutter-in-horizontal" href="#">Read More</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- cases-end -->
	<!-- news -->
	<div class="news">
		<div class="container">
			<h3>News & Events</h3>
			<div class="col-md-6 news-left">
				<div class="col-md-6 new-lft">
					<img src="images1/10.jpg" alt=" " class="img-responsive">
				</div>
				<div class="col-md-6 new-rgt">
					<h5> [10-08-2015]</h5>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
				</div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-6 news-left">
				<div class="col-md-6 new-lft">
					<img src="images1/7.jpg" alt=" " class="img-responsive">
				</div>
				<div class="col-md-6 new-rgt">
					<h5> [10-08-2015]</h5>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</P>
				</div>
					<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- news-end -->
@include('client/footer');	

	