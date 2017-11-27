<!DOCTYPE html>
<html>
<head>
  <base href="{{ url('/') }}"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="description" content="{{ $meta['description'] ?? '' }}">
  <meta name="Keywords" content="{{ $meta['keywords'] ?? '' }}">
  <link rel="icon" type="image/png" href="/storage/{{ setting('admin.icon_image') }}">
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
          <div class="phone-header">
            <i class="glyphicon glyphicon-phone"></i>{{ setting('site.phone') }}
          </div>
          {{--<input type="text" name="search" id="search" placeholder="Поиск"><span class="glyphicon glyphicon-search"></span>--}}
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
</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <form id="order-form" method="post" data-toggle="validator" action="{{ route('orders') }}">
          {{ csrf_field() }}
          <input type="hidden" name="post_id" id="post_id" class="form-control">
          <div class="form-group">
            <label for="name">Ваше имя*</label>
            <input type="text" name="name" id="name" class="form-control" required placeholder="Иван">
          </div>
          <div class="form-group hide">
            <label for="name">Специальность для изучения</label>
            <input type="text" name="title" id="title" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="email">Адрес электронной почты</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="ivan@mail.ru">
          </div>
          <div class="form-group">
            <label for="phone">Номер телефона*</label>
            <input type="text" name="phone" id="phone" class="form-control numbers-only" required placeholder="+375 (44) 222 22 22">
          </div>
          <div class="form-group">
            <label for="comment">Комментарий</label>
            <textarea name="comment" id="comment" placeholder="Комментарий" class="form-control"></textarea>
          </div>
          <button type="submit" class="btn">Позвоните мне</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery.mask.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
@yield('scripts')

</body>
</html>


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