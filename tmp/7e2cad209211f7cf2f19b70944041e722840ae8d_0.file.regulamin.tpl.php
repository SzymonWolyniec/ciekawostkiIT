<?php
/* Smarty version 3.1.36, created on 2021-01-20 14:14:15
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\regulamin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60082ca7efc344_39345129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e2cad209211f7cf2f19b70944041e722840ae8d' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\regulamin.tpl',
      1 => 1611148398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navBarLogged.tpl' => 1,
    'file:navBarStart.tpl' => 1,
  ),
),false)) {
function content_60082ca7efc344_39345129 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
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
		<?php if ((isset($_smarty_tpl->tpl_vars['zalogowany']->value))) {?> 
			<?php $_smarty_tpl->_subTemplateRender('file:navBarLogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_subTemplateRender('file:navBarStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php }?>
        
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
