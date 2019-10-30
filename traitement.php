<?php
$formError = array();

$mailPattern = '/[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}/';

// if (isset($_POST['submit'])) {
   
//     if (!empty($_POST['mail'])) {
//         if (preg_match($mailPattern, $_POST['mail'])) {
//             $mail = $_POST['mail'];
//         } else {
//             $formError['mail'] = 'Saisie incorrect!!';
//         }
//     } else {
//         $formError['mail'] = 'Veuillez renseigner le champs "Email"';
//     }

    header("Location:contact_merci.php");
?>