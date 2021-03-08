@extends('site.layouts.layout')
@section('title','اتصل بنا')

@section('content')
			<!-- section begin -->
			<section id="subheader" data-bgimage="url(site/images/background/5.png) bottom">
				<div class="center-y relative text-center" data-scroll-speed="4">
					<div class="container">
						<div class="row">
							<div class="col-md-8 m-auto">
								<form action='#' class="row" id='form_subscribe' method="post" name="myForm">
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

							<form name="contactForm" id="send_message_form" class="form-border">
                                @csrf
                                {{--/////////////////////////////////////////////////////////--}}
                                <div class="msg" style="display: none;">
                                    <div class="alert alert-success alert-dismissable  " role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <p class="m-0 text-center">تم ارسال رسالتك بنجاح</p>
                                    </div>
                                </div>
                                <p class="error1 text-center" style="margin-right: 100px;margin-left: 100px;"></p>
                                {{--/////////////////////////////////////////////////////////--}}
								<div class="field-set">
									<input type="text" name="name" value="{{old('name')}}" id="name" class="form-control" placeholder="الإسم" />
								</div>

								<div class="field-set">
									<input type="email" name="email" value="{{old('email')}}" id="email" class="form-control" placeholder="البريد الإلكتروني" />
								</div>

								<div class="field-set">
									<input type="text" name="phone" value="{{old('phone')}}" id="phone" class="form-control" placeholder="الجوال" />
								</div>

								<div class="field-set">
									<textarea name="content" id="message" class="form-control" placeholder="اكتب محتوى رسالتك هنا ...">{{old('content')}}</textarea>
								</div>

								<div class="spacer-half"></div>

								<div id="submit">
									<input type="submit" id="send_message_btn" value="ارسل الان" class="btn btn-custom" />
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
											<span><i class="fa fa-map-marker fa-lg"></i>{{$address->value}} </span>
											<span><i class="fa fa-phone fa-lg"></i><a href="tel:+{{$mobile->value}}">{{$mobile->value}}</a></span>
											<span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:{{$email->value}}">{{$email->value}}</a></span>
											<span>
												<i class="fa fa-map-marker fa-lg"></i>
												<a href="{{$location->value}}" target="_blank" rel="noopener">عرض على الخريطة</a>
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

@push('my-js')
    <script>
        $('#send_message_btn').on('click', function (e) {
            e.preventDefault();
            var formData = new FormData($('#send_message_form')[0]);

            $.ajax({
                type: 'POST',
                url: "/contact",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    if (data.status === true) {
                        $('.msg').removeAttr('style');
                        $('.error1').css('display', 'none');
                        $('#send_message_form')[0].reset();
                    } else {
                        let errors = $('.error1').addClass('alert alert-danger');
                        errors.empty()
                        errors.append(data.errors)
                    }
                },
                error(error) {
                    console.log('error', error);
                }

            });
        });

    </script>
@endpush
