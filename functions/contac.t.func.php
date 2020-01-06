<?php
    if(isset($_POST) && !empty($_POST['user_name']) && !empty($_POST['user_mail']) &&!empty($_POST['user_message']) ){
      extract($_POST);
        $destinataire='papesamba900@gmail.com';
        $expediteur=$user_name.'<'.$user_mail.'>';
      $mail=mail($destinataire,$expediteur,$user_message,'From: papesamba900@gmail.com');
      if($mail){
           echo'email envoyer';
      }else{
          echo'echec envoi mail';
      }
    }else{
        echo' formulaire non soumisoudes champs sont vide';
    }
?>