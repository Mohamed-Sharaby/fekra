@extends('site.layouts.layout')
@section('title','single blog')

@section('content')
			<!-- section begin -->
			<section id="subheader">
				<div class="center-y relative text-center">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<form action="blank.php" class="row" id="form_subscribe" method="post" name="myForm">
									<div class="col-md-12 text-center">
										<h1>ساعات قليلة وننطلق  , وش تتوقعون مجهزين لكم</h1>
									</div>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section close -->

			<!-- section begin -->
			<section class="no-top">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="blog-read">
								<img alt="" src="images/news/1.jpg" class="img-fullwidth">
								<div class="post-text">
									<p>
										بات الان بضع ساعات قليلة فقط تفصلنا عن انطلاق مفاجئة كبيرة , ترقبونا بالانتظاااار ... دمتم سالمين
									</p>

									<span class="post-date">20 فبراير 2021</span>

								</div>

							</div>


						</div>

						<div id="sidebar" class="col-md-4">
							<div class="widget widget-post">
								<h4>أحدث المنشورات</h4>
								<div class="small-border"></div>
								<ul>
									<li><span class="date">20 فبراير</span><a href="single-blog.html">ساعات قليلة وننطلق  , وش تتوقعون مجهزين لكم</a></li>
								</ul>
							</div>

							<div class="widget widget_tags">
								<h4>الكلمات الدلالية</h4>
								<div class="small-border"></div>
								<ul>
									<li><a href="#link">انطلاقة</a></li>
									<li><a href="#link">الحدث الأهم</a></li>
									<li><a href="#link">فبراير</a></li>

								</ul>
							</div>

						</div>
					</div>
				</div>
			</section>
@endsection
