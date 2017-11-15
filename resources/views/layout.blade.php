<!DOCTYPE html>
<html>
<head>
  <base href="{{ url('/') }}"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="description" content="{{ $meta['description'] ?? '' }}">
  <meta name="Keywords" content="{{ $meta['keywords'] ?? '' }}">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <title>{{ $meta['title'] ?? '' }}</title>
  @yield('css')
</head>
<body>
<div id="wrapper_all">
  <div class="wrapper" id="app">
    <header>
      <div class="container all">
        <div class="logo">
          <a href="/"><img src="storage/{{ (setting('site.logo')) }}" alt=""></a>
        </div>
        <div class="todream">
          Частное учреждение дополнительного образования взрослых <br />
          “Центр подготовки, повышения квалификации, <br />
          переподготовки <span>”К МЕЧТЕ”</span>”
        </div>
        <div class="search_container">
          <input type="text" name="search" id="search" placeholder="Поиск"><span class="glyphicon glyphicon-search"></span>
          <p>{{ setting('site.descriptionTop') }}</p>
        </div>
        <div class="clearfix"></div>
        <nav class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            {{ menu('main') }}
          </div>
        </nav>
      </div>
    </header>
    <div class="content">
      @yield('content')
    </div>
    <div class="clearfix"></div>
  </div>
  <footer>
    <div class="col-xs-3 text">
      <img src="storage/{{ setting('site.logoFooter') }}" alt="">
      <div class="clearfix"></div>
      {{ setting('site.descriptionBottom') }}
    </div>
    <div class="col-xs-3 menu right">
      <h4>Меню</h4>
      {{ menu('footer') }}
    </div>
    <div class="col-xs-3 kont left">
      <h4>Контакты</h4>
      <i class="glyphicon glyphicon-map-marker"></i><span>{{ setting('site.address') }}</span><br />
      <i class="glyphicon glyphicon-phone"></i><span>{{ setting('site.phone') }}</span><br />
      <i class="glyphicon glyphicon-envelope"></i><span>{{ setting('site.email') }}</span>
    </div>
    <div class="col-xs-3 xls">
      <h4>Прайсы</h4>
      <a class="download price" href="">
        <i class="fa fa-file-excel-o" aria-hidden="true"></i>
        Скачать прайс
      </a>
    </div>
    <div class="col-xs-1">
      <a class="up" href=""><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    </div>
    <div id="info">
      <div class="copyright">
        {{ setting('site.name') }}, {{ date("Y") }} <br/>
        Все права защищены
      </div>
    </div>
  </footer>
</div>

<script src="{{asset('js/app.js')}}"></script>
<script>
  $('.up').on('click', function() {
      $('body,html').animate({scrollTop:0}, 500);
      return false;
  });
</script>
@yield('scripts')

</body>
</html>

{{--<!-- ЗАПИСЬ НА КУРСЫ -->--}}

{{--<div class="modal fade" id="modal_kurs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--<div class="modal-dialog">--}}
{{--<div class="modal-content">--}}
{{--<div class="modal-header">--}}
{{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>--}}
{{--<h4 class="modal-title" id="myModalLabel">Запись на курсы</h4>--}}
{{--<div class="clearfix"></div>--}}
{{--</div>--}}
{{--<div class="modal-body">--}}
{{--<form id="form_kurs">--}}
{{--<input type="text" id="name" name="name" placeholder="Имя*" required /><br/>--}}
{{--<input type="text" id="phone" name="phone" placeholder="Телефон*" required /><br/>--}}
{{--<input type="email" id="email" name="email" placeholder="Ваш e-mail" /><br/>--}}
{{--<input type="hidden" name="kurs" value="1" id="kurs" />--}}
{{--<textarea placeholder="Комментарий" id="text" name="text"></textarea>--}}
{{--<div class="clearfix"></div>--}}

{{--<button type="submit" class="send red_btn">Записаться</button>--}}

{{--</form>--}}
{{--</div>--}}
{{--<div class="modal-footer">--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- ЗАЯВКА ПРИНЯТА -->--}}

{{--<div class="modal fade" id="modal_kurs_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--<div class="modal-dialog">--}}
{{--<div class="modal-content">--}}
{{--<div class="modal-header">--}}
{{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>--}}
{{--<h4 class="modal-title" id="myModalLabel">Заявка принята!</h4>--}}
{{--<div>--}}
{{--Вы записались на курсы йоги, в течении нескольких минут вам перезвонит наш менеджер.--}}
{{--</div>--}}
{{--<div class="clearfix"></div>--}}
{{--</div>--}}
{{--<div class="modal-footer">--}}
{{--<button type="button" class="link red_btn" data-dismiss="modal">Ок</button>--}}
{{--<div class="clearfix"></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- ЗАКАЗ СДЕЛАН -->--}}

{{--<div class="modal fade" id="modal_in_trash_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--<div class="modal-dialog">--}}
{{--<div class="modal-content">--}}
{{--<div class="modal-header">--}}
{{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>--}}
{{--<h4 class="modal-title" id="myModalLabel">Поздравляем!</h4>--}}
{{--<div>--}}
{{--Заказ принят. В ближайшее время с вами сзяжеться наш менеджер.--}}
{{--</div>--}}
{{--<div class="clearfix"></div>--}}
{{--</div>--}}
{{--<div class="modal-body">--}}

{{--</div>--}}
{{--<div class="modal-footer">--}}
{{--<button type="button" class="link red_btn" data-dismiss="modal">Ок</button>--}}
{{--<div class="clearfix"></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}