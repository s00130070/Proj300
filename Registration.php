<! doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Proj300/css/bootstrap.min.css">
	<title></title>
</head>
<style>
.error {color: #FF0000;}
</style>
<body>
 <!--<?php
	//PHP START CREATED BY S00130070
	//declaring variables
	//Normal Variables
	//$FName=$SName =$Email=$Address=$RegPlate="";
	//Error variables
	//$Namerr=$SName =$EmailErr=$AddressErr=$RegPlateErr="";
	////if($_Server["Request_Method"]=="Post"){
	//if(empty($_Post["firstName"])){
	//		$FNamerr="First Name is required";
		//}else{
		//	$FName = test_input($_POST["name"])
	//	}
	//}
	//	if($_Server["Request_Method"]=="Post"){
	//if(empty($_Post["surName"])){
		//	$FNamerr="surName is required";
		//}else{
			//$SName = test_input($_POST["name"])
		//}
	//}?>-->
  <?php
// define variables and set to empty values
$fNameErr = $sNameErr = $emailErr =$retypeEmailErr =$passwordErr =$reTypePasswordErr="";
$fName = $sName = $email = $retypeEmail=$password =$reTypePassword="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["fName"])) {
     $fNameErr = "Name Is Required";
   } else {
     $fName = test_input($_POST["fName"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$fName)) {
       $fNameErr = "Only letters and white space allowed";
     }
   }

   if (empty($_POST["sName"])) {
     $sNameErr = "Name is required";
   } else {
     $sName = test_input($_POST["sName"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$sName)) {
       $sNameErr = "Only letters and white space allowed";
     }
   }
  
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }
     if (empty($_POST["retypeEmail"])) {
     $retypeEmailErr = "Email is required";
   } else {
     $retypeEmail = test_input($_POST["retypeEmail"]);
     // check if e-mail address is well-formed
     if (!filter_var($retypeEmail, FILTER_VALIDATE_EMAIL)) {
       $retypeEmailErr = "Invalid email format";
     }
   }

   if (empty($_POST["password"])) {
     $passwordErr = "Password is required";
   } else {
     $password = test_input($_POST["password"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^(?=.*\d.*\d)[0-9A-Za-z]{8,}$/",$password)) {
       $passwordErr = "minimum 8 characters and 2 numbers";
     }
   }
    if (empty($_POST["reTypePassword"])) {
     $reTypePasswordErr = "Password Dont match";
   }
   elseif ($_POST["password"] != $_POST["reTypePassword"])  {
      $reTypePasswordErr = "Passwords dont match";
    } else {
     $reTypePassword = test_input($_POST["reTypePassword"]);
   
     
      

 
   }
 }
    


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
} 
?>
	<div id="container" class="span12 centered-text col-xs-4 col-sm-6">
		<h1 class="text-center">Tickets For You</h1>
		<div >
		<!--	<h1>h1. Bootstrap heading <small>Secondary text</small></h1>
			Name:<input id="txtName" type="text" name="name" class="">
			<span class="error"><?php print $NamErr;?></span>
			Email:<input id="txtEmail" type="text" name="email">
			<span class="error"><?php print $EmaileErr;?></span>
			Address:<input id="txtAddr" type="text" name="address">
			<span class="error"><?php print $Addresserr;?></span>
			Car Registration Plate:<input id="txtReg" type="text" name="Reg">
			<span class="error"><?php print $RegPlateErr;?></span>-->
			 <form class="text-center" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <fieldset>
                  <legend>Registration Form</legend>
                   <div class="form-group">
                    <label for="fName" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-10">
                      <input name="fName" type="text" class="form-control" placeholder="First Name" value="<?php echo $fName;?>">
                      <span class="error "><?php print $fNameErr;?></span>

                    </div>
                  </div>
                     <div class="form-group">
                    <label for="sName" class="col-lg-2 control-label">Surname</label>
                    <div class="col-lg-10">
                      <input name="sName" type="text" class="form-control" placeholder="SurName" value="<?php echo $sName;?>">
                      <span class="error"><?php print $sNameErr;?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="email" id="email" placeholder="email" value="<?php echo $email;?>">
                      <span class="error"><?php print $emailErr;?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="retypeEmail" class="col-lg-2 control-label">RetypeEmail</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="retypeEmail" placeholder="Retype Email" value="<?php echo $retypeEmail;?>">
                      <span class="error"><?php print $retypeEmailErr;?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $password;?>">
                      <span class="error "><?php print $passwordErr;?></span>
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="reTypePassword" class="col-lg-2 control-label">Re-Type Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" name="reTypePassword" placeholder="Re-Type Password" value="<?php echo $reTypePassword;?>">
                      <span class="error"><?php print $reTypePasswordErr;?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </fieldset>
              </form>
		</div>
    
<?php
echo "<h2>Your Input:</h2>";
echo $fName;
echo "<br>";
echo $sName;
echo "<br>";
echo $email;
echo "<br>";
echo $retypeEmail;
echo "<br>";
echo $password;
echo "<br>";
echo $reTypePassword;

?>
	</div>
</body>
</html>