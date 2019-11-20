<?php
    include_once "connection.php";
?>
<?php
    $id  = $_GET['id'];
    $select = "SELECT * FROM student WHERE id =$id";
    $query = "DELETE FROM student  WHERE id ='$id'";
    $data  = mysqli_query($connect,$query);
    if($data){
        header('location:index.php');
    }else{
        echo "cannot insert";
    }
?>