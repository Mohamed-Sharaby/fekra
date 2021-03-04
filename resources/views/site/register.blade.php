@extends('site.layouts.layout')
@section('title','register')

@section('content')
			<!-- section begin -->
			<section id="subheader" data-bgimage="url(site/images/background/5.png) bottom">
				<div class="center-y relative text-center" data-scroll-speed="4">
					<div class="container">
						<div class="row">
							<div class="col-md-8 m-auto">
								<form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">
									<div class="col-md-12 text-center">
										<h1>تسجيل جديد</h1>
										<p>سجل الان من خلال الموقع بالمجان</p>
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

							<form name="contactForm" id="signup_form" class="form-border">

								<div class="field-set">
									<label for="type">نوع العضوية <span class="required-input">*</span></label>
									<select name="" id="type" class="form-control">
										<option value="1">عضوية عادية</option>
										<option value="2">متطوع</option>
									</select>
								</div>

								<div class="field-set">
									<label for="date">تاريخ الميلاد <span class="required-input">*</span></label>
									<input type="date" id="date" class="form-control" placeholder="تاريخ الميلاد" />
								</div>

								<div class="field-set">
									<label for="name">الاسم بالكامل <span class="required-input">*</span></label>
									<input type="text" id="name" class="form-control" placeholder="الاسم بالكامل" />
								</div>


								<div class="field-set">
									<label for="identity">رقم الهوية <span class="required-input">*</span></label>
									<input type="text" id="identity" class="form-control" placeholder="رقم الهوية" />
								</div>


								<div class="field-set">
									<label for="phone">الجوال <span class="required-input">*</span></label>
									<input type="text" id="phone" class="form-control" placeholder="الجوال" />
								</div>

								<div class="field-set">
									<label for="email">البريد الإلكتروني </label>
									<input type="text" id="email" class="form-control" placeholder="البريد الإلكتروني" />
								</div>

								<div class="field-set">
									<label for="password">كلمة المرور <span class="required-input">*</span></label>
									<input type="password" id="password" class="form-control" placeholder="كلمة المرور" />
								</div>

								<div class="field-set">
									<label for="re-password">تأكيد كلمة المرور <span class="required-input">*</span></label>
									<input type="password" id="re-password" class="form-control" placeholder="تأكيد كلمة المرور" />
								</div>


								<div class="spacer-half"></div>

								<div id="submit">
									<input type="submit" id="send_message" value="تسجيل دخول" class="btn btn-custom" />
								</div>
								<div class="col-12 flexy-two-links">
									<a href="{{url('login')}}">هل لديك حساب بالفعل؟ تسجيل دخول</a>
								</div>
							</form>
						</div>
						<div class="spacer-double"></div>
					</div>
				</div>
			</section>
@endsection
