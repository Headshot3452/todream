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
      <div class="col-xs-8 left">
        @foreach ($reviews as $review)
          <span class="title">{{ $review->name }}</span><br/>
          <span class="date">{{ Carbon\Carbon::parse($review->created_at)->formatLocalized('%d %B %Y') }};</span>
          <p class="text">{{ $review->description }}</p>
        @endforeach
      </div>
      <div class="inner col-lg-4 right">
        <h3><i class="fa fa-pencil" aria-hidden="true"></i>Оставить отзыв</h3>
        <form id="review-form" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <input type="text" name="name" id="name" class="form-control" required placeholder="Ваше имя">
          </div>
          <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" required placeholder="Ваш e-mail">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="description" id="description" required placeholder="Ваш отзыв"></textarea>
          </div>
          <button type="submit" class="btn">Оставить отзыв</button>
        </form>
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