@extends('layout')

@section('content')
  <div id="breadcrumbs">
    <div class="container">
      <div class="row">
        <span>
          <a href="/">Главная</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        </span>
        <span>{{ $page->title }}</span>
      </div>
    </div>
  </div>
  <div class="container all">
    @if ($page->image_above)
      <img src="storage/{{ $page->image_above }}" alt="">
    @endif

    <h1 class="title">{{ $page->title }}</h1>
    <div class="col-lg-10 col-lg-offset-1 text">{!! $page->body !!}</div>

    @if ($page->image_below)
      <img src="storage/{{ $page->image_below }}" alt="">
    @endif
  </div>
@endsection