<?php
/* Smarty version 3.1.36, created on 2021-01-20 00:48:12
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60076fbc7f2c25_65722257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd23905519fe3b24c00a1b858f8110ea5c67c133c' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\test.tpl',
      1 => 1611100084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navBarStart.tpl' => 1,
  ),
),false)) {
function content_60076fbc7f2c25_65722257 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
	<?php $_smarty_tpl->_subTemplateRender('file:navBarStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</header>

<button onclick="create()">Create Heading</button>
    <?php echo '<script'; ?>
>
      function create() {
        var h1 = document.createElement('h1');
        h1.textContent = "New Heading!!!";
        h1.setAttribute('class', 'note');
        document.body.appendChild(h1);
      }
    <?php echo '</script'; ?>
>

    <?php
$_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby'] = new Smarty_Variable(array());
if (true) {
for ($_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] <= 10; $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['index']++){
?>

        <br>
        Something
            
    <?php
}
}
?>


    
    

<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                <?php
$_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby'] = new Smarty_Variable(array());
if (true) {
for ($_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] <= 15; $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['index']++){
?>
                    <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] : null);?>
" role="tab" aria-controls="home"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] : null);?>
</a>
                <?php
}
}
?>
            </div>
        </div>

        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <?php
$_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby'] = new Smarty_Variable(array());
if (true) {
for ($_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] <= 15; $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['index']++){
?>
                <br>
                    <div class="tab-pane fade show active" id="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] : null);?>
" role="tabpanel" aria-labelledby="list-home-list">Bla bla bla bla</div>
                <?php
}
}
?>
            </div>
        </div>
    </div>
</div>





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
