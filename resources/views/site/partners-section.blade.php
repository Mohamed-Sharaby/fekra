<section id="all-partners" class="pt60 pb60 text-light bg-color-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0s">
                <div id="owl-logo" class="logo-carousel owl-carousel owl-theme">
                    @foreach($partners as $partner)
                    <img src="{{getImgPath($partner->image)}}" class="img-fluid" alt=""/>
                    @endforeach
                </div>
            </div>
            <img src="{{asset('site/images/assets/lamp.png')}}" alt="" class="the-lamp-img wow fadeInDown" data-wow-delay="0s">
        </div>
    </div>
</section>
