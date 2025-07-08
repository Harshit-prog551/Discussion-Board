
<select name="catagory" id="catagory" class="form-control">
    <option value="">Select A Category</option>
    <?php
    include("./common/db.php"); 
    $result = $conn->prepare("select * from catagory");
    $result->execute();
    foreach($result as $row){
        $name =ucfirst($row['name']);
        $id = $row['id'];
        echo "<option value=$id>$name</option>";
    }
    ?>
</select>
