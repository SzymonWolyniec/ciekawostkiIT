<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleRegulamin.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - regulamin</title>
</head>

<body>

	<header>
		{if isset($zalogowany)} 
			{include file='navBarLogged.tpl'}
		{else}
			{include file='navBarStart.tpl'}
		{/if}
        
    </header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 m-auto">
					<div class="oknoRegulamin">

						<div class="regulamin">Regulamin</div>

						<div class="regulaminData">Z dnia 12.01.2021</div>

						<div class="regulaminTresc">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a,
							scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus 
							pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit 
							interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae 
							dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam sit amet lectus 
							quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer
							consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue. 
							Cras suscipit, urna at aliquam rhoncus, urna quam viverra nisi, in interdum massa nibh nec erat.
						</div>		
					</div>
				</div>
			</div>
		</div>
	</main>				

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>