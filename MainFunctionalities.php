 <?php 
 session_start();
 require('database.php');
 require('mail.php');




 

if (!isset($_SESSION['lang']))
    $_SESSION['lang'] = "en";
  else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "en")
      $_SESSION['lang'] = "en";
    else if ($_GET['lang'] == "ro")
      $_SESSION['lang'] = "ro";
  }

 require_once "languages/" . $_SESSION['lang'] . ".php";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





$interest = $nameErr = $emailErr = $phoneErr = $cityErr =$facebookErr= "";
$name = $email = $phone = $city = $facebook = "";
$captchaErr=false;
$fbUrlCheck = '/^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{


$name = test_input($_POST["full_name"]);
$phone =test_input($_POST["cellphone_number"]);
$email = test_input($_POST["e_mail"]);
$city=test_input($_POST["City"]);
$facebook=test_input($_POST["Facebook"]);
$contact_mode= $_POST['contact_mode'];
$interest=$_POST['interest'];



   if (empty($_POST["full_name"])) {
    $nameErr = $lang['nameErr1'];
  } else {
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = $lang['nameErr2'];
    }
  }


if (empty($_POST["cellphone_number"])) {
    $phoneErr =$lang['phoneErr'];
  }


   if (empty($_POST["City"])) {
    $cityErr = $lang['cityErr1'];
  } else {
    // check if city only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
      $cityErr = $lang['cityErr2'];
    }
  }
  
 if (empty($_POST["Facebook"])) {
  $facebookErr = $lang['facebookErr1'];
  } else {
    
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match($fbUrlCheck, $facebook)) {
      $facebookErr = $lang['facebookErr2'];
    }
  }

  if (empty($_POST["e_mail"])) {
    $emailErr = $lang['emailErr1'];
  } else { 
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = $lang['emailErr2'];
    }
  }



    
    
  

 

$secretKey="6LfGztoUAAAAAINZ1h4fK_ar_hbO9X8lIyPo4m8M";
$responseKey=$_POST['g-recaptcha-response'];
$UserIp=$_SERVER['REMOTE_ADDR'];
$url="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIp";

$response=file_get_contents($url);
$response=json_decode($response);

$captchaErr=!($response -> success);




  if(empty($nameErr) &&empty($emailErr) && empty($phoneErr) &&empty($cityErr) && empty($facebookErr)&&!($captchaErr))
  {
      
      $qrCode=create_QrCode($name);
      
  
  	Insert_database($name,$phone,$city,$facebook,$email);

  	if(!Send_email($email,$name,$phone,$city,$facebook,$qrCode,$contact_mode,$interest))
		{
			echo "Mail NOT SENT";
			
		}

	else
		{
      
			echo "Mail Sent!";
		}

      header("Location: /contact_form1", true, 301);
      exit();
  }

}
?> 



