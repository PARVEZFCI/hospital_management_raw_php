<?php  include("header.php")   ?>
<br><br>
<div class="col col-lg-3"></div>

<div class="col col-lg-6" style="box-shadow:1px 1px 5px grey">
<br>
<h3> <span style="color:red;font-weight:700"> TUSHAR'S<sup>+</sup> </span> | Patient Registration </h3>
<hr>

<br>
<form action="registersql.php" method="post">
<input type="text" name="fname" id="" placeholder="Enter Full Name " class="form-control"> <br>
<input type="text" name="email" id="" placeholder="Enter Email  " class="form-control">  <br>
<input type="text" name="username" id="" placeholder="Create Username " class="form-control">  <br>
<input type="text" name="password" id="" placeholder="Create Password " class="form-control">  <br>
<label for="">Gender </label><br>
<input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female <br> <br>
<input type="text" name="address" id="" placeholder="Enter Your Address "  class="form-control"> <br>
<select name="city" id="" class="form-control">
  <option value="">Select City </option>
  <option value="Feni"> Feni </option>
  <option value="Dhaka">Dhaka </option>
  <option value="Chittagong"> Chittagong </option>
  <option value="Comilla"> Comilla </option>
</select>
<br>
<input type="submit" value="Register " name="submit" class="btn btn-success pull-right">
<br>
<hr>
<center>
If you have an account ? <a href="patient_login.php"> Sign in  </a>.
</center>
<br><br><br>
</form>

</div>

<div class="col col-lg-3"></div>

<?php  include("footer.php")   ?>