<?php
$id = isset($_GET["id"])?  $_GET["id"] : null;
echo $id;
if ( $id != null )
{
    delete($id);
    header("Location:/seller");
}