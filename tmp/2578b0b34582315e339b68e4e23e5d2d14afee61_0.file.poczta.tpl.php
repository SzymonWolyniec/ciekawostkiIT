<?php
/* Smarty version 3.1.36, created on 2021-01-22 23:33:41
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\poczta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600b52c5f0f4b6_32778056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2578b0b34582315e339b68e4e23e5d2d14afee61' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\poczta.tpl',
      1 => 1611354809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navBarLogged.tpl' => 1,
    'file:uzytkownicyCollapsible.tpl' => 1,
  ),
),false)) {
function content_600b52c5f0f4b6_32778056 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
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
		<?php $_smarty_tpl->_subTemplateRender('file:navBarLogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 m-auto">
					<div class="oknoPoczta">

						<div class="pocztaTxt">Poczta (<?php echo count($_smarty_tpl->tpl_vars['pocztaFromDB']->value);?>
)</div>

                        <form method="post">
                            <!-- Expand button  -->
                            <input type="submit" class="test" value="Rozwiń wszystko" name="expand"/>
                            <!-- Collapse button  -->
                            <input type="submit" value="Zwiń wszystko" name="collapse"/>
                        </form>

                        <div class="oknoRozwijanychPrzyciskow">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pocztaFromDB']->value, 'wiadomosc');
$_smarty_tpl->tpl_vars['wiadomosc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiadomosc']->value) {
$_smarty_tpl->tpl_vars['wiadomosc']->do_else = false;
?>

                                <button class="collapsible">
                                    [<?php echo $_smarty_tpl->tpl_vars['wiadomosc']->value['sendDate'];?>
]&nbsp&nbsp&nbsp<?php echo $_smarty_tpl->tpl_vars['wiadomosc']->value['title'];?>

                                </button>
                                <div class="content">
                                    <div class="wiadomosc">

                                        <div class="container-fluid">
                                            
                                            <div class="row no-gutters">
                                                                                                <div class="col-sm-5 col-md-4 col-lg-3 ">
                                                    <div class="uzytkownikInfo">Nadawca:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane"><?php echo $_smarty_tpl->tpl_vars['wiadomosc']->value['login'];?>
</div>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                                                                <div class="col-sm-5 col-md-4 col-lg-3 ">
                                                    <div class="uzytkownikInfo">Nadawca ID:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane"><?php echo $_smarty_tpl->tpl_vars['wiadomosc']->value['userId'];?>
</div>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                                                                    <div class="col-sm-5 col-md-4 col-lg-3 ">
                                                    <div class="uzytkownikInfo">Wiadomość:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane"><?php echo $_smarty_tpl->tpl_vars['wiadomosc']->value['text'];?>
</div>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                                                                    <div class="col-sm-5 col-md-4 col-lg-3">
                                                    <div class="uzytkownikInfo">Email kontaktowy:</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="uzytkownikDane"><?php echo $_smarty_tpl->tpl_vars['wiadomosc']->value['emailContact'];?>
</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>				


        <?php $_smarty_tpl->_subTemplateRender('file:uzytkownicyCollapsible.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
