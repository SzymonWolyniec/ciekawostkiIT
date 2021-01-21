<?php
/* Smarty version 3.1.36, created on 2021-01-21 16:41:28
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\edycjaUzytkownik.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6009a0a85524d3_19376604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b77064deb69f7f683a66b5fda73aefbe4da4576b' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\edycjaUzytkownik.tpl',
      1 => 1611243022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navBarLogged.tpl' => 1,
  ),
),false)) {
function content_6009a0a85524d3_19376604 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleEdycjaUzytkownik.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<title>Ciekawostki IT - edycja użytkownika</title>
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
                    <div class="oknoProfilu">

                        <div class="profilUzytkownika">Edycja profilu <u>innego</u> użytkownika</div>
                        <div class="status"><?php if ((isset($_smarty_tpl->tpl_vars['noweDaneZapisane']->value))) {
echo $_smarty_tpl->tpl_vars['noweDaneZapisane']->value;
}?></div>
                        <div class="statusError"><?php if ((isset($_smarty_tpl->tpl_vars['noweDaneNieZapisane']->value))) {
echo $_smarty_tpl->tpl_vars['noweDaneNieZapisane']->value;
}?></div>
                        <div class="statusError"><?php if ((isset($_smarty_tpl->tpl_vars['brakUzytkownikaId']->value))) {
echo $_smarty_tpl->tpl_vars['brakUzytkownikaId']->value;
}?></div>
                        
                        <?php if (!(isset($_smarty_tpl->tpl_vars['brakUzytkownikaId']->value))) {?>
                            <form method="post">
                                <!-- ID -->
                                <div class="IDEdycja" name="id"><?php if ((isset($_smarty_tpl->tpl_vars['id']->value))) {?>ID: <?php echo $_smarty_tpl->tpl_vars['id']->value;
}?></div>
                                
                                <!-- Mail input -->
                                <input type="text" placeholder="Login" value="<?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_login']->value))) {
echo $_smarty_tpl->tpl_vars['edycjaDanych_login']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['login']->value))) {
echo $_smarty_tpl->tpl_vars['login']->value;
}?>" name="login"/>
                                <div class="error">
                                <?php if ((isset($_smarty_tpl->tpl_vars['e_login']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_login']->value;?>
 <?php }?>
                                </div>

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
                                <input type="number" placeholder ="Wiek" value ="<?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_wiek']->value))) {
echo $_smarty_tpl->tpl_vars['edycjaDanych_wiek']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['wiek']->value))) {
echo $_smarty_tpl->tpl_vars['wiek']->value;
}?>" name="wiek"/>
                                <div class="error">
                                <?php if ((isset($_smarty_tpl->tpl_vars['e_wiek']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_wiek']->value;?>
 <?php }?>
                                </div>

                                <div class="ostrzezenia">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-5 px-0 ostrzezeniaText">Ostrzeżenia (<?php if ((isset($_smarty_tpl->tpl_vars['ostrzezenia']->value))) {
echo $_smarty_tpl->tpl_vars['ostrzezenia']->value;
}?>):</div>
                                            
                                            <div class="col-sm-4 col-lg-3 px-0 my-auto">
                                                <select name="ostrzezenia" class="ostrzezeniaDropDown" id="ostrzezenieWybor" onchange=" document.getElementById('ostrzezenieWybor').value=this.options[this.selectedIndex].value">
                                                    <option value="0" <?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_ostrzezenia']->value))) {
if ($_smarty_tpl->tpl_vars['edycjaDanych_ostrzezenia']->value == 0) {?>selected<?php }
} elseif ((isset($_smarty_tpl->tpl_vars['ostrzezenia']->value))) {
if ($_smarty_tpl->tpl_vars['ostrzezenia']->value == 0) {?>selected<?php }
}?>>0</option>
                                                    <option value="1" <?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_ostrzezenia']->value))) {
if ($_smarty_tpl->tpl_vars['edycjaDanych_ostrzezenia']->value == 1) {?>selected<?php }
} elseif ((isset($_smarty_tpl->tpl_vars['ostrzezenia']->value))) {
if ($_smarty_tpl->tpl_vars['ostrzezenia']->value == 1) {?>selected<?php }
}?>>1</option>
                                                    <option value="2" <?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_ostrzezenia']->value))) {
if ($_smarty_tpl->tpl_vars['edycjaDanych_ostrzezenia']->value == 2) {?>selected<?php }
} elseif ((isset($_smarty_tpl->tpl_vars['ostrzezenia']->value))) {
if ($_smarty_tpl->tpl_vars['ostrzezenia']->value == 2) {?>selected<?php }
}?>>2</option>
                                                    <option value="3" <?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_ostrzezenia']->value))) {
if ($_smarty_tpl->tpl_vars['edycjaDanych_ostrzezenia']->value == 3) {?>selected<?php }
} elseif ((isset($_smarty_tpl->tpl_vars['ostrzezenia']->value))) {
if ($_smarty_tpl->tpl_vars['ostrzezenia']->value == 3) {?>selected<?php }
}?>>3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="funkcja">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-5 px-0 funkcjaText">Funkcja (<?php if ((isset($_smarty_tpl->tpl_vars['funkcjaText']->value))) {
echo $_smarty_tpl->tpl_vars['funkcjaText']->value;
}?>):</div>
                                            
                                            <div class="col-sm-4 col-lg-3 px-0 my-auto">
                                                <select name="funkcja" class="ostrzezeniaDropDown" id="funkcjaWybor" onchange=" document.getElementById('funkcjaWybor').value=this.options[this.selectedIndex].value">
                                                    <option value="1" <?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_funkcja']->value))) {
if ($_smarty_tpl->tpl_vars['edycjaDanych_funkcja']->value == 1) {?>selected<?php }
} elseif ((isset($_smarty_tpl->tpl_vars['funkcja']->value))) {
if ($_smarty_tpl->tpl_vars['funkcja']->value == 1) {?>selected<?php }
}?>>Użytkownik</option>
                                                    <option value="3" <?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_funkcja']->value))) {
if ($_smarty_tpl->tpl_vars['edycjaDanych_funkcja']->value == 3) {?>selected<?php }
} elseif ((isset($_smarty_tpl->tpl_vars['funkcja']->value))) {
if ($_smarty_tpl->tpl_vars['funkcja']->value == 3) {?>selected<?php }
}?>>Moderator</option>
                                                    <option value="4" <?php if ((isset($_smarty_tpl->tpl_vars['edycjaDanych_funkcja']->value))) {
if ($_smarty_tpl->tpl_vars['edycjaDanych_funkcja']->value == 4) {?>selected<?php }
} elseif ((isset($_smarty_tpl->tpl_vars['funkcja']->value))) {
if ($_smarty_tpl->tpl_vars['funkcja']->value == 4) {?>selected<?php }
}?>>SuperAdmin</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
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
                                <div class="error">
                                <?php if ((isset($_smarty_tpl->tpl_vars['e_haslo2']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_haslo2']->value;?>
 <?php }?>
                                </div>

                                <div class="potwierdzInfo">Potwierdź</div>

                                <!-- Admin password input -->
                                <input type="password" placeholder ="Twoje hasło (SuperAdmin lub moderator)" name="hasloAdmin"/>
                                <div class="error">
                                <?php if ((isset($_smarty_tpl->tpl_vars['e_hasloAdmin']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['e_hasloAdmin']->value;?>
 <?php }?>
                                </div>

                                <!-- Save button  -->
                                <input type="submit" value="Zapisz" name="zapiszDane"/>
                            </form> 
                        <?php }?>
                        <form  action="uzytkownicy.php" method="post">
                            <!-- Cancel button  -->
                            <input type="submit" value="Wróc" name="anulujZapiszDane"/>
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
