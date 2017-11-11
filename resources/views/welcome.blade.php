@extends('layout')

@section('content')
  <div class="container" id="slider">
    <div class="row">
      <div class="col-xs-12">
		  <?php
		  if (isset($SLIDER[0]) && $SLIDER[0] !='')
		  {
		  echo '<div class="slider">';

		  foreach ($SLIDER as $slider)
		  {
		  ?>
        <div>
          <img src="/data/slider/original/<?php echo $slider['image'] ;?>">

          <div class="info">
            <div class="container" id="nav_container">
              <div id="customNav"></div>
              <div class="row">
				  <?php echo isset($slider['title']) && $slider['title'] != '' ? '<h1>'.$slider['title'].'</h1>' : '' ;?>
				  <?php echo isset($slider['description']) && $slider['description'] != '' ? '<span>'.$slider['description'].'</span>' : '' ;?>
				  <?php echo isset($slider['title']) && $slider['title'] != '' && isset($slider['description']) && $slider['description'] != '' ? '<a class="white_btn" href="'.$slider['url'].'" class="link">Перейти</a>' : '' ;?>
              </div>
            </div>
          </div>
        </div>
		  <?php
		  }
		  echo '</div>';
		  }
		  ?>
      </div>
    </div>
  </div>

  <script type="text/javascript">

      $(function()
      {
          $(".slider").owlCarousel(
              {
                  items : 1,
                  singleItem : true,
                  autoplay : false,
                  autoplayTimeout: 5000,
                  nav: true,
                  dots : false,
                  navText : ["",""],
                  navSpeed : 1000,
                  animateOut: 'fadeOut',
              });
      });

  </script>
@endsection