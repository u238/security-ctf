<?php

session_start();

if (isset($_GET['page'])) {
    include "pages/" . $_GET['page'];
    exit;
}

?>

<html>
<body>
Select an option:
<a href="index.php?page=fancylist.php&tablename=new">FancyList</a>
</body>
</html>