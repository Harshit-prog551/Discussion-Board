<div class="container">
    <h1 class="heading">Login</h1>
<form  action="server/request.php" method="post">

  <div class="col-6 offset-sm-3 margin_bottom-15">
    <label for="email" class="form-label">User e-mail</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Enter user e-mail">
  </div>
  
  <div class="col-6 offset-sm-3 margin_bottom-15">
    <label for="password" class="form-label">User password</label>
    <input type="password" name="password" class="form-control" id="password " placeholder="Enter user password">
  </div>

  <div class="col-6 offset-sm-3 margin_bottom-15">
    <button type="submit" name="login" class="btn btn-primary">Login</button>
  </div>
</form>

</div>