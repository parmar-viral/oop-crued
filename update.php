<?php

    include 'student_controller.php';/*
    //object creation
    $obj=new student();
    if(isset($_POST['submit'])){
        $sname=$_POST['sname'];
        $scity=$_POST['scity'];
        $file=$_FILES['s_sign']['name'];
        $tname=$_FILES['s_sign']['tmp_name'];
	    $folder="images/".$file;
	    move_uploaded_file($tname,$folder);
        $res=$obj->insert($sname,$scity,$folder);
        if($res){
            echo 'data updated successfully';
        }
        else{
            echo 'data not updated';
        }
    }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'css.php';
    ?>
</head>
<body>
    <div class="container w-50">
    <div class="card my-5 m-3 border border-dark">
        <?php include 'menu.php';?>
        <form class="form m-3" action="update.php" method="post"  enctype="multipart/form-data">    
            <div class="col-12">
            <label for="sname" class="form-label"></label>
            <input type="text" class="form-control p-2" placeholder="enter your name" name="sname">
            </div>   
            <div class="col-12">
            <label for="scity" class="form-label"></label>
            <input type="text" class="form-control p-2" placeholder="enter your city" name="scity">
            </div>   
            <div class="col-12 mb-3">
            <label for="s_sign" class="form-label"></label>
            <input type="file" class="form-control p-2" placeholder="enter your signature" name="s_sign">
            </div>     
            <div class="col-12 mb-1 btn btn-auto">
                <input type="number" name="rno" value="<?php echo $_POST['rno']; ?>" hidden>
            <button type="submit" name="update" class="btn btn-primary col-3 p-2">update</button>
            </div>         
        </form>
    </div>  
</div>
   <?php  include 'js.php'; ?>
</body>
</html>