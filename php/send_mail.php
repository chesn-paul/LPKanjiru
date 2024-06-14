<?php

$errors = [];

if (!empty($_POST)) {

    if (!isset($_POST['email'])) {
        $email = "";
    }else{
        $email = $_POST['email'];
    }

}

if (empty($errors)) {
    $db_connection = pg_connect("host=aws-0-eu-central-1.pooler.supabase.com port=6543 dbname=postgres user=postgres.fobthltakiuacjexyuno password=4113466eE@@");
    $sql = "INSERT INTO liste(mail) VALUES ('".$email."')";
    pg_query($db_connection, $sql);

} else {

   $allErrors = join('<br/>', $errors);
   $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
}

echo '<html><head><script type="text/javascript">function load(){window.location.href = "http://kanjiru.co";}</script></head><body onload="load()"></body></html>'; 

?>