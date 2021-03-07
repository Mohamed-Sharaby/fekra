<!-- Javascript Files
  ================================================== -->
<script src="{{asset('site/js/jquery.min.js')}}"></script>
<script src="{{asset('site/js/countdown.js')}}"></script>
<script src="{{asset('site/js/main.js')}}"></script>

{{--<script src="{{asset('site')}}/js/jquery.min.js"></script>--}}
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/wow.min.js')}}"></script>
<script src="{{asset('site/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('site/js/easing.js')}}"></script>
<script src="{{asset('site/js/owl.carousel.js')}}"></script>
{{--<script src="{{asset('site')}}/js/validation.js"></script>--}}
<script src="{{asset('site/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('site/js/enquire.min.js')}}"></script>
<script src="{{asset('site/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('site/js/jquery.plugin.js')}}"></script>
<script src="{{asset('site/js/typed.js')}}"></script>
<script src="{{asset('site/js/jquery.countTo.js')}}"></script>
{{--<script src="{{asset('site')}}/js/jquery.countdown.js"></script>--}}
{{--<script src="{{asset('site')}}/js/main.js"></script>--}}
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


{{--<script src="{{asset('site/js/user/register.js')}}"></script>--}}
<script>
    $(function() {
        // jquery typed plugin
        $(".typed").typed({
            stringsElement: $('.typed-strings'),
            typeSpeed: 100,
            backDelay: 1500,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function() {
                null;
            },
            resetCallback: function() {
                newTyped();
            }
        });
    });
</script>
