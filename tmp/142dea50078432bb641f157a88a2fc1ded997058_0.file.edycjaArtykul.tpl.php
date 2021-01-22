<?php
/* Smarty version 3.1.36, created on 2021-01-22 16:29:07
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\edycjaArtykul.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600aef43f2b6c7_66589904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '142dea50078432bb641f157a88a2fc1ded997058' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\edycjaArtykul.tpl',
      1 => 1611329183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navBarLogged.tpl' => 1,
  ),
),false)) {
function content_600aef43f2b6c7_66589904 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleEdycjaArtykul.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - edycja artykułu</title>
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
                    <div class="oknoEdytujArtykul">
                        <div class="edytujArtykul">Edytowanie artykułu</div>

                        <div class="status"><?php if ((isset($_smarty_tpl->tpl_vars['poprawnieEdytowanoArtykul']->value))) {
echo $_smarty_tpl->tpl_vars['poprawnieEdytowanoArtykul']->value;
}?></div>
                        <div class="statusError"><?php if ((isset($_smarty_tpl->tpl_vars['brakArtykuluId']->value))) {
echo $_smarty_tpl->tpl_vars['brakArtykuluId']->value;
}?></div>
                        
                        <?php if (!(isset($_smarty_tpl->tpl_vars['brakArtykuluId']->value))) {?>
    
                            <form method="post">
                            
                                <div class="artykulTytulInfo">Tytuł</div>
                                <!-- Title input -->
                                <input type="text" placeholder="Tytuł artykułu" value="<?php if ((isset($_smarty_tpl->tpl_vars['artykulTytulZap']->value))) {
echo $_smarty_tpl->tpl_vars['artykulTytulZap']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['artykulTytul']->value))) {
echo $_smarty_tpl->tpl_vars['artykulTytul']->value;
}?>" name="artykulTytul"/>
                                
                                <div class="error">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['e_tytul']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_tytul']->value;?>
 <?php }?>
                                </div>

                                <div class="artykulTextInfo">Tekst</div>
                                <!-- Text input -->
                                <textarea class="scrollabletextbox" placeholder="Tekst artykułu" name="artykulText"><?php if ((isset($_smarty_tpl->tpl_vars['artykulTextZap']->value))) {
echo $_smarty_tpl->tpl_vars['artykulTextZap']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['artykulText']->value))) {
echo $_smarty_tpl->tpl_vars['artykulText']->value;
}?></textarea>

                                <div class="error">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['e_text']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_text']->value;?>
 <?php }?>
                                </div>
                            
                                
                                <div class="container-fluid">
                                    <div class="row">
                                                                                <div class="col-sm-5 col-md-4 col-lg-3 px-0">
                                            <div class="autorInfo">Autor: </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="autorDane"><?php if ((isset($_smarty_tpl->tpl_vars['artykulAutor']->value))) {
echo $_smarty_tpl->tpl_vars['artykulAutor']->value;
}?></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                                                                <div class="col-sm-5 col-md-4 col-lg-3 px-0">
                                            <div class="edytowanyInfo">Edytowany przez: </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="edytowanyDane"><?php if ((isset($_smarty_tpl->tpl_vars['login']->value))) {
echo $_smarty_tpl->tpl_vars['login']->value;
}?></div>
                                        </div>
                                    </div>
                                </div>
                                

                                <!-- Save button  -->
                                <input type="submit" value="Zapisz" name="zapiszEdytujArtykul"/>
                            </form> 
                        <?php }?>

                            <form  action="<?php if ((isset($_smarty_tpl->tpl_vars['artykulId']->value))) {?>artykulSzczegoly.php?id=<?php echo $_smarty_tpl->tpl_vars['artykulId']->value;
} else { ?>artykuly.php<?php }?>" method="post">
                            <!-- Cancel button  -->
                            <input type="submit" value="Wróć" name="anulujEdytujArtykul"/>
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
