<?php
/* Smarty version 3.1.36, created on 2021-01-17 21:15:16
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60049ad416eca2_15292170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daea2627971821dc9a423ebd028932de1ee2db48' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\index.tpl',
      1 => 1610914513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60049ad416eca2_15292170 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="stylesheet" href="style_CSS/style.css">
	<title>Ciekawostki IT - logowanie</title>
	
</head>

<body>
	<div class="oknoLogowania">
		<form action="zaloguj.php" method="post">
					
			<div class="zaloguj">Zaloguj się!</div>
			<div class="zalogujOpis">Poznawaj ciekawostki z branży IT za darmo !</div>
					
				
			<input type="text" placeholder="Login" name="login" /> 
			<input type="password" placeholder ="Hasło" name="haslo"/> 
			

			<input type="submit" value="Zaloguj się" />
		</form>
        
        <div class="bladLogowanie">
                <?php if ((isset($_smarty_tpl->tpl_vars['bladLogowanie']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['bladLogowanie']->value;?>
 <?php }?>
        </div>

                
		
		<div class="rejestracjaLink">
			<a href="rejestracja.php" >Rejestracja - załóż darmowe konto!</a>
		</div>
		
		
		
	</div>

</body>
</html><?php }
}
