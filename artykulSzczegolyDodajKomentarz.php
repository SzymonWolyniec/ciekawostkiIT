<?php

if(isset($_POST['dodajKomentarz']))
{
    $dodajKomentarzTytul = $_POST['dodajKomentarzTytul'];
    $dodajKomentarzText = $_POST['dodajKomentarzText'];
    $smarty->assign('dodajKomentarzTytulZap', $_POST['dodajKomentarzTytul']);
    $smarty->assign('dodajKomentarzTextZap', $_POST['dodajKomentarzText']);
    $autorId = $_SESSION['id'];
    $wszystko_Ok = true;

    if((strlen($dodajKomentarzTytul)<2))
    { 
        $wszystko_Ok=false;
        $smarty->assign('e_komentarzTytul',"Tytuł musi składać się z przynajmniej 2 znaków");
    }

    if((strlen($dodajKomentarzText)<10))
    { 
        $wszystko_Ok=false;
        $smarty->assign('e_komentarzText',"Komentarz musi składać się z przynajmniej 10 znaków");
    }

    if($wszystko_Ok)
    {
        require_once"connectDB.php";
        mysqli_report(MYSQLI_REPORT_STRICT);
        // Sprawdzenie połączenia z BD
        try
            {
                $polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
                
                if($polaczenie->connect_errno!=0)
                {
                    throw new Exception(mysqli_connect_errno());
                }
                else
                {
                    //Przesłanie danych do bazy
                    if ($polaczenie->query("INSERT INTO komentarze VALUES (NULL, '$articleId', '$dodajKomentarzTytul', '$dodajKomentarzText', '$autorId', now(), '$autorId', now())"))
                    {
                        

                        if ($polaczenie->query("UPDATE artykuly SET comments = comments + 1 WHERE id=$articleId"))
                        {
                            $_SESSION['poprawnieDodanoKomentarz']="Komentarz został dodany";
                            header('Location: artykulSzczegoly.php?id='.$articleId);
                            exit();
                        }
                        else
                        {
                            throw new Exception(mysqli_connect_errno());
                        }

                        
                    }
                    else
                    {
                        throw new Exception(mysqli_connect_errno());
                    }
                        
                    $polaczenie->close();	
                }		
            }
            catch(Exception $e)
            {
                $_SESSION['errorDBDevelopment'] = "Error: ".$e."\n";
                $_SESSION['errorDBPath'] = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
                header("Location: errorDB.php");
                exit();		
            } 
    }

}

if(isset($_SESSION['poprawnieDodanoKomentarz']))
{
    $smarty->assign('poprawnieDodanoKomentarz', $_SESSION['poprawnieDodanoKomentarz']);
    unset($_SESSION['poprawnieDodanoKomentarz']);
}

?>