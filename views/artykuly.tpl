<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleArtykuly.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - artykuły</title>
</head>

<body>

	<header>
		{include file='navBarLogged.tpl'}
    </header>


    <main>
        <div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 col-md-10 col-sm-12 m-auto">
                    <div class="oknoArtykul">

                    <div class="artykulyInfo">Artykuły</div>

                        <div class="container">
                            <div class="row"> <!-- no-gutters -->

                            {if isset($artykulyFromDB)}
                            {foreach $artykulyFromDB as $artykul name="myFore"}

                                <div class="col-md-6 col-lg-4 py-3">
                                    <div class="customBorder">
                                        <figure class="customBorder">
                                            <a href="artykulSzczegoly.php?id={$artykul.id}">
                                            
                                                <img src="{$imagesTab[$smarty.foreach.myFore.index]}">
                                            </a>
                                            <figcaption class="artykulTytul">{$artykul.title}</figcaption>
                                        </figure>
                                    </div>
                                </div>

                            {/foreach}
                            {/if}
					
                            </div>
                        </div>
                    </diV>
                </diV>
            </diV>
        </diV>    
    </main>
                            

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>