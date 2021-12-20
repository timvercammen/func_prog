<?php
require_once "database.php";

function MakeSelectLand()
{
    $sql = "select * from land";
    $rows = GetData($sql);

    $myselect = "";

    $myselect .= "<select id=lan_id name=lan_id>";

    foreach ( $rows as $row )
    {
        $myselect .= "<option value='" . $row['lan_id'] . "'>" . $row['lan_land'] . "</option>";
    }

    $myselect .= "</select>";

    print $myselect;
}