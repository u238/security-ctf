<?php

include dirname(__FILE__) . "/../library/FancyElement.php";
include dirname(__FILE__) . "/../library/FancyTable.php";

use FancyList\FancyElement;
use FancyList\FancyTable;

if (!isset($_GET['tablename'])) {
    header('HTTP/1.0 400 Error');
    echo "specify a table name!!!";
    exit;
}

if (isset($_SESSION[$_GET['tablename']])) {
    $table = unserialize($_SESSION[$_GET['tablename']]);
} else {
    $table = new FancyTable($_GET['tablename']);
}

if (isset($_POST['elementtext'])) {
    $table->addElement(new FancyElement($_POST['elementtext']));
    $_SESSION[$_GET['tablename']] = serialize($table);
}

?>
<html>
<body>

<form action="index.php?page=fancylist.php&tablename=<?= $_GET['tablename'] ?>" method="POST">
    <input type="text" name="elementtext">
    <button>ADD</button>
</form>

<?php print $table; ?>

</body>
</html>
