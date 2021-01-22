<?php
/* Smarty version 3.1.36, created on 2021-01-22 13:13:53
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\panelKontaktowy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600ac181a7e530_51990838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53afe5d109802b7bb36d8c8d8dff690459132b9b' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\panelKontaktowy.tpl',
      1 => 1611279588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navBarLogged.tpl' => 1,
  ),
),false)) {
function content_600ac181a7e530_51990838 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/stylePanelKontaktowy.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - panel kontaktowy</title>
</head>

<body>

	<header>
		<?php $_smarty_tpl->_subTemplateRender('file:navBarLogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>


    <main>
        <div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-9 col-sm-12 m-auto">
                    <div class="oknoPanelKontaktowy">
                        <div class="panelInfo">Panel kontaktowy</div>
                        <div class="panelOpis">W celu kontaktu z administracją wypełnij poniższy formularz.</div>

                        <div class="status"><?php if ((isset($_smarty_tpl->tpl_vars['wiadomoscWyslana']->value))) {
echo $_smarty_tpl->tpl_vars['wiadomoscWyslana']->value;
}?></div>
                        
    
                            <form method="post">
                            
                            <div class="panelKontaktowyInfo">Tytuł</div>
                            <!-- Title input -->
                            <input type="text" placeholder="Tytuł" value="<?php if ((isset($_smarty_tpl->tpl_vars['wiadomoscTytulZap']->value))) {
echo $_smarty_tpl->tpl_vars['wiadomoscTytulZap']->value;
}?>" name="wiadomoscTytul"/>
                            
                            <div class="error">
                                <?php if ((isset($_smarty_tpl->tpl_vars['e_tytul']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_tytul']->value;?>
 <?php }?>
                            </div>

                            <div class="panelKontaktowyInfo">Tytuł wiadomości</div>
                            <!-- Text input -->
                            <textarea class="scrollabletextbox" placeholder="Tekst wiadomości" name="wiadomoscText"><?php if ((isset($_smarty_tpl->tpl_vars['wiadomoscTextZap']->value))) {
echo $_smarty_tpl->tpl_vars['wiadomoscTextZap']->value;
}?></textarea>

                            <div class="error">
                                <?php if ((isset($_smarty_tpl->tpl_vars['e_text']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_text']->value;?>
 <?php }?>
                            </div>

                            <div class="panelKontaktowyInfo">Email kontaktowy</div>
                            <!-- Contacts details input -->
                            <input type="text" placeholder="Podaj swojego emaila, na którego otrzymasz odpowiedź zwrotną" value="<?php if ((isset($_smarty_tpl->tpl_vars['emailKontaktZap']->value))) {
echo $_smarty_tpl->tpl_vars['emailKontaktZap']->value;
}?>" name="emailKontakt"/>
                            
                            <div class="error">
                                <?php if ((isset($_smarty_tpl->tpl_vars['e_emailKontakt']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_emailKontakt']->value;?>
 <?php }?>
                            </div>
                        
                            
                            <div class="container-fluid">
                                <div class="row">
                                                                        <div class="col-sm-5 col-md-4 col-lg-3 px-0">
                                        <div class="uzytkownikInfo">Użytkownik: </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="uzytkownikDane"><?php if ((isset($_smarty_tpl->tpl_vars['login']->value))) {
echo $_smarty_tpl->tpl_vars['login']->value;
}?></div>
                                    </div>
                                </div>
                            </div>
                            

                            <!-- Save button  -->
                            <input type="submit" value="Wyślij" name="wyslijWiadomoscKontaktowa"/>
                            </form> 
                        
                            <form  action="index.php" method="post">
                            <!-- Cancel button  -->
                            <input type="submit" value="Anuluj" name="anulujDodajArtykul"/>
                        </form>
                    </diV>
                </diV>
            </diV>
        </diV>    
    </main>
                            

	<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
