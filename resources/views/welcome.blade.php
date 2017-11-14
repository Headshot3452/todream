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
    <div class="row">
      <div class="swiper-container">
        <div id="catalog_main" class="swiper-wrapper">
          @if ($specialties ?? null)
            @foreach ($specialties as $specialty)
              <div class="swiper-slide">
                <a href="training-courses/{{ $specialty->slug }}">
                  <figure>
                    <img src="storage/{{ $specialty->main_image }}">
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
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  @if ($page->image_top)
    <img src="storage/{{ $page->image_top }}">
  @endif

  <h2 class="title">{{ $page->excerpt }}</h2>
  <div class="col-lg-10 col-lg-offset-1 text">{!! $page->body !!}</div>

  @if ($page->image_bottom)
    <img src="storage/{{ $page->image_bottom }}">
  @endif
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
          freeMode: true,
          slidesPerView: 4,
          loop: true,
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
      });

      let catalogFigure = $('#catalog_main').find('figure');
      catalogFigure.hover(function() {
          $(this).find('.more').show();
          $(this).css('backgroundColor', 'rgba(56, 54, 49, .4)').children('img').fadeTo(0, 0.5).end().parent('a').css('color', '#fff');
      }, function() {
          $(this).find('.more').hide();
          $(this).css('backgroundColor', 'transparent').children('img').fadeTo(0, 1).end().parent('a').css('color', '#1f1f1f');
      });
  </script>
@endsection