<?php
	session_start();
	if(!isset($_SESSION['zalogowany']))
	{ 
		header('Location: index.php');
		exit();
    }

    if(isset($_POST['wyloguj']))
	{ 
		header('Location: wyloguj.php');
		exit();
    }
    
    
?>


<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="stylesheet" href="style_CSS/styleProfil.css">
	<title>Ciekawostki IT - profil użytkownika</title>

</head>

<body>
	
	<div class="oknoProfilu">
					
		
		
		    <div class="profilUzytkownika">Profil użytkownika</div>
            
            <table>
                <tr>
                    <th>Login:</th>
                    <td><?php echo $_SESSION['login'] ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?php echo $_SESSION['email'] ?></td>
                </tr>
                <tr>
                    <th>Imię:</th>
                    <td><?php echo $_SESSION['imie'] ?></td>
                </tr>
                <tr>
                    <th>Nazwisko:</th>
                    <td><?php echo $_SESSION['nazwisko'] ?></td>
                </tr>
                <tr>
                    <th>Wiek:</th>
                    <td><?php echo $_SESSION['wiek'] ?></td>
                </tr>
            </table>


        <form  method="post">
                        <!-- Logout button  -->
            <input type="submit" value="Wyloguj" name="wyloguj"/>
		</form>
	</div>
			
	

	
</body>
</html>