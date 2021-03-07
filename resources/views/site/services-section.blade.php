<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2><span class="uptitle id-color">الخدمات</span>تعرف على بعض خدماتنا</h2>
                    <div class="spacer-20"></div>
                </div>
            </div>
            <div id="owl-features" class="owl-carousel owl-theme">
                @foreach($services as $service)
                    <div class="feature-box-type-2">
                        <img src="{{getImgPath($service->image)}}" alt="">
                        <h4> {{$service->text}} </h4>
                    </div>
                @endforeach

            </div>

            <div class="col-md-12 text-center mtop60">
                <a class="btn-custom" href="{{route('site.services')}}">كل الخدمات</a>
            </div>

        </div>
    </div>
</section>
