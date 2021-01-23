<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/stylePoczta.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - poczta</title>
</head>

<body>

	<header>
		{include file='navBarLogged.tpl'}
    </header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 m-auto">
					<div class="oknoPoczta">

						<div class="pocztaTxt">Poczta ({if isset($pocztaFromDB)}{$pocztaFromDB|@count}{else}0{/if})</div>

                        <form method="post">
                            <!-- Expand button  -->
                            <input type="submit" class="test" value="Rozwiń wszystko" name="expand"/>
                            <!-- Collapse button  -->
                            <input type="submit" value="Zwiń wszystko" name="collapse"/>
                        </form>

                        <div class="oknoRozwijanychPrzyciskow">
                            {if isset($pocztaFromDB)}
                            {foreach $pocztaFromDB as $wiadomosc}

                                <button class="collapsible">
                                    [{$wiadomosc.sendDate}]&nbsp&nbsp&nbsp{$wiadomosc.title}
                                </button>
                                <div class="content">
                                    <div class="wiadomosc">

                                        <div class="container-fluid">
                                            
                                            <div class="row no-gutters">
                                                {* Sender login *}
                                                <div class="col-sm-5 col-md-4 col-lg-3 ">
                                                    <div class="uzytkownikInfo">Nadawca:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane">{$wiadomosc.login}</div>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                {* Sender id *}
                                                <div class="col-sm-5 col-md-4 col-lg-3 ">
                                                    <div class="uzytkownikInfo">Nadawca ID:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane">{$wiadomosc.userId}</div>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                    {* Text *}
                                                <div class="col-sm-5 col-md-4 col-lg-3 ">
                                                    <div class="uzytkownikInfo">Wiadomość:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane">{$wiadomosc.text}</div>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                    {* Imię i nazwisko *}
                                                <div class="col-sm-5 col-md-4 col-lg-3">
                                                    <div class="uzytkownikInfo">Email kontaktowy:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane">{$wiadomosc.emailContact}</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            {/foreach}
                            {/if}
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>				


    {* Skrpty zajmujące się animacją rozwijanych szczegółów użytkownika *}
    {include file='uzytkownicyCollapsible.tpl'}

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>