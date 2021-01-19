
<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleRejestracjaPoprawna.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - rejestracja poprawna</title>
</head>

<body>

<header>
	{include file='navBarStart.tpl'}
</header>

<button onclick="create()">Create Heading</button>
    <script>
      function create() {
        var h1 = document.createElement('h1');
        h1.textContent = "New Heading!!!";
        h1.setAttribute('class', 'note');
        document.body.appendChild(h1);
      }
    </script>

    {section name="sectionLiczby" loop=10 start=0 step=1}

        <br>
        Something
        {* {$smarty.section.sectionLiczby.iteration}.
        {$liczby[sectionLiczby]}

        {if $smarty.section.sectionLiczby.iteration == 4} !!! {else} --- {/if} *}
    
    {/section}


    
    {* {section name="sectionLiczby" loop=10 start=0 step=1}
    {$smarty.section.sectionLiczby.iteration}
    {/section} *}


<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                {section name="sectionLiczby" loop=15 start=0 step=1}
                    <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#{$smarty.section.sectionLiczby.iteration}" role="tab" aria-controls="home">{$smarty.section.sectionLiczby.iteration}</a>
                {/section}
            </div>
        </div>

        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                {section name="sectionLiczby" loop=15 start=0 step=1}
                <br>
                    <div class="tab-pane fade show active" id="{$smarty.section.sectionLiczby.iteration}" role="tabpanel" aria-labelledby="list-home-list">Bla bla bla bla</div>
                {/section}
            </div>
        </div>
    </div>
</div>



{* 
<main>
	<div class="container">
		<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Bla bla bla bla</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">S</div>
    </div>
  </div>
</div>
	</div>
</main> *}


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>