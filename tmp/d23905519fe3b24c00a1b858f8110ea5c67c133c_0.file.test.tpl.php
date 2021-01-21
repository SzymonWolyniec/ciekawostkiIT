<?php
/* Smarty version 3.1.36, created on 2021-01-20 13:45:02
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600825ce6d9c29_16863534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd23905519fe3b24c00a1b858f8110ea5c67c133c' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\test.tpl',
      1 => 1611146700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navBarStart.tpl' => 1,
  ),
),false)) {
function content_600825ce6d9c29_16863534 (Smarty_Internal_Template $_smarty_tpl) {
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

  <style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
  color: black;
}
</style>
</head>

<body>

<header>
	<?php $_smarty_tpl->_subTemplateRender('file:navBarStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</header>

    <?php
$_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby'] = new Smarty_Variable(array());
if (true) {
for ($_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] <= 10; $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['index']++){
?>

        <br>
        
            
    <?php
}
}
?>


    
    


    <?php
$_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby'] = new Smarty_Variable(array());
if (true) {
for ($_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] <= 15; $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['index']++){
?>
     <button class="collapsible">Open Section <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] : null);?>
</button>
    <div class="content">
      <p><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_sectionLiczby']->value['iteration'] : null);?>
. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <?php
}
}
?>



<?php echo '<script'; ?>
>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
<?php echo '</script'; ?>
>


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
