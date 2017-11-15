@extends('layout')

@section('content')
  <div id="breadcrumbs">
    <div class="container">
      <div class="row">
        <span>
          <a href="/">Главная</a> <span class="breadcrumbs_arrow"></span>
        </span>
        <span>{{ $page->title }}</span>
      </div>
    </div>
  </div>
  <div class="container speciality">
    <div class="row">
      <div class="col-xs-3 left">
        <div class="left_menu">
          <h3>{{ $page->title }}</h3>
          <span id="green_block"></span>
          <div class="pokupatelyam">
            @foreach ($specialties as $specialty)
              <h5 class="@if ($name == $specialty->slug) active @endif">
                <a href="/training-courses/{{ $specialty->slug }}">{{ $specialty->title }}</a>
              </h5>
            @endforeach
          </div>
          <div id="call_block">
            Не нашли <br/>
            подходящих курсов? <br/>
            Закажите звонок, <br/>
            и наш оператор <br/>
            ОБЯЗАТЕЛЬНО <br/>
            подберет подходящий <br/>
            для ВАС вариант! <br/>
            <a href="">Позвоните мне</a>
          </div>
        </div>
      </div>
      <div class="col-xs-9 right">
        <h1 class="title">{{ $currentSpecialty->title }}</h1>
        <div id="image-block">
          <div id="text-block">
            <h3>{{ $currentSpecialty->title }}</h3>
            <div>{{ $currentSpecialty->excerpt }}</div>
            <a href="" data-id="{{ $currentSpecialty->id }}">Записаться на курсы</a>
          </div>
          <img src="/storage/{{ $currentSpecialty->catalog_image }}">
          <div class="clearfix"></div>
        </div>
        <div class="text">{!! $currentSpecialty->body !!}</div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
      $(function () {
          $('#bs-example-navbar-collapse-1').find('span').each(function () {
              if ($(this).text() === "{{ $page->title }}") {
                  $(this).closest('li').addClass('active');
                  return false;
              }
          });
      });
  </script>
@endsection
