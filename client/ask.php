<div class="container">
    <h1 class="heading">Ask A Question</h1>
<form  action="server/request.php" method="post">

  <div class="col-6 offset-sm-3 margin_bottom-15">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Question">
  </div>

  <div class="col-6 offset-sm-3 margin_bottom-15">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control" id="description" placeholder="Enter description"></textarea>
  </div>

  <div class="col-6 offset-sm-3 margin_bottom-15">
    <label for="catagory" class="form-label">Catagory</label>
    <?php 
    include("catagory.php");
    ?>
  </div>

  <div class="col-6 offset-sm-3 margin_bottom-15">
    <button type="submit" name="ask" class="btn btn-primary">Ask Question</button>
  </div>

</form>

</div>