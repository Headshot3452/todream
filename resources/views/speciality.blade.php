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
  <div class="container news">
    <div class="row">
      <div class="col-xs-3 left">
        <div class="left_menu">
          <h3>{{ $page->title }}</h3>
          <span id="green_block"></span>
          <div class="pokupatelyam">
            @foreach ($specialties as $specialty)
              <h5><a href="">{{ $specialty->title }}</a></h5>
            @endforeach

          </div>
        </div>
      </div>
      <div class="col-xs-9 right">

      </div>
    </div>
  </div>
@endsection