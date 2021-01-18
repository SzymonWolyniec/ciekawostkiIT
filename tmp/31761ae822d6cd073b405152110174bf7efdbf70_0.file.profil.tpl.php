<?php
/* Smarty version 3.1.36, created on 2021-01-18 03:44:58
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6004f62aee9345_53419759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31761ae822d6cd073b405152110174bf7efdbf70' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\profil.tpl',
      1 => 1610937894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6004f62aee9345_53419759 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="stylesheet" href="style_CSS/styleProfil.css">
	<title>Ciekawostki IT - profil użytkownika</title>

</head>

<body>
	
    <?php if ((isset($_smarty_tpl->tpl_vars['test']->value))) {
echo $_smarty_tpl->tpl_vars['test']->value;
}?>
    
    
    
	<div class="oknoProfilu">
    <?php if (!(isset($_smarty_tpl->tpl_vars['edytujDane']->value))) {?>    
		<div class="profilUzytkownika">Profil użytkownika</div>
            
        <table>
            <tr>
                <th>Login:</th>
                <td><?php if ((isset($_smarty_tpl->tpl_vars['login']->value))) {
echo $_smarty_tpl->tpl_vars['login']->value;
}?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {
echo $_smarty_tpl->tpl_vars['email']->value;
}?></td>
            </tr>
            <tr>
                <th>Imię:</th>
                <td><?php if ((isset($_smarty_tpl->tpl_vars['imie']->value))) {
echo $_smarty_tpl->tpl_vars['imie']->value;
}?></td>
            </tr>
            <tr>
                <th>Nazwisko:</th>
                <td><?php if ((isset($_smarty_tpl->tpl_vars['nazwisko']->value))) {
echo $_smarty_tpl->tpl_vars['nazwisko']->value;
}?></td>
            </tr>
            <tr>
                <th>Wiek:</th>
                <td><?php if ((isset($_smarty_tpl->tpl_vars['wiek']->value))) {
echo $_smarty_tpl->tpl_vars['wiek']->value;
}?></td>
            </tr>
        </table>

        <div class="status"><?php if ((isset($_smarty_tpl->tpl_vars['noweDaneZapisane']->value))) {
echo $_smarty_tpl->tpl_vars['noweDaneZapisane']->value;
}?></div>


        <form  method="post">
            <!-- Edit button  -->
            <input type="submit" value="Edytuj dane" name="edytujDane"/>
            <!-- Logout button  -->
            <input type="submit" value="Wyloguj" name="wyloguj"/>
		</form>

    <?php } else { ?>

        <div class="profilUzytkownika">Edycja profilu użytkownika</div>
        <form method="post">
            <!-- Login input -->
            <div class="loginEdycja"><?php if ((isset($_smarty_tpl->tpl_vars['login']->value))) {
echo $_smarty_tpl->tpl_vars['login']->value;
}?></div>
			

            <!-- Mail input -->
			<input type="text" placeholder="E-mail" value="<?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_email']->value))) {
echo $_smarty_tpl->tpl_vars['edycjaDanych_email']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['email']->value))) {
echo $_smarty_tpl->tpl_vars['email']->value;
}?>" name="email"/>

			<div class="error">
			<?php if ((isset($_smarty_tpl->tpl_vars['e_email']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_email']->value;?>
 <?php }?>
            </div>
            
            <!-- Name input -->
			<input type="text" placeholder ="Imię" value ="<?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_imie']->value))) {
echo $_smarty_tpl->tpl_vars['edycjaDanych_imie']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['imie']->value))) {
echo $_smarty_tpl->tpl_vars['imie']->value;
}?>" name="imie"/>
			
            <div class="error">
			<?php if ((isset($_smarty_tpl->tpl_vars['e_imie']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_imie']->value;?>
 <?php }?>
            </div>
                
            <!-- Surname input -->
			<input type="text" placeholder ="Nazwisko" value ="<?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_nazwisko']->value))) {
echo $_smarty_tpl->tpl_vars['edycjaDanych_nazwisko']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['nazwisko']->value))) {
echo $_smarty_tpl->tpl_vars['nazwisko']->value;
}?>" name="nazwisko"/>
			
            <div class="error">
			<?php if ((isset($_smarty_tpl->tpl_vars['e_nazwisko']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_nazwisko']->value;?>
 <?php }?>
            </div>

            <!-- Age input -->
            <input type="number" placeholder ="Wiek" min="1" max="120" value ="<?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_wiek']->value))) {
echo $_smarty_tpl->tpl_vars['edycjaDanych_wiek']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['wiek']->value))) {
echo $_smarty_tpl->tpl_vars['wiek']->value;
}?>" name="wiek"/>
			<div class="error">
			<?php if ((isset($_smarty_tpl->tpl_vars['e_wiek']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_wiek']->value;?>
 <?php }?>
            </div>

            <div class="zmianaHaslaInfo">Zmiana hasła</div>

            <!-- Password input -->
			<input type="password" placeholder="Nowe hasło" value="<?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_haslo1']->value))) {
echo $_smarty_tpl->tpl_vars['edycjaDanych_haslo1']->value;
}?>" name="haslo1"/>
			
            <div class="error">
			<?php if ((isset($_smarty_tpl->tpl_vars['e_haslo']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_haslo']->value;?>
 <?php }?>
            </div>
            
            <!-- Password repeat input -->
            <input type="password" placeholder ="Powtórz nowe hasło" value ="<?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_haslo2']->value))) {
echo $_smarty_tpl->tpl_vars['edycjaDanych_haslo2']->value;
}?>" name="haslo2"/>
            

            <!-- Regulamin -->
			<label class="regulamin">
			<input type="checkbox" name="regulamin" <?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_regulamin']->value))) {
echo $_smarty_tpl->tpl_vars['edycjaDanych_regulamin']->value;
}?>/>Akceptuje <a href='regulamin.php' target="blank">regulamin.</a>
			</label>
			<div class="error">
			<?php if ((isset($_smarty_tpl->tpl_vars['e_regulaminCheck']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_regulaminCheck']->value;?>
 <?php }?>
            </div>

            <!-- Curren password input -->
            <input type="password" placeholder ="Obecne hasło" name="hasloOld"/>
            <div class="error">
			<?php if ((isset($_smarty_tpl->tpl_vars['e_hasloOld']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_hasloOld']->value;?>
 <?php }?>
            </div>

            <!-- Save button  -->
            <input type="submit" value="Zapisz" name="zapiszDane"/>
        </form> 

        <form  method="post">
            <!-- Cancel button  -->
            <input type="submit" value="Anuluj" name="anulujZapiszDane"/>
		</form>
    
    <?php }?>
	</div>
			
</body>
</html><?php }
}
