<?php 
include('MainFunctionalities.php');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $lang['Title'] ?></title>

	<link rel="stylesheet" href="style.css">
<script src="https://www.google.com/recaptcha/api.js?hl=en-" async defer></script> 
<script src="https://kit.fontawesome.com/5f0d9d8f4b.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body id="body">
<div class="col-sm-4 col-md-4 contact-form" >
  <br>
<!-- <h2><?php echo $lang['Description'] ?></h2> -->
<form  action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'method="POST">

<div id="text"><?php echo $lang['Fullname'] ?></div>
<input id="input" type="text" name="full_name"  value="<?php echo $name;?>" placeholder="<?php echo $lang['Fullname_hint'] ?>" >
<span class="error"><?php echo $nameErr;?></span>


<div id="text"><?php echo $lang['Cellphone'] ?></div>
<input id="input" type="number" name="cellphone_number" value="<?php echo $phone;?>"  placeholder="<?php echo $lang['Cellphone_hint'] ?>" >
<span class="error"><?php echo $phoneErr;?></span>

<div id="text"><?php echo $lang['City'] ?></div>
<input id="input" type="text" name="City" value="<?php echo $city;?>" placeholder="<?php echo $lang['City_hint'] ?>" >
<span class="error"><?php echo $cityErr;?></span>
<br>
<br>

<div class="radio">
<h6><?php echo $lang['Raha_Card'] ?></h6>

  <input type="radio"  name="interest" value="Yes"><label for="radio"><?php echo $lang['Yes'] ?></label><br>

  <input type="radio"  name="interest" value="No"><label for="radio"><?php echo $lang['No'] ?></label><br>
</div>

<div clas="select">
<label id="label" for="contact_mode"><?php echo $lang['Contact_mode'] ?></label>
<select id="contact_mode" name="contact_mode">
  <option value="Phone call"><?php echo $lang['Phone_call'] ?></option>
  <option value="SMS"><?php echo $lang['SMS'] ?></option>
  <option value="Email"><?php echo $lang['Email'] ?></option>
  <option value="Social media"><?php echo $lang['Social_Media'] ?></option>
</select>
</div>
<br>
  


<div id="text"><?php echo $lang['Facebook_profile'] ?></div>
<input id="input" type="text" name="Facebook" value="<?php echo $facebook;?>" placeholder="<?php echo $lang['Facebook_hint'] ?>" >
<span class="error"><?php echo $facebookErr;?></span>

<div id="text"><?php echo $lang['Email'] ?></div>
<input id="input" type="email" name="e_mail" value="<?php echo $email;?>" placeholder="<?php echo $lang['Email_hint'] ?>" ><br>
<span class="error"><?php echo $emailErr;?></span>





<div class="container">
  <!-- Button to Open the Modal -->
  <input id="checkbox" type="checkbox" name="Data" required><label for="checkbox"><?php echo $lang['Agree'] ?></label><a href="#" data-toggle="modal" data-target="#myModal">
    <?php echo $lang['Terms'] ?>
  </a><br>
  <input  id="checkbox" type="checkbox" name="Data" required><label for="checkbox"><?php echo $lang['Personal_data'] ?></label>


  
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h1 class="modal-title"><?php echo $lang['Conditions'] ?></h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        
        <div class="modal-body">'
              <?php echo $lang['Terms_Conditions'] ?>
       
        </div>
        
         <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
  
</div>





		 <div class="g-recaptcha" data-sitekey="6LfGztoUAAAAACjhih9NkRiVKYcNyvY__Sx3ibgL"></div>

		<?php if($captchaErr) {?>
			<span class="error">Invalid captcha</span>
		<?php } ?>





		<input  id="btn1" class="btn btn-outline-light btn-lg" type="submit" name="Send Request" value="Send Request">


	</form>





</div>
</div>
<footer>
	<h6><?php echo $lang['Contact'] ?><br></h6>
  <h6><?php echo $lang['Email'] ?>: rahapartycomparty@gmail.com</h6>
	<a href="https://www.instagram.com/rahapartyevents/"><i class="fab fa-instagram fa-md">Raha Party Events</i></a><br>
	<a href="https://www.facebook.com/Raha-Party-Events-103243611284487/"><i class="fab fa-facebook fa-md ">Raha Party Events</i></a><br>
  <i class="fab fa-whatsapp fa-md"><?php echo $lang['Cellphone'] ?>: 0746457167<br></i>
	<a></a>

	</footer>


</body>
</html>


