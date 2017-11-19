@extends('layout')

@section('content')
  <div id="breadcrumbs">
    <div class="container">
      <div class="row">
        <span>
          <a href="/">Главная</a> <span class="breadcrumbs_arrow"></span>
        </span>
        <span>Контакты</span>
      </div>
    </div>
  </div>
  <div class="container all contacts">
    <h1 class="title">Контакты</h1>
    <div class="col-lg-12">
      <div id="map">
        <iframe width="100%" height="310" frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?q=якуба+коласа+55&key={{ env('GOOGLE_MAPS_KEY') }}"
                allowfullscreen></iframe>
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