<div class="container">
    <h1 class="heading">Sign Up</h1>
<form method="post" action="server/request.php">
  <div class="col-6 offset-sm-3 margin_bottom-15">
    <label for="username" class="form-label">User Name</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter user name">
  </div>

  <div class="col-6 offset-sm-3 margin_bottom-15">
    <label for="email" class="form-label">User e-mail</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Enter user e-mail">
  </div>
  
  <div class="col-6 offset-sm-3 margin_bottom-15">
    <label for="password" class="form-label">User password</label>
    <input type="password" name="password" class="form-control" id="password " placeholder="Enter user password">
  </div>

  <div class="col-6 offset-sm-3 margin_bottom-15">
    <label for="address" class="form-label">User Address</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="Enter user address">
  </div>

  <div class="col-6 offset-sm-3 margin_bottom-15">
    <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
  </div>
</form>

</div>