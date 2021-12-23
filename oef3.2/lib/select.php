<?php
require_once "pdo.php";

function MakeSelect( $fieldname, $value, $sql, $list_fields = [], $optional = true )
{
    $rows = GetData($sql);

    $myselect = "";

    $myselect .= "<select id=$fieldname name=$fieldname>";

    if ( $optional ) $myselect .= "<option></option>";

    foreach ( $rows as $row )
    {
        if($row[$list_fields[0]] == $value ) $selected = "selected";
        else $selected = "";

        $myselect .= "<option value='" . $row[$list_fields[0]] . "'>" . $row[$list_fields[1]] . "</option>";
    }

    $myselect .= "</select>";

    return $myselect;
}

