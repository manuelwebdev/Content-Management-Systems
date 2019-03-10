<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Cabot Cruises<?php wp_title();?></title>



   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G"
      crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/brands.css" integrity="sha384-1KLgFVb/gHrlDGLFPgMbeedi6tQBLcWvyNUN+YKXbD7ZFbjX6BLpMDf0PJ32XJfX"
      crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0"
      crossorigin="anonymous">
   <link href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" rel="stylesheet">
   <link href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
</head>

<body>



   <div class="headwrap">

      <header>
         <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" srcset="<?php echo get_template_directory_uri(); ?>/img/logo1x.png 1x, <?php echo get_template_directory_uri(); ?>/img/logo2x.png 2x, <?php echo get_template_directory_uri(); ?>/img/logo3x.png 3x" alt="logo">
         <div class="phone">
            <a href="tel:8017241381">801-724-1381</a>
         </div>
      </header>
   </div>

<!-- NAV STARTS HERE -->
<div id="navWrapper">
	<nav class="clearfix">
  		<button id="hamburgerBtn"></button>
        <?php wp_nav_menu(array('menu_id' => 'primaryNav'));?>
            <ul id="primaryNav">
                <li><a href="#">Home</a></li>
                <li class="current-menu-item"><a href="#">Plans</a></li>
                <li class="menu-item-has-children"><a href="#">Models</a>
                    <ul>
                    <li><a href="#">Model 1</a></li>
                    <li><a href="#">Model 2</a></li>
                    <li><a href="#">Model 3</a></li>
                    </ul>
                </li>
            </ul>

		<div id="search">
		<form method="get" action="/">
			<input class="sfield" type="search" name="s" placeholder="search...">
			<!-- <input class="sbtn" type="submit" value=""> -->
         <button class="sbtn" type="submit" value=""><i class="fas fa-search"></i></button>
		</form>
	</div>
	</nav>
</div>

   <!-- <div class="navwrap">
      <div class="topnav" id="myTopnav">
      <?php //wp_nav_menu(array('menu_id' => 'topnav')); ?>
       <?php //$page=$_REQUEST['page']; ?>
         <a href="index.php?page=home"<?//=($page=='home'?' class="active"':'');?>">HOME</a>
         <a href="cruises.php?page=cruises"<?//=($page=='cruises'?' class="active"':'');?>">CRUISES</a>
         <a href="book.php?page=book"<?//=($page=='book'?' class="active"':'');?>">BOOK</a>
         <div class="dropdown">
            <button class="dropbtn">AGENTS
               <i class="fas fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
               <a href="agentTom.php?page=agentTom"<?//=($page=='agentTom'?' class="active"':'');?>">Tom</a>
               <a href="agentLeslie.php?page=agentLeslie"<?//=($page=='agentLeslie'?' class="active"':'');?>">Leslie</a>
            </div>
         </div> -->
         <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
         </a> -->

         <div class="search">
            <input type="search" name="search" id="search" placeholder="Search...">
            <button><i class="fas fa-search fa-2x"></i></button>
         </div>
      </div>
   </div>



   <main>