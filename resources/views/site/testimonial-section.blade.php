<section id="section-testimonial" class="has-a-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2><span class="uptitle id-color">الأراء</span>ماذا يقولون عنا</h2>
                    <div class="spacer-20"></div>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme wow fadeInUp" id="opinions-carousel">
            @foreach($testimonials as $testimonial)
                <div class="item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>  {{$testimonial->content}}</p>
                            <div class="de_testi_by">
                                <div class="member-photo">
                                    <img alt="" class="rounded-circle" src="{{getImgPath($testimonial->image)}}"/>
                                </div>
                                <span>{{$testimonial->name}}</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
