<?php
require "../../model/model.php";
$id= null;
isset($_POST["id"])? $id= $_POST["id"] : null;

if ($id!==null )
{
    delete($id);
    header("Location: ../../views/sellers/vview.seller.list.information.php");
}