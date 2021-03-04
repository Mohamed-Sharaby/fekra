@extends('site.layouts.layout')
@section('title','اتصل بنا')

@section('content')
			<!-- section begin -->
			<section id="subheader" data-bgimage="url(images/background/5.png) bottom">
				<div class="center-y relative text-center" data-scroll-speed="4">
					<div class="container">
						<div class="row">
							<div class="col-md-8 m-auto">
								<form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">
									<div class="col-md-12 text-center">
										<h1>اتصل بنا</h1>
										<p>يسعدنا تلقي رسائلكم فى أى وقت</p>
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
							<h3>هل لديك سؤال ما؟ لاتتردد فى طرحه الان!</h3>

							<form name="contactForm" id="contact_form" class="form-border">
								<div class="field-set">
									<input type="text" name="name" id="name" class="form-control" placeholder="الإسم" />
								</div>

								<div class="field-set">
									<input type="email" name="email" id="email" class="form-control" placeholder="البريد الإلكتروني" />
								</div>

								<div class="field-set">
									<input type="text" name="phone" id="phone" class="form-control" placeholder="الجوال" />
								</div>

								<div class="field-set">
									<textarea name="message" id="message" class="form-control" placeholder="اكتب رسالتك هنا ..."></textarea>
								</div>

								<div class="spacer-half"></div>

								<div id="submit">
									<input type="submit" id="send_message" value="ارسل الان" class="btn btn-custom" />
								</div>
							</form>
						</div>

						<div class="spacer-double"></div>

						<div class="col-md-8 m-auto mb30">
							<div class="row">
								<div class="col-md-12">
									<div class="padding40 bg-color-2 text-light box-rounded">
										<h3>مقرنا</h3>
										<address class="s1">
											<span><i class="fa fa-map-marker fa-lg"></i>غرفة عنيزة</span>
											<span><i class="fa fa-phone fa-lg"></i><a href="tel:+966500735712">+966500735712</a></span>
											<span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:info@idea-se.org">info@idea-se.org</a></span>
											<span>
												<i class="fa fa-map-marker fa-lg"></i>
												<a href="https://www.google.com/maps?q=%D8%BA%D8%B1%D9%81%D8%A9+%D8%B9%D9%86%D9%8A%D8%B2%D8%A9&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiap-vfv_nuAhUMLBoKHV5zAF8Q_AUoAnoECAoQBA" target="_blank" rel="noopener">عرض على الخريطة</a>
											</span>
										</address>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		<!-- content close -->
	@endsection
