<div class="container">
       <!-- row class is taken from bootstrap and it's amazing -->
<div class="row">    
<div class="col-8">
<h1 class="heading">Questions</h1>
<?php

include("./common/db.php");

if(isset($_GET["c-id"])){
$result = $conn->prepare("select * from questions where catagory_id = $cid");
}else{
$result = $conn->prepare("select * from questions");
}

$result->execute();
foreach($result as $row){
       $title = $row['title'];
       $id = $row['id'];
       echo "<div class='row question-list'>
       <h4><a href='?q-id=$id'>$title</a></h4>
       </div>";
}


?>
</div>
<div class="col-4">
<?php include("categorylist.php"); ?>
</div>
</div>
</div>