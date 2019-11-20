
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"><?php
    include_once "connection.php";
    $id =$_GET['id'];
    $query = "SELECT * FROM  student WHERE id='$id'";
    $data = mysqli_query($connect,$query);
    foreach($data as $result){
?>
<table>
    <form action="#" method ="POST">
        <label>Name:</label>
        <input type="text" name="fullname" class="form-control" value="<?php echo $result['fullname'];?>"><br>

        <label>Province</label>
        <input type="text" name="province" class="form-control" value="<?php echo $result['province']?>">

        <select name="gender">
            <option <?php if($result['gender'] == "Male"){?> selected ="selected"<?php } ?> value="male">Male</option>
            <option <?php if($result['gender'] == "Female"){?> selected ="selected"<?php } ?> value="female">Female</option>

        </select><br>
        <button type="submit" name="edit">Edit</button>
    </form>
</table>
<?php
    }
?>
<?php
if(isset($_POST['edit'])){
    $name = $_POST['fullname'];
    $province= $_POST['province'];
    $gender = $_POST['gender'];
    $query = "UPDATE student SET fullname='$name',province='$province',gender='$gender' WHERE id ='$id'";
    $data  = mysqli_query($connect,$query);
    if($data){
        header('location:index.php');
    }else{
        echo "cannot insert";
    }
}

?>