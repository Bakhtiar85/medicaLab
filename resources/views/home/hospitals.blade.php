<link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" />

<div id="what-we-provide" class="w-full h-screen flex flex-col justify-center items-center border-b-2 pb-2 lg:px-0 px-2">
    <div class="w-full max-w-7xl">
        <div class="w-full border-b">
            <p class="text-4xl font-bold font-mono">
                Hospitals
            </p>
        </div>
        <div class="owl-carousel owl-theme mt-4">
          @foreach ($hp_data as $hp)
          <div class="h-60 relative">
            <img class="object-contain" src={{ asset('images/'. $hp['img']) }} alt="img1">
            <div class="owl-div-inner">
                <p class="text-md font-mono">
                    {{$hp['name']}}
                </p>
                <p class="text-lg italic">
                    {{$hp['location']}}
                </p>
            </div>
        </div>
          @endforeach
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            dots: false,
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 6000,
            autoplaySpeed: 6000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                    nav: false
                }
            }
        })
        owl.on('mousewheel', '.owl-stage', function(e) {
            if (e.deltaY > 0) {
                owl.trigger('next.owl');
            } else {
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });
    });
</script>
