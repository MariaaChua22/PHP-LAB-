<?php
setcookie("firstname", "Ma. Allison Grace", time() + 10);
setcookie("middlename", "Natividad", time() + 20);
setcookie("last_name", "See", time()+ 30);

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";
?>

<?php
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

?>

