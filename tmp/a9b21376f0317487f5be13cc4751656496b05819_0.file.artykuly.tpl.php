<?php
/* Smarty version 3.1.36, created on 2021-01-23 01:11:08
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\artykuly.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600b699c347542_24355310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9b21376f0317487f5be13cc4751656496b05819' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\artykuly.tpl',
      1 => 1611359247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navBarLogged.tpl' => 1,
  ),
),false)) {
function content_600b699c347542_24355310 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
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
		<?php $_smarty_tpl->_subTemplateRender('file:navBarLogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>


    <main>
        <div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 col-md-10 col-sm-12 m-auto">
                    <div class="oknoArtykul">

                    <div class="artykulyInfo">Artykuły</div>

                        <div class="container">
                            <div class="row"> <!-- no-gutters -->

                            <?php if ((isset($_smarty_tpl->tpl_vars['artykulyFromDB']->value))) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artykulyFromDB']->value, 'artykul', false, NULL, 'myFore', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['artykul']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['artykul']->value) {
$_smarty_tpl->tpl_vars['artykul']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myFore']->value['index']++;
?>

                                <div class="col-md-6 col-lg-4 py-3">
                                    <div class="customBorder">
                                        <figure class="customBorder">
                                            <a href="artykulSzczegoly.php?id=<?php echo $_smarty_tpl->tpl_vars['artykul']->value['id'];?>
">
                                            
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['imagesTab']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_myFore']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myFore']->value['index'] : null)];?>
">
                                            </a>
                                            <figcaption class="artykulTytul"><?php echo $_smarty_tpl->tpl_vars['artykul']->value['title'];?>
</figcaption>
                                        </figure>
                                    </div>
                                </div>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
					
                            </div>
                        </div>
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
