
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"><?php
    include_once "connection.php";
    $query = "SELECT * FROM  student";
?>
<table>
    <form action="#" method ="POST">
        <label>Name:</label>
        <input type="text" name="fullname" class="form-control"><br>

        <label>Province</label>
        <input type="text" name="province" class="form-control">
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>

        </select><br>

        <button type="submit" name="submit">Create</button>
    </form>
</table>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['fullname'];
    $province= $_POST['province'];
    $gender = $_POST['gender'];
    $query = "INSERT INTO student(fullname,province,gender) VALUE ('$name','$province','$gender')";
    $data  = mysqli_query($connect,$query);
    if($data){
        header('location:index.php');
    }else{
        echo "cannot insert";
    }
}

?>