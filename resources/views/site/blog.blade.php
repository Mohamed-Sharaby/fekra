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
                        @foreach($blogs as $blog)
						<div class="col-lg-4 col-md-6 mb30">
							<div class="bloglist item">
								<div class="post-content">
									<div class="post-image">
										<a href="{{route('site.singleBlog',$blog->id)}}">
											<img alt="" src="{{getImgPath($blog->image)}}">
										</a>
										<div class="post-info">
											<div class="inner">
												<span class="post-date">{{$blog->created_at->diffForHumans()}}  </span>
											</div>
										</div>
									</div>
									<div class="post-text">
                                        <h4><a href="{{route('site.singleBlog',$blog->id)}}" title="أميرة العطاااء">{{$blog->title}} </a></h4>
                                        <p>
                                            {{$blog->body}}
                                        </p>
									</div>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
			</section>

		<!-- content close -->
@endsection
