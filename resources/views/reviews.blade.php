@extends('layout')

@section('content')
  <div id="breadcrumbs">
    <div class="container">
      <div class="row">
          <span>
            <a href="/">Главная</a> <span class="breadcrumbs_arrow"></span>
          </span>
        <span>Отзывы</span>
      </div>
    </div>
  </div>

  <div class="container review">
    <div class="row">
      <h1 class="title">Отзывы</h1>
      <div class="col-xs-9 left">
        @foreach ($reviews as $review)
          <span class="title">{{ $review->name }}</span><br/>
          <span class="date">{{ Carbon\Carbon::parse($review->created_at)->formatLocalized('%d %B %Y') }};</span>
          <p class="text">{{ $review->description }}</p>
        @endforeach
      </div>
      <div class="inner col-xs-3 right">
        <div class="send_r">
          <h3>Оставить отзыв</h3>
          <form id="send_rev">
            <input class=" col-xs-12" type="text" name="name" id="name" placeholder="Ваше имя">
            <input class="col-xs-12" type="text" name="email" id="email" placeholder="Ваш E-mail">
            <textarea class="col-xs-12" name="review" id="review" placeholder="Ваш отзыв"></textarea>
            <div class="clearfix"></div>
            <div class="send_container"><a class="red_btn">Отправить</a></div>
          </form>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal_review">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3 class="modal-title">Спасибо за ваш отзыв!</h3>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">

      $(function()
      {
          $('#send_rev a.red_btn').on('click', function()
          {
              $('#send_rev').submit();
              return false;
          });
      });

  </script>
@endsection