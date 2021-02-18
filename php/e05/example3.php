<?php

class SQL_Row_Value
{
    private $_table;

    // some PHP code...

    function getValue($id=0)
    {
        $sql = "SELECT * FROM {$this->_table} WHERE id = " . (int)$id;
//        $result = mysql_query($sql, $DBFactory::getConnection());
//        $row = mysql_fetch_assoc($result);

//        return $row['value'];
        print "SQL executed:{$sql}\n";
        return $sql;
    }
}

class Example3
{
    protected $obj;

    function __construct()
    {
        // some PHP code...
    }

    function __toString()
    {
        if (isset($this->obj)) return $this->obj->getValue();
    }
}

// some PHP code...

$user_data = unserialize($_POST['data']);
$trigger_the_tostring_converting_object_to_string = "received data: " . $user_data ;

// some PHP code...