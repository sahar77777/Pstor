<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
        $addres = stripslashes($_REQUEST['addres']);
		$addres = mysqli_real_escape_string($con,$addres);
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        $number = stripslashes($_REQUEST['number']);
        $number = mysqli_real_escape_string($con, $number);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, addres,email, trn_date,namemahsol,tedad) VALUES ('$username', '".md5($password)."','$addres', '$email', '$trn_date','$name','$number')";
           $result = mysqli_query($con,$query);
        if($result){
            header('location: index.php?page=placeorder');
        }
    }else{
?>
<div class="form">
<center><form name="registration" action="" method="post" style="border:2px ;">
<div style="width:450px; height:450px; background-color:#f08080; ">
    </br>
<input type="text" name="username" placeholder="Username"  required  />
    </br>
    </br>

<input type="email" name="email" placeholder="Email" required />
    </br>
    </br>
  
<input type="password" name="password" placeholder="Password" required />
    </br>
    </br>
<textarea name="addres" placeholder="Addres" rows="4"></textarea> 
</br>
</br>
    </br>
<label for="name">لطفا نام محصول خود را وارد کنید &nbsp;&nbsp;</label>
    </br>
    <select name="name" id="name">
        <option value="gardanband">gardanband</option>
        <option value="gardanband morvarid">gardanband morvarid</option>
        <option value="gardanband yaghot abi">gardanband yaghot abi</option>
        <option value="angoshtar ziba">angoshtar ziba</option>
    </select>
</br>
</br>
    <label for="number">لطفا تعداد محصول منتخب را وارد کنید&nbsp;</label>
    </br>
    <input type="text" name="number" placeholder="number" required />
    </br>
    </br></div>
    </br>
    </br>
<input type="submit" name="submit" value="Register" />
</form>
</div>
</center>
<?php } ?>
</body>
</html>
