<?php
    if($rezultat = $polaczenie->query("SELECT id, title, text, createByUserId FROM komentarze WHERE articleId=$articleId ORDER BY id DESC"))
    {
        
        while ($wiersz = $rezultat->fetch_assoc())
        {
            $komentarzAutor = $wiersz['createByUserId'];
            if($rezultatAutor = $polaczenie->query("SELECT login FROM uzytkownicy WHERE id=$komentarzAutor"))
            {
                $wierszAutor = $rezultatAutor->fetch_assoc();
                
                $wiersz += ['autor' => $wierszAutor['login']];
                $komentarzeFromDB[] = $wiersz;
                $smarty->assign('komentarzeFromDB',$komentarzeFromDB);
            }
            else
            {
                throw new Exception(mysqli_connect_errno());
            }

            
        }
    }	
    else
    {
        throw new Exception(mysqli_connect_errno());
    }

?>