@extends('layout')

@section('content')
  <div id="breadcrumbs">
    <div class="container">
      <div class="row">
        <span>
          <a href="/">Главная</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        </span>
        <span>Контакты</span>
      </div>
    </div>
  </div>
  <div class="container all contacts">
    <h1 class="title">Контакты</h1>
    <div class="col-lg-12">
      <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.157086319902!2d27.540611115975302!3d53.9111844399528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcf8da2b78327%3A0xbf4dce0e8fb8ae4a!2z0L_RgNC-0YHQvy4g0J_QvtCx0LXQtNC40YLQtdC70LXQuSAyMy8xLCDQnNC40L3RgdC6!5e0!3m2!1sru!2sby!4v1511705291396"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="info">
        <i class="glyphicon glyphicon-map-marker"></i><span>Адрес</span>
        <div>{{ setting('site.address') }}</div>
      </div>
      <div class="info">
        <i class="glyphicon glyphicon-phone"></i><span>Телефон</span>
        <div>{{ setting('site.phone') }}</div>
      </div>
      <div class="info">
        <i class="glyphicon glyphicon-envelope"></i><span>E-mail</span>
        <div>{{ setting('site.email') }}</div>
      </div>
      <div class="info">
        <i class="fa fa-users" aria-hidden="true"></i><span>Присоединяйтесь</span>
        <div>
          <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-vk" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12">
      <div class="feedback">
        <h3><i class="fa fa-envelope" aria-hidden="true"></i>Свяжитесь с нами</h3>
        <form id="feedback-form" method="post" data-toggle="validator">
          <div class="col-lg-4">
            <div class="form-group">
              <label for="name"></label>
              <input type="text" name="name" id="name" class="form-control" required placeholder="Ваше имя">
            </div>
            <div class="form-group">
              <label for="email"></label>
              <input type="text" name="email" id="email" class="form-control" required placeholder="Ваш e-mail">
            </div>
            <div class="form-group">
              <label for="subject"></label>
              <select name="subject" id="subject" class="form-control" required>
                <option value="">Тема вопроса</option>
                <option value="Тема 1">Тема 1</option>
                <option value="Тема 2">Тема 2</option>
                <option value="Тема 3">Тема 3</option>
                <option value="Тема 4">Тема 4</option>
              </select>
            </div>
          </div>
          <div class="col-lg-8">
            <label for="message"></label>
            <textarea name="message" id="message" required placeholder="Текст сообщения"></textarea>
          </div>
          <div class="clearfix"></div>
          <button type="submit" class="btn">Отправить</button>
        </form>
      </div>
    </div>

  </div>
@endsection

@section('scripts')
  <script>
      $('#feedback-form').validator()
  </script>
@endsection