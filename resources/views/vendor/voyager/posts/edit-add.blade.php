@extends('voyager::master')

@section('page_title', __('voyager.generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->display_name_singular)

@section('css')
  <style>
    .panel .mce-panel {
      border-left-color: #fff;
      border-right-color: #fff;
    }

    .panel .mce-toolbar,
    .panel .mce-statusbar {
      padding-left: 20px;
    }

    .panel .mce-edit-area,
    .panel .mce-edit-area iframe,
    .panel .mce-edit-area iframe html {
      padding: 0 10px;
      min-height: 350px;
    }

    .mce-content-body {
      color: #555;
      font-size: 14px;
    }

    .panel.is-fullscreen .mce-statusbar {
      position: absolute;
      bottom: 0;
      width: 100%;
      z-index: 200000;
    }

    .panel.is-fullscreen .mce-tinymce {
      height:100%;
    }

    .panel.is-fullscreen .mce-edit-area,
    .panel.is-fullscreen .mce-edit-area iframe,
    .panel.is-fullscreen .mce-edit-area iframe html {
      height: 100%;
      position: absolute;
      width: 99%;
      overflow-y: scroll;
      overflow-x: hidden;
      min-height: 100%;
    }
  </style>
@stop

@section('page_header')
  <h1 class="page-title">
    <i class="{{ $dataType->icon }}"></i>
    {{ __('voyager.generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->display_name_singular }}
  </h1>
  @include('voyager::multilingual.language-selector')
@stop

@section('content')
  <div class="page-content container-fluid">
    <form class="form-edit-add" role="form" action="@if(isset($dataTypeContent->id)){{ route('voyager.posts.update', $dataTypeContent->id) }}@else{{ route('voyager.posts.store') }}@endif" method="POST" enctype="multipart/form-data">
      <!-- PUT Method if we are editing -->
      @if(isset($dataTypeContent->id))
        {{ method_field("PUT") }}
      @endif
      {{ csrf_field() }}

      <div class="row">
        <div class="col-md-8">
          <!-- ### TITLE ### -->
          <div class="panel">
            @if (count($errors) > 0)
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <div class="panel-heading">
              <h3 class="panel-title">
                <i class="voyager-character"></i> {{ __('voyager.post.title') }}
                <span class="panel-desc"> {{ __('voyager.post.title_spec') }}</span>
              </h3>
              <div class="panel-actions">
                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
              </div>
            </div>
            <div class="panel-body">
              @include('voyager::multilingual.input-hidden', [
                  '_field_name'  => 'title',
                  '_field_trans' => get_field_translations($dataTypeContent, 'title')
              ])
              <input type="text" class="form-control" id="title" name="title" placeholder="{{ __('voyager.generic.title') }}" value="@if(isset($dataTypeContent->title)){{ $dataTypeContent->title }}@endif">
            </div>
          </div>

          <!-- ### EXCERPT ### -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">{!! __('voyager.post.excerpt') !!}</h3>
              <div class="panel-actions">
                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
              </div>
            </div>
            <div class="panel-body">
              @include('voyager::multilingual.input-hidden', [
                  '_field_name'  => 'excerpt',
                  '_field_trans' => get_field_translations($dataTypeContent, 'excerpt')
              ])
              <textarea class="form-control" name="excerpt">@if (isset($dataTypeContent->excerpt)){{ $dataTypeContent->excerpt }}@endif</textarea>
            </div>
          </div>

          <!-- ### CONTENT ### -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="icon wb-book"></i> {{ __('voyager.post.content') }}</h3>
              <div class="panel-actions">
                <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen" aria-hidden="true"></a>
              </div>
            </div>
            @include('voyager::multilingual.input-hidden', [
                '_field_name'  => 'body',
                '_field_trans' => get_field_translations($dataTypeContent, 'body')
            ])
            <textarea class="form-control richTextBox" id="richtextbody" name="body" style="border:0px;">@if(isset($dataTypeContent->body)){{ $dataTypeContent->body }}@endif</textarea>
          </div><!-- .panel -->
        </div>
        <div class="col-md-4">
          <!-- ### DETAILS ### -->
          <div class="panel panel panel-bordered panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="icon wb-clipboard"></i> {{ __('voyager.post.details') }}</h3>
              <div class="panel-actions">
                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
              </div>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label for="name">{{ __('voyager.post.slug') }}</label>
                @include('voyager::multilingual.input-hidden', [
                    '_field_name'  => 'slug',
                    '_field_trans' => get_field_translations($dataTypeContent, 'slug')
                ])
                <input type="text" class="form-control" id="slug" name="slug"
                       placeholder="slug"
                       {{!! isFieldSlugAutoGenerator($dataType, $dataTypeContent, "slug") !!}}
                       value="@if(isset($dataTypeContent->slug)){{ $dataTypeContent->slug }}@endif">
              </div>
              <div class="form-group">
                <label for="name">{{ __('voyager.post.status') }}</label>
                <select class="form-control" name="status">
                  <option value="1" @if(isset($dataTypeContent->status) && $dataTypeContent->status == 'Активно'){{ 'selected="selected"' }}@endif>{{ __('voyager.post.status_active') }}</option>
                  <option value="0" @if(isset($dataTypeContent->status) && $dataTypeContent->status == 'Неактивно'){{ 'selected="selected"' }}@endif>{{ __('voyager.post.status_inactive') }}</option>
                </select>
              </div>
            </div>
          </div>

          <!-- ### IMAGE ### -->
          <div class="panel panel-bordered panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="icon wb-image"></i> {{ __('voyager.post.image_main') }}</h3>
              <div class="panel-actions">
                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
              </div>
            </div>
            <div class="panel-body">
              @if(isset($dataTypeContent->main_image))
                <img src="{{ filter_var($dataTypeContent->main_image, FILTER_VALIDATE_URL) ? $dataTypeContent->main_image : Voyager::image( $dataTypeContent->main_image ) }}" style="width:100%" />
              @endif
              <input type="file" name="main_image">
            </div>
          </div>

          <!-- ### IMAGE ### -->
          <div class="panel panel-bordered panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="icon wb-image"></i> {{ __('voyager.post.image_catalog') }}</h3>
              <div class="panel-actions">
                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
              </div>
            </div>
            <div class="panel-body">
              @if(isset($dataTypeContent->catalog_image))
                <img src="{{ filter_var($dataTypeContent->catalog_image, FILTER_VALIDATE_URL) ? $dataTypeContent->catalog_image : Voyager::image( $dataTypeContent->catalog_image ) }}" style="width:100%" />
              @endif
              <input type="file" name="catalog_image">
            </div>
          </div>

          <!-- ### SEO CONTENT ### -->
          <div class="panel panel-bordered panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="icon wb-search"></i> {{ __('voyager.post.seo_content') }}</h3>
              <div class="panel-actions">
                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
              </div>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label for="name">{{ __('voyager.post.seo_title') }}</label>
                @include('voyager::multilingual.input-hidden', [
                    '_field_name'  => 'meta_title',
                    '_field_trans' => get_field_translations($dataTypeContent, 'meta_title')
                ])
                <input type="text" class="form-control" name="meta_title" placeholder="SEO Title" value="@if(isset($dataTypeContent->meta_title)){{ $dataTypeContent->meta_title }}@endif">
              </div>
              <div class="form-group">
                <label for="name">{{ __('voyager.post.meta_description') }}</label>
                @include('voyager::multilingual.input-hidden', [
                    '_field_name'  => 'meta_description',
                    '_field_trans' => get_field_translations($dataTypeContent, 'meta_description')
                ])
                <textarea class="form-control" name="meta_description">@if(isset($dataTypeContent->meta_description)){{ $dataTypeContent->meta_description }}@endif</textarea>
              </div>
              <div class="form-group">
                <label for="name">{{ __('voyager.post.meta_keywords') }}</label>
                @include('voyager::multilingual.input-hidden', [
                    '_field_name'  => 'meta_keywords',
                    '_field_trans' => get_field_translations($dataTypeContent, 'meta_keywords')
                ])
                <textarea class="form-control" name="meta_keywords">@if(isset($dataTypeContent->meta_keywords)){{ $dataTypeContent->meta_keywords }}@endif</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-primary pull-right">
        @if(isset($dataTypeContent->id)){{ __('voyager.post.update') }}@else <i class="icon wb-plus-circle"></i> {{ __('voyager.post.new') }} @endif
      </button>
    </form>

    <iframe id="form_target" name="form_target" style="display:none"></iframe>
    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
      {{ csrf_field() }}
      <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
      <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
    </form>
  </div>
@stop

@section('javascript')
  <script>
      $('document').ready(function () {
          $('#slug').slugify();

        @if ($isModelTranslatable)
        $('.side-body').multilingual({"editing": true});
        @endif
      });
  </script>
@stop
