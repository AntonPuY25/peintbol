<?php
require_once('config/config.php');//Подключаем наш конфиг , где находятся наши переменные .
?>
<!doctype html>

<html>
	<head>
	<meta charset="utf-8">
	<title>
	<?php
	 if(isset($title)){
		 echo $title;
	 }else{

		 echo"Пейнтбол";
	 }?>
	Пейнтбол</title>
	
	<meta name="discription" content ="<?=(isset($desc))?$desc:"Добро пожаловать к нам";?>">
	<meta name="keywords" content = "Пейнтбол  PuY краски лес команда">
		<link type="text/css" rel="stylesheet" href="media/bootstrap/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="media/css/style.css"/>
	</head>
		<body>
        <div class="header">
		<h1 class="logotex">
		    PuY
			</h1>
            
			<img src="media/img/logo.png" class="logo">

		</div>
		<br style="clear:both"/>
				<nav class="menu">
				<a href="/">Главная</a>
				<a href="index.php?url=playground">Площадки</a>
				<a href="index.php?url=about">О нас</a>
				<a href="index.php?url=contacts">Контакты</a>
				</nav>

                <div class="boot">
					<div class="col-md-2   "><br>
				       <a href="index.php?url=order" class="btn btn-default btn-block "  > Заказать игру</a>
					   <a href="index.php?url=regulation" class="btn btn-default btn-block "  > Правила игры</a>
					   <a href="index.php?url=Review" class="btn btn-default btn-block "  > Отзывы</a>
					   <a href="index.php?url=Recruiting" class="btn btn-default btn-block "  > Набор в команду</a>

					</div>

						<div class="col-md-8">


					
					