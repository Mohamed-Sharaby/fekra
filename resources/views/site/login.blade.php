@extends('site.layouts.layout')
@section('title','login')

@section('content')
			<!-- section begin -->
			<section id="subheader" data-bgimage="url(site/images/background/5.png) bottom">
				<div class="center-y relative text-center" data-scroll-speed="4">
					<div class="container">
						<div class="row">
							<div class="col-md-8 m-auto">
								<form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">
									<div class="col-md-12 text-center">
										<h1>تسجيل الدخول</h1>
										<p>ادخل بياناتك وتابع عضويتك الان</p>
									</div>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section close -->


			<section class="no-top" data-bgimage="url(site/images/background/3.png) top">
				<div class="container">
					<div class="row">

						<div class="col-md-8 m-auto mb-sm-30">

							<form name="contactForm" id="contact_form" action="index.html" class="form-border">
								<div class="field-set">
									<input type="text" name="phone" id="phone" class="form-control" placeholder="الجوال" />
								</div>
								<div class="field-set">
									<input type="password" name="password" id="phone" class="form-control" placeholder="كلمة المرور" />
								</div>


								<div class="spacer-half"></div>

								<div id="submit">
									<input type="submit" id="send_message" value="تسجيل دخول" class="btn btn-custom" />
								</div>
								<div class="col-12 flexy-two-links">
									<a href="{{url('register')}}">ليس لديك حساب؟ سجل الان</a>
									<a href="{{url('forget')}}">هل نسيت كلمة المرور</a>
								</div>
							</form>
						</div>
						<div class="spacer-double"></div>
					</div>
				</div>
			</section>
		@endsection
