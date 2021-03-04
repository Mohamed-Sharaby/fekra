@extends('site.layouts.layout')
@section('title','المدونة ')

@section('content')
			<section>
				<div class="container" style="background-size: cover;">
					<div class="row" style="background-size: cover;">
						<div class="col-lg-12">
							<div class="text-center">
								<h2><span class="uptitle id-color">المدونة</span>أطلع على أخر الأخبار</h2>
								<div class="spacer-20"></div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 mb30">
							<div class="bloglist item">
								<div class="post-content">
									<div class="post-image">
										<a href="single-blog.html">
											<img alt="" src="{{asset('site')}}/images/news/1.jpg">
										</a>
										<div class="post-info">
											<div class="inner">
												<span class="post-date">منذ 10 ساعات</span>
											</div>
										</div>
									</div>
									<div class="post-text">
										<h4><a href="#" title="ساعات قليلة وننطلق  , وش تتوقعون مجهزين لكم !">ساعات قليلة وننطلق  , وش تتوقعون مجهزين لكم !</a></h4>
										<p>
										بات الان بضع ساعات قليلة فقط تفصلنا عن انطلاق مفاجئة كبيرة , ترقبونا بالانتظاااار ... دمتم سالمين
											</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 mb30">
							<div class="bloglist item">
								<div class="post-content">
									<div class="post-image">
										<a href="single-blog.html">
											<img alt="" src="{{asset('site')}}/images/news/1.jpg">
										</a>
										<div class="post-info">
											<div class="inner">
												<span class="post-date">منذ 10 ساعات</span>
											</div>
										</div>
									</div>
									<div class="post-text">
										<h4><a href="#" title="أميرة العطاااء">أميرة العطاااء</a></h4>
										<p>
											أميرة العطاء , عندها شي جديد حل لتحدي مبتكر ويتمتع بالاستدامة المالية بس وشو كله كم يوم وندري ....
										  </p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		<!-- content close -->
@endsection
