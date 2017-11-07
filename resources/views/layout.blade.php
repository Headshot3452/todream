<!DOCTYPE html>
<html>
    <head>
        <base href="{{ url('/') }}" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/fonts/lato/lato.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />

        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="css/owl.transitions.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

        <link rel="stylesheet" type="text/css" href="css/lightbox.css"/>
    </head>
{{--<body>--}}

{{--<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>--}}
{{--<script src="js/bootstrap.min.js" type="text/javascript"></script>--}}
{{--<script src="js/jquery-ui.min.js" type="text/javascript"></script>--}}
{{--<script src="js/less.min.js" type="text/javascript"></script>--}}
{{--<script src="js/jquery.validate.js" type="text/javascript"></script>--}}
{{--<script src="js/myFormsValidate.js" type="text/javascript"></script>--}}
{{--<script src="js/owl.carousel.min.js" type="text/javascript"></script>--}}
{{--<script src="js/pagination.js" type="text/javascript"></script>--}}
{{--<script src="js/script.js" type="text/javascript"></script>--}}
{{--<script src="js/jquery.dotdotdot.min.js" type="text/javascript"></script>--}}
{{--<script src="js/slick.min.js" type="text/javascript"></script>--}}
{{--<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>--}}

{{--<script src="js/lightbox-2.6.min.js" type="text/javascript"></script>--}}

{{--<script src="js/jquery.json-2.4.min.js" type="text/javascript"></script>--}}
{{--<script src="js/jquery.cookie.js" type="text/javascript"></script>--}}
{{--<script src="js/trash/main.js" type="text/javascript"></script>--}}
{{--<script src="js/trash/dialog_trash.js" type="text/javascript"></script>--}}

{{--<div id="wrapper_all">--}}
    {{--<div id="wrapper">--}}
        {{--<div id="product_in_basket">Товар добавлен в корзину</div>--}}
        {{--<header>--}}
            {{--<div class="container all">--}}
                {{--<div class="row">--}}
                    {{--<a href="/">--}}
                        {{--<div class="logo"></div>--}}
                    {{--</a>--}}
                    {{--<div class="phone">--}}
						{{--<?php--}}
						{{--if (isset($PHONE1_KOD))--}}
						{{--{--}}
							{{--echo '<span>'.$PHONE1_KOD.' <span> '.$PHONE1.'</span></span>';--}}
						{{--}--}}
						{{--if (isset($PHONE2_KOD))--}}
						{{--{--}}
							{{--echo '<span>'.$PHONE2_KOD.' <span> '.$PHONE2.'</span></span>';--}}
						{{--}--}}
						{{--?>--}}
                    {{--</div>--}}
                    {{--<div class="search_container">--}}
                        {{--<input type="text" name="search" id="search" placeholder="Поиск по товарам"><span class="loupa"></span>--}}
                    {{--</div>--}}

                    {{--<div class="trash_container">--}}
                        {{--<div class="left">--}}
                            {{--<a class="trash_text" href="/korzina">Мои покупки</a><br />--}}
                            {{--<span class="trash_price"></span>--}}
                        {{--</div>--}}
                        {{--<div class="right">--}}
                            {{--<a class="trash_ico" href="/korzina"></a><br />--}}
                            {{--<span class="thash_count"></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="clearfix"></div>--}}

                    {{--<nav class="navbar navbar-default" role="navigation">--}}
						{{--<?php--}}
						{{--if (isset($_CATEGORY) || $ID == $_PAGE_ID['katalog'])--}}
						{{--{--}}
							{{--$active = 'active';--}}
						{{--}--}}
						{{--else--}}
						{{--{--}}
							{{--$active = '';--}}
						{{--}--}}
						{{--?>--}}
                        {{--<a class="catalog_link <?php echo $active ;?>" href="<?php echo $_CONFIG_SITE['url_catalog'] ;?>">Каталог</a>--}}
                        {{--<div class="navbar-header">--}}
                            {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">--}}
                                {{--<span class="sr-only">Toggle navigation</span>--}}
                                {{--<span class="icon-bar"></span>--}}
                                {{--<span class="icon-bar"></span>--}}
                                {{--<span class="icon-bar"></span>--}}
                            {{--</button>--}}
                        {{--</div>--}}

                        {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
                            {{--<ul class="nav navbar-nav">--}}
								{{--<?php--}}

								{{--//echo '<pre>';--}}
								{{--//var_dump($MENU);--}}
								{{--//echo '</pre>';--}}
								{{--if (isset($MENU))--}}
								{{--{--}}
									{{--foreach ($MENU as $menu)--}}
									{{--{--}}
										{{--if ($ID == $menu['id'] && (!isset($_CATALOG)))--}}
										{{--{--}}
											{{--$active = 'class="active"';--}}
										{{--}--}}
										{{--else--}}
										{{--{--}}
											{{--$active = '';--}}
										{{--}--}}

										{{--if (isset($menu['parent']) && $menu['parent'] != '')--}}
										{{--{--}}
											{{--if(cheakParent($_PAGE) != 0 || isset($_NEWS))--}}
											{{--{--}}
												{{--$active = 'active';--}}
											{{--}--}}
											{{--else--}}
											{{--{--}}
												{{--$active = '';--}}
											{{--}--}}

											{{--echo--}}
												{{--'<li class="dropdown">--}}
															{{--<a class="menu_arrow '.$active.'" href="'.$menu['child'][0]['name'].'">'.$menu['title'].'</a>';--}}

											{{--echo '<ul class="dropdown-menu" role="menu">';--}}
											{{--foreach ($menu['child'] as $child)--}}
											{{--{--}}
												{{--echo--}}
													{{--'<li class="dropdown">--}}
																		{{--<a '.$active.' data-toggle="dropdown" href="'.$child['name'].'">'.$child['title'].'</a>--}}
																	{{--</li>';--}}
											{{--}--}}
											{{--echo '</ul>--}}
														{{--</li>';--}}
											{{--continue;--}}
										{{--}--}}
										{{--echo '<li><a '.$active.' href="'.$menu['url'].'">'.$menu['title'].'</a></li>';--}}
									{{--}--}}
								{{--}--}}
								{{--?>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</nav>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</header>--}}

        {{--<div class="content">--}}
			{{--<?php echo $CONTENT ;?>--}}
        {{--</div>--}}
        {{--<div class="clearfix"></div>--}}
    {{--</div>--}}

    {{--<footer>--}}
        {{--<div class="col-xs-3 text">--}}
            {{--Каждый веб-разработчик знает, что такое текст-«рыба». Текст этот, несмотря на название, не имеет никакого отношения к обитателям водоемов. Используется он--}}
        {{--</div>--}}
        {{--<div class="col-xs-2 menu">--}}
            {{--<h4>Меню</h4>--}}
			{{--<?php--}}
			{{--if (isset($FOOTER_MENU[0]))--}}
			{{--{--}}
				{{--foreach ($FOOTER_MENU as $footer_menu)--}}
				{{--{--}}
					{{--echo '<li><a href="'.$footer_menu['url'].'">'.$footer_menu['title'].'</a></li>';--}}
				{{--}--}}
			{{--}--}}
			{{--?>--}}
        {{--</div>--}}
        {{--<div class="col-xs-3 kont">--}}
            {{--<h4>Контакты</h4>--}}
            {{--<span class="address"><?php echo $SETTINGS[0]['address'] ;?></span><br/>--}}
            {{--<span class="phone"><?php echo $SETTINGS[0]['phone1'] ;?></span><br/>--}}
            {{--<span class="email"><?php echo $SETTINGS[0]['email_info'] ;?></span><br/>--}}
        {{--</div>--}}
        {{--<div class="col-xs-3">--}}
            {{--<h4>Прайсы</h4>--}}
            {{--<a class="download price" href="">Скачать прайс</a>--}}
        {{--</div>--}}
        {{--<div class="col-xs-1">--}}
            {{--<a class="up" href=""></a>--}}
        {{--</div>--}}

        {{--<div id="info">--}}
            {{--<div class="copyright">--}}
                {{--© Тибет, <?php echo date("Y") ;?> <br />--}}
                {{--Все права защищены--}}
            {{--</div>--}}
            {{--<div class="iwl_cont">--}}
                {{--<a href="http://www.iwl.by/">Разработка</a> и--}}
                {{--<a href="http://www.iwl.by/">продвижение</a><a href="http://www.iwl.by/" class="iwl">IWL.by</a><br/>--}}
                {{--<a href="http://www.iwl.by/">Хостинг</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</footer>--}}
{{--</div>--}}
{{--</body>--}}
@yield('content')
</html>

{{--<!-- ЗАПИСЬ НА КУРСЫ -->--}}

{{--<div class="modal fade" id="modal_kurs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
    {{--<div class="modal-dialog">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>--}}
                {{--<h4 class="modal-title" id="myModalLabel">Запись на курсы</h4>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<form id="form_kurs">--}}
                    {{--<input type="text" id="name" name="name" placeholder="Имя*" required /><br/>--}}
                    {{--<input type="text" id="phone" name="phone" placeholder="Телефон*" required /><br/>--}}
                    {{--<input type="email" id="email" name="email" placeholder="Ваш e-mail" /><br/>--}}
                    {{--<input type="hidden" name="kurs" value="1" id="kurs" />--}}
                    {{--<textarea placeholder="Комментарий" id="text" name="text"></textarea>--}}
                    {{--<div class="clearfix"></div>--}}

                    {{--<button type="submit" class="send red_btn">Записаться</button>--}}

                {{--</form>--}}
            {{--</div>--}}
            {{--<div class="modal-footer">--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- ЗАЯВКА ПРИНЯТА -->--}}

{{--<div class="modal fade" id="modal_kurs_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
    {{--<div class="modal-dialog">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>--}}
                {{--<h4 class="modal-title" id="myModalLabel">Заявка принята!</h4>--}}
                {{--<div>--}}
                    {{--Вы записались на курсы йоги, в течении нескольких минут вам перезвонит наш менеджер.--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="link red_btn" data-dismiss="modal">Ок</button>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- ЗАКАЗ СДЕЛАН -->--}}

{{--<div class="modal fade" id="modal_in_trash_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
    {{--<div class="modal-dialog">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>--}}
                {{--<h4 class="modal-title" id="myModalLabel">Поздравляем!</h4>--}}
                {{--<div>--}}
                    {{--Заказ принят. В ближайшее время с вами сзяжеться наш менеджер.--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}

            {{--</div>--}}
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="link red_btn" data-dismiss="modal">Ок</button>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}