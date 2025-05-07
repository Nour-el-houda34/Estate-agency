<div class="container-xxl">
    <div style="margin-top: 110px;" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><img class="img-fluid" src="{{ asset('img/slide-1.jpg') }}" alt=""></li>
                <li class="splide__slide"><img class="img-fluid" src="{{ asset('img/slide-2.jpg') }}" alt=""></li>
                <li class="splide__slide"><img class="img-fluid" src="{{ asset('img/slide-3.jpg') }}" alt=""></li>
            </ul>
        </div>
    </div>
</div>

<script>
    const splide = new Splide('.splide', {
        type: 'loop',
        drag: 'free',
        autoplay: true,
    });

    splide.mount();
</script>