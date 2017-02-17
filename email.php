<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="main.css" type="text/css" rel="stylesheet">

<title>Snake River | First Full Immersion Movie</title>

<style type="text/css">
body { background-color: #f2f2f2;}
</style>

<style type="text/css">
body { background-color: #f2f2f2;
}

.tt {color:#2C5997;
font-size:13px;}

 input {
    background-color: #f2f2f2;
    font-size:13px;
    margin:10px 10px 0 10px;
    border:#999;
    border:0px;
    border:1px #ccc;
    border-style: solid;
    color:#333;
    height:30px;
    width:220px;
    padding:3px;
    letter-spacing:1;
    border-radius: 5px;
    -webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);
    -moz-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);
    box-shadow:inset 0 1px 2px rgba(0,0,0,.1)
} 
textarea{
    background-color: #f2f2f2;
    font-size:13px;
    margin:10px 10px 0 10px;
    border:#ccc 1px;
    border-style: solid;
    color:#333;
    border-radius: 5px;
    -webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);
    -moz-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);
    box-shadow:inset 0 1px 2px rgba(0,0,0,.1)

}
    
    
    .btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 15;
  -moz-border-radius: 15;
  border-radius: 15px;
  font-size:14px;
  color: #ffffff;
  width:160px;
  height:40px
}
.btn:hover {  background: #3498db;
}
.note{font-size:12px;
color:red}

input:hover {
  background: #fff;
  text-decoration: none;

}
.btn:hover {  background: #3498db;
}

</style>
</head>

<body>
<div class="logo"><a href="#page1"><img src="img/logo.png" style='width:40px;' ></a></div> 
<div id="menu">
                <table align="center" width="100%" height="100%">
                    <tr>
                        <td><ul>
                        <li data-menuanchor="page2"><a href="http://laiii.net/snakeriver/#page2">Full Immersion</a></li>
                        <li data-menuanchor="page3"><a href="http://laiii.net/snakeriver/#page3">The Movie</a></li>
                        <li data-menuanchor="page4"><a href="http://laiii.net/snakeriver/#page4">Press</a></li>
                        <li data-menuanchor="page5"><a href="http://laiii.net/snakeriver/#page5">The Crew</a></li>
                        <li data-menuanchor="page6"><a href="http://laiii.net/snakeriver/#page6">Contact</a></li></ul></td>
                    </tr>
                </table>
            
</div><!--stickyheader-->
<p>
  <?php
 
if(isset($_POST['email'])) {
 
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "lawsiulai@foxmail.com";
 
    $email_subject = "From laiii.net";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
 
        !isset($_POST['email']) ||
  
        !isset($_POST['comment'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
 
 
    $comments = $_POST['comment']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  }
 
  
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form detail as below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
  
    $email_message .= "Email: ".clean_string($email_from)."\n";
  
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
  
  
  
  <!-- include your own success html here -->
  
<div class="section page3" id="section5">
    
    <div class="title" >
      <h2>Contact</h2>
    </div>
    
    <div class="story" style="width:80%">
     <h3>&nbsp;</h3>
     
      <div style="margin-left:1%">  
  
        <p>Thank you for contacting us. We will be in touch with you very soon :)</p>
        <p>&nbsp;</p>
        <ul class="readmore"><a href="http://laiii.net/snakeriver/#page6" target="_self">Go Back</a> </ul></p>
      </div></div></div>
<?php
 
}
 
?>


</body>
</html>