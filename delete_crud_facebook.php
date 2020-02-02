<?php
 try{
      $conn = new PDO("mysql:host=localhost;dbname=db_facebook", "root", "");
      $create_id=$_GET['create_id'];
      $sql="DELETE FROM tbl_facebook WHERE create_id=:sid";
      $data=$conn->prepare($sql);
      $data->bindParam(":sid", $create_id);
      $data->execute();
      header("location:view_facebook_account.php");
 } catch (Exception $ex) {

 }




