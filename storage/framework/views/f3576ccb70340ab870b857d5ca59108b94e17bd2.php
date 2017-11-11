<!DOCTYPE html>
<html>
<head>
  <base href="<?php echo e(url('/')); ?>"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
</head>
<body>
<div id="wrapper_all">
  <div id="wrapper">
    <header>
      <div class="container all">
        <div class="logo">
          <a href="/"><img src="storage/<?php echo e((setting('site.logo'))); ?>" alt=""></a>
        </div>
        <div class="todream">
          Частное учреждение дополнительного образования взрослых <br />
          “Центр подготовки, повышения квалификации, <br />
          переподготовки <span>”К МЕЧТЕ”</span>”
        </div>
        <div class="search_container">
          <input type="text" name="search" id="search" placeholder="Поиск"><span class="glyphicon glyphicon-search"></span>
          <p>Образование, которое ценится повсюду!</p>
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
            <?php echo e(menu('main')); ?>

          </div>
        </nav>
      </div>
    </header>

    <div class="content">
      <?php echo $__env->yieldContent('content'); ?>
    </div>

    <div class="clearfix"></div>
  </div>

  <footer>
    <div class="col-xs-3 text">
      Каждый веб-разработчик знает, что такое текст-«рыба». Текст этот, несмотря на название, не имеет никакого
      отношения к обитателям водоемов. Используется он
    </div>
    <div class="col-xs-2 menu">
      <h4>Меню</h4>
		<?php
		if (isset($FOOTER_MENU[0])) {
			foreach ($FOOTER_MENU as $footer_menu) {
				echo '<li><a href="' . $footer_menu['url'] . '">' . $footer_menu['title'] . '</a></li>';
			}
		}
		?>
    </div>
    <div class="col-xs-3 kont">
      <h4>Контакты</h4>
    </div>
    <div class="col-xs-3">
      <h4>Прайсы</h4>
      <a class="download price" href="">Скачать прайс</a>
    </div>
    <div class="col-xs-1">
      <a class="up" href=""></a>
    </div>

    <div id="info">
      <div class="copyright">
        © Тибет, <?php echo date("Y");?> <br/>
        Все права защищены
      </div>
      <div class="iwl_cont">
        <a href="http://www.iwl.by/">Разработка</a> и
        <a href="http://www.iwl.by/">продвижение</a><a href="http://www.iwl.by/" class="iwl">IWL.by</a><br/>
        <a href="http://www.iwl.by/">Хостинг</a>
      </div>
    </div>
  </footer>
</div>
</body>

</html>









































































