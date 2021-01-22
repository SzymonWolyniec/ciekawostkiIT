<?php 
if(isset($_POST['zapiszEdytujArtykul']))
{
    $artykulTytul = $_POST['artykulTytul'];
    $artykulText = $_POST['artykulText'];
    $smarty->assign('artykulTytulZap', $_POST['artykulTytul']);
    $smarty->assign('artykulTextZap', $_POST['artykulText']);
    $lastEditUserId = $_SESSION['id'];
    $wszystko_Ok = true;

    if((strlen($artykulTytul)<2))
    { 
        $wszystko_Ok=false;
        $smarty->assign('e_tytul',"Tytuł musi składać się z przynajmniej 2 znaków");
    }

    if((strlen($artykulText)<10))
    { 
        $wszystko_Ok=false;
        $smarty->assign('e_text',"Tekst musi składać się z przynajmniej 10 znaków");
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
                    
                    $query = sprintf("UPDATE artykuly SET title='%s', text='%s',lastEditByUserId='%s',lastEditDate=now() WHERE id='$articleId'",
                            mysqli_real_escape_string($polaczenie,$artykulTytul),
                            mysqli_real_escape_string($polaczenie,$artykulText),
                            mysqli_real_escape_string($polaczenie, $lastEditUserId));

                    if ($polaczenie->query($query))
                    {
                        $_SESSION['poprawnieEdytowanoArtykul']="Artykuł został edytowany poprawnie !";
                        header('Location: edycjaArtykul.php?artykulId='.$articleId);
                        exit();
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
?>