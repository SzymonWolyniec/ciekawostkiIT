<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleUzytkownicy.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - użytkownicy</title>
</head>

<body>

	<header>
		{include file='navBarLogged.tpl'}
    </header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 m-auto">
					<div class="oknoUzytkownicy">

						<div class="uzytkownicyTxt">Użytkownicy ({$uzytkownicyFromDB|@count})</div>

                        <form method="post">
                            <!-- Expand button  -->
                            <input type="submit" class="test" value="Rozwiń wszystko" name="expand"/>
                            <!-- Collapse button  -->
                            <input type="submit" value="Zwiń wszystko" name="collapse"/>
                        </form>

                        <div class="oknoRozwijanychPrzyciskow">
                            {foreach $uzytkownicyFromDB as $uzytkownik}

                                <button class="collapsible" style="{if $uzytkownik.permissionsLevel == 4}font-weight:bold;color:aqua;{elseif $uzytkownik.permissionsLevel == 3}font-weight:bold;color:greenyellow;{/if}">{$uzytkownik.login}</button>
                                <div class="content">
                                    <div class="uzytkownik">

                                        <div class="container-fluid">

                                            <div class="row no-gutters">
                                                {* Edit Btn *}
                                                <div class="col-sm-12 editBtnContainer">
                                                    <form  action="edycjaUzytkownik.php" method="get">
                                                        <Button class="editBtn" type="submit" value="{$uzytkownik.id}" name="uzytkownikId">
                                                            <img src="./media/edit.png" width="25" height="25">
                                                        </Button>
                                                    </form>
                                                </div>
                                            </div>

                                            

                                            <div class="row no-gutters">
                                                {* ID *}
                                                <div class="col-sm-5 col-md-4 col-lg-3 ">
                                                    <div class="uzytkownikInfo">ID:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane">{$uzytkownik.id}</div>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                    {* Email *}
                                                <div class="col-sm-5 col-md-4 col-lg-3 ">
                                                    <div class="uzytkownikInfo">Email:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane">{$uzytkownik.email}</div>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                    {* Imię i nazwisko *}
                                                <div class="col-sm-5 col-md-4 col-lg-3">
                                                    <div class="uzytkownikInfo">Imię i nazwisko:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane">{$uzytkownik.name} {$uzytkownik.surname}</div>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                    {* Wiek *}
                                                <div class="col-sm-5 col-md-4 col-lg-3 ">
                                                    <div class="uzytkownikInfo">Wiek:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane">{$uzytkownik.age}</div>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                    {* Komentarze *}
                                                <div class="col-sm-5 col-md-4 col-lg-3 ">
                                                    <div class="uzytkownikInfo">Komentarze:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane">!!!</div>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                    {* Ostrzeżenia *}
                                                <div class="col-sm-5 col-md-4 col-lg-3 ">
                                                    <div class="uzytkownikInfo">Ostrzeżenia:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane">!!!</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            {/foreach}
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