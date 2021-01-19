<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
		
			<a class="navbar-brand" href="index.php"><img src="./media/logo.png" width="30" height="30" class="d-inline-block mr-2 align-bottom" alt="">Ciekawostki.it</a>
		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Włącznik paska nawigacji">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="mainmenu">
			
				<ul class="navbar-nav mr-auto">
				
					<li class="nav-item mr-2">
						<a class="nav-link" href="index.php"> Start </a>
					</li>
					
					<li class="nav-item {if isset($activeNavItem)}{if $activeNavItem=="profil"}active{/if}{/if} mr-2">
						<a class="nav-link" href="profil.php"> Profil </a>
					</li>

                    <li class="nav-item {if isset($activeNavItem)}{if $activeNavItem=="edycjaDanych"}active{/if}{/if} mr-2">
						<a class="nav-link" href="profil.php?edytujDane=Edytuj+dane"> Edycja danych </a>
					</li>

					<li class="nav-item {if isset($activeNavItem)}{if $activeNavItem=="regulamin"}active{/if}{/if} mr-2">
						<a class="nav-link" href="regulamin.php"> Regulamin </a>
					</li>

                    <li class="nav-item {if isset($activeNavItem)}{if $activeNavItem=="wyloguj"}active{/if}{/if} mr-2">
						<a class="nav-link" href="wyloguj.php"> Wyloguj </a>
					</li>
				
				</ul>
			
			</div>
		
		</nav>