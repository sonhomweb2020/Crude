<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<?php
    include_once "connection.php";
?>
    <a href="insert.php" class="btn btn-info mt-5">Add New</a>
    <hr>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Province</th>
        <th>Gender</th>
        <th>action</th>
    </tr>
    <?php
        $query = "SELECT * FROM  student";
        $data = mysqli_query($connect,$query);
        foreach ($data as $result){
       
    ?>
    <tr>
        <td><?php echo $result['id']?></td>
        <td><?php echo $result['fullname']?></td>
        <td><?php echo $result['province']?></td>
        <td><?php echo $result['gender']?></td>
        <td>
            <a href="delete.php?id=<?php echo $result['id'];?>" class="btn btn-primary">Delete</a>
            <a href="edit.php?id=<?php echo $result['id'];?>" class="btn btn-info">Edit</a>
        </td>

    </tr>
    <?php
         }
    ?>
</table>