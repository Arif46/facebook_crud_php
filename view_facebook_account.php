<?php
try{
   $conn = new PDO("mysql:host=localhost;dbname=db_facebook", "root", "");
    $sql="SELECT * FROM tbl_facebook";
    $data=$conn->prepare($sql);
    $data->execute();
} catch (Exception $ex) {

}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script>
            function checkDelete(){
                var msg=confirm("Are you sure to delete this!");
                if(msg){
                    return true;
                }else{
                    return false;
                }
            }
            
            </script>
    </head>
    <body>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">create id</th>
      <th scope="col">First name</th>
      <th scope="col">sur name</th>
      <th scope="col">mobile_number</th>
      <th scope="col">address</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      while($row=$data->fetch(PDO ::FETCH_ASSOC))
                  
      {
?>
    <tr>
      <th scope="row"><?php echo $row['create_id']?></th>
      <td><?php echo $row['frist_name']?></td>
      <td><?php echo $row['sur_name']?></td>
      <td><?php echo $row['mobile_number']?></td>
      <td><?php echo $row['address']?></td>
       <td>
           <a href="edit_facebook_crud.php?create_id=<?php echo $row['create_id']?> " class="btn btn-success">Edit</a>
       <a href="delete_crud_facebook.php?create_id=<?php echo $row['create_id']?> " onclick=" return checkDelete()" class="btn btn-info">Delete</a>
  </td>
    </tr>
      <?php }?>
  </tbody>
</table>
           <section>
                                <div class="container" style="margin-top: 80px">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="create_facebook_account.php" class="btn btn-danger">Add Information</a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="view_facebook_account.php" class="btn btn-info">view Information</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
        <script src="style/bootstrap.min.js" type="text/javascript"></script>
        
    </body>
</html>


