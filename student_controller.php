<?php
class student{
    function __construct(){
        
        $conn=mysqli_connect('localhost','root','','CRUED');
        $this->db=$conn;
        if(mysqli_connect_error()){
            echo 'failed to connect'.mysqli_connect_error();
        }else{
            //echo 'connection successfully';
        }
    }
    function insert($sname,$scity,$folder){
        $sql="INSERT INTO `student`(`sname`, `scity`, `s_sign`) VALUES ('$sname','$scity','$folder')";
        $res=mysqli_query($this->db,$sql);
        if($res){
            header("location:index.php");
        }else{
            echo 'data not inserted';
        }
    }
    function dataview(){
        $sql="SELECT * FROM `student`";
        $res=mysqli_query($this->db,$sql);
        return $res;
    }
    function delete(){

    }
}
//object creation 
$sobj=new student();
if(isset($_POST['submit'])){
    $sname=$_POST['sname'];
    $scity=$_POST['scity'];
    $file=$_FILES['s_sign']['name'];
    $tname=$_FILES['s_sign']['tmp_name'];
    $folder="images/$file";
    move_uploaded_file($tname,$folder);
    
    
   $sobj->insert($sname,$scity,$folder);
}
elseif(isset($_POST['delete'])){

}



?>