@extends('layout')

@section('content')
  <div class="container all">
    @if ($page->image_above)
      <img src="storage/{{ $page->image_above }}" alt="">
    @endif

    <h2 class="title">{{ $page->excerpt }}</h2>
    <div class="col-lg-10 col-lg-offset-1 text">{!! $page->body !!}</div>

    @if ($page->image_below)
      <img src="storage/{{ $page->image_below }}" alt="">
    @endif
  </div>
@endsection