<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Sobre</title>
</head>
<body><section class="cabeca">
<div class="center">
    <header>
        <div class="logo"> <img src="./images/logo.png" width="100" height="100"></div>
    </header>
    <ul class="menu-home">
    <li>
        <a href="./index.php">Home</a>
    </li>
    <li>
        <a href="#">Sobre</a>
    </li>
    <li>
        <a href="./contato.php">Contato</a>
    </li>

</ul>
</div>
<div class="menu-mobile">
<i class="fas fa-align-justify"></i>
    <ul>
<li>
        <a href="./index.php">Home</a> 
    </li>
    <li>
        <a href="./sobre.php">Sobre</a>
    </li>
    <li>
        <a href="./contato.php">Contato</a>
    </li>
</ul>
</div>

<section class="sobre-equipe">
    <div class="w50 foto"><img src="./images/astronautas.png" >  <h2 style="color:white;">Nossa equipe é composta de astronautas</h2>
        <p style="color:whitesmoke;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta temporibus neque iusto quidem vero animi quam explicabo commodi dolor consequuntur ab, doloremque architecto voluptate amet provident accusamus similique quibusdam saepe!</p>
</div>
    <div class="clear"></div>
</section>

</body>
<script src="./js/jquery.js"></script>
<script src="./js/slick.min.js"></script>
<script > $('.menu-mobile i').click(function(){
		$('.menu-mobile').find('ul').slideToggle();
	})</script>
</html>