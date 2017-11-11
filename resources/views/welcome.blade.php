@extends('layout')

@section('content')
  <div class="container" id="slider">
    <div class="row">
      <div class="col-xs-12 swiper-container">
        @if (!empty($banners))
          <div class="slider swiper-wrapper">
            @foreach ($banners as $banner)
              <div class="swiper-slide"><img src="/storage/{{ $banner->image }}"></div>
            @endforeach
          </div>
          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
        @endif
      </div>
    </div>
  </div>

  <h2 class="title">Каталог специальностей</h2>

  <div class="container all" id="index">
    <div class="row swiper-container">
      <div id="catalog_main" class="swiper-wrapper">
        @if ($specialties)
          @foreach ($specialties as $specialty)
            <div class="swiper-slide">
              <a href="specialty/{{ $specialty->slug }}">
                <figure>
                  <img src="storage/{{ $specialty->image }}">
                  <span class="more">Подробнее</span>
                  <figcaption>
                    {{ $specialty->title }}
                  </figcaption>
                </figure>
              </a>
            </div>
          @endforeach
        @endif
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
@endsection

@section('scripts')
  <script src="{{ asset('js/swiper.min.js') }}"></script>
  <script>
      let swiper;
      swiper = new Swiper('#slider .swiper-container', {
          height: '450px',
          autoplay: {
              delay: 5000,
          },
          effect: 'fade',
          loop: true,
          fadeEffect: {
              crossFade: true
          },
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
      });

      let swiperCatalog;
      swiperCatalog = new Swiper('#index .swiper-container', {
          autoplay: {
              delay: 5000,
          },
          slidesPerView: 4,
          loop: true,
      });
  </script>
@endsection