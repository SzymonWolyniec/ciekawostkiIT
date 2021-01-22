<?php
/* Smarty version 3.1.36, created on 2021-01-23 00:09:16
  from 'E:\Programy\Xampp\htdocs\ciekawostkiIT\views\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600b5b1c647898_52990495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31761ae822d6cd073b405152110174bf7efdbf70' => 
    array (
      0 => 'E:\\Programy\\Xampp\\htdocs\\ciekawostkiIT\\views\\profil.tpl',
      1 => 1611356953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navBarLogged.tpl' => 1,
  ),
),false)) {
function content_600b5b1c647898_52990495 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_CSS/normalize.css">
	<link rel="stylesheet" href="style_CSS/styleProfil.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<title>Ciekawostki IT - profil użytkownika</title>

</head>

<body>
    
    <header>
        <?php $_smarty_tpl->_subTemplateRender('file:navBarLogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>
	
    
    
	<main>
        <?php if (!(isset($_smarty_tpl->tpl_vars['edytujDane']->value))) {?>    

		<div class="container">
			<div class="row">
				<div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 m-auto">
                    <div class="oknoProfilu">
                        <div class="profilUzytkownika">Profil użytkownika</div>
                            
                        <div class="container">

                            <div class="row">
                                                                <div class="col-sm-4 col-md-3 offset-md-2 offset-lg-3">
                                <div class="profilInfo">Login:</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profilDane"><?php if ((isset($_smarty_tpl->tpl_vars['login']->value))) {
echo $_smarty_tpl->tpl_vars['login']->value;
}?></div>
                                </div>
                            </div>


                            <div class="row">
                                                                <div class="col-sm-4 col-md-3 offset-md-2 offset-lg-3">
                                <div class="profilInfo">Email:</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profilDane"><?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {
echo $_smarty_tpl->tpl_vars['email']->value;
}?></div>
                                </div>
                            </div>


                            <div class="row">
                                                                <div class="col-sm-4 col-md-3 offset-md-2 offset-lg-3">
                                <div class="profilInfo">Imię:</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profilDane"><?php if ((isset($_smarty_tpl->tpl_vars['imie']->value))) {
echo $_smarty_tpl->tpl_vars['imie']->value;
}?></div>
                                </div>
                            </div>


                            <div class="row">
                                                                <div class="col-sm-4 col-md-3 offset-md-2 offset-lg-3">
                                <div class="profilInfo">Nazwisko:</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profilDane"><?php if ((isset($_smarty_tpl->tpl_vars['nazwisko']->value))) {
echo $_smarty_tpl->tpl_vars['nazwisko']->value;
}?></div>
                                </div>


                            </div>
                            <div class="row">
                                                                <div class="col-sm-4 col-md-3 offset-md-2 offset-lg-3">
                                <div class="profilInfo">Wiek:</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profilDane"><?php if ((isset($_smarty_tpl->tpl_vars['wiek']->value))) {
echo $_smarty_tpl->tpl_vars['wiek']->value;
}?></div>
                                </div>
                            </div>

                            <div class="row">
                                                                <div class="col-sm-4 col-md-3 offset-md-2 offset-lg-3">
                                <div class="profilInfo">Funkcja:</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profilDane"><?php if ((isset($_smarty_tpl->tpl_vars['funkcja']->value))) {
echo $_smarty_tpl->tpl_vars['funkcja']->value;
}?></div>
                                </div>
                            </div>

                            <div class="row">
                                                                <div class="col-sm-4 col-md-3 offset-md-2 offset-lg-3">
                                <div class="profilInfo">Ostrzeżenia:</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profilDane"><?php if ((isset($_smarty_tpl->tpl_vars['ostrzezenia']->value))) {
echo $_smarty_tpl->tpl_vars['ostrzezenia']->value;
}?></div>
                                </div>
                            </div>
                        </div>

                        <div class="status"><?php if ((isset($_smarty_tpl->tpl_vars['noweDaneZapisane']->value))) {
echo $_smarty_tpl->tpl_vars['noweDaneZapisane']->value;
}?></div>


                        <form  method="get">
                        <?php if (!(isset($_smarty_tpl->tpl_vars['blokada']->value))) {?>
                            <!-- Edit button  -->
                            <input type="submit" value="Edytuj dane" name="edytujDane"/>
                        <?php }?>
                            <!-- Logout button  -->
                            <input type="submit" value="Wyloguj" name="wyloguj"/>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <?php } else { ?>
        <?php if (!(isset($_smarty_tpl->tpl_vars['blokada']->value))) {?>
        <div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-9 col-sm-12 m-auto">
                    <div class="oknoProfilu">

                            <div class="profilUzytkownika">Edycja profilu użytkownika</div>
                            <form method="post">
                                <!-- input -->
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
}?>/> Akceptuje <a href='regulamin.php' target="blank">regulamin.</a>
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

                            <form  action="profil.php" method="post">
                                <!-- Cancel button  -->
                                <input type="submit" value="Anuluj" name="anulujZapiszDane"/>
                            </form>
                        </diV>
                    </diV>
                </diV>
            </diV>
        <?php }?> 
        <?php }?>       
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
