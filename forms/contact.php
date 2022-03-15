<?php
 


$name = $_REQUEST['name'];

$email = $_REQUEST['Email'];

$message = $_REQUEST['Message'];

if (empty($name) ||empty($email) || empty($message))
{
echo "  please fill the form";
  else
  {
     mail("vinu.137002@gmail.com", "Webtech Message", $message ,"From: $name < $email>");
     echo "<script type='text/javascript'>alert('your message sent successfully');
     window.history.log(-1);
     </script>";
    
    
    
    
    
    
    
    
    
  

//$servername = "localhost";
 //$username = "root"; 

//$password = "cdac";

//Create connection
//$conn = new mysqli($servername, $username, $password);
    
    
    
    
    
    
    

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;
  
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];

//   // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
//   /*
//   $contact->smtp = array(
//     'host' => 'example.com',
//     'username' => 'example',
//     'password' => 'pass',
//     'port' => '587'
//   );
//   */

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();
?>
