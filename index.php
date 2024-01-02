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
            echo 'data inserted successfully';
        }
        else{
            echo 'data not inserted';
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
        <form class="form m-3" action="index.php" method="post"  enctype="multipart/form-data">    
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
            <button type="submit" name="submit" class="btn btn-primary col-3 p-2">Submit</button>
            </div>         
        </form>
    </div>  
    <div class="card mb-3">
        <div class="row mt-1">
            <div class="row m-1 text text-dark">
                <div class="col">#</div>
                <div class="col">sname</div>
                <div class="col">scity</div>
                <div class="col">ssign</div>
                <div class="col">Action</div>
            </div>
            <hr>
            <?php
               $data=$sobj->dataview();                            
               while($row=mysqli_fetch_assoc($data)) {
            ?>
            <div class="row m-1">
                <div class="col">
                    <?php echo $row["rno"]; ?>
                </div>
                <div class="col">
                    <?php echo $row["sname"]; ?>
                </div>
                <div class="col">
                    <?php echo $row["scity"]; ?>
                </div>
                <div class="col">
                    <img src="<?php echo $row["s_sign"]; ?>" height="80px" width="80px">
                </div>
                <div class="col">
                   <a href="update.php?id=<?php echo $row['rno'];?>"><span class="btn btn-primary">update</span></a>
                    <form action="" method="POST">
                        <input type="number" name="rno" value="<?php echo $row['rno'];?>" hidden>
                        <button class="btn btn-danger" type="submit" name="delete"
                            onclick="return confirm('are you sure to delete')">delete</button>
                    </form>
                </div>
            </div>                
            <?php }?>         
        </div>
    </div>
   <?php  include 'js.php'; ?>
</body>
</html>