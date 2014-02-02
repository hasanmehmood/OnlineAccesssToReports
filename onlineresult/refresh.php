
<?php include('template/header.php');?>
<?php
#====================================FOR DETAILS CONTACT US
#	Office: FF-04, first floor, deans trade center, Peshawar cantt.
#	Cell: 0333-9840815
#====================================FOR DETAILS CONTACT US



#======================* START - Smile API Class

CLASS SMILE_API
{
	
function get_session()
{
$username="7";	#Put your API Username here
$password="Fireworks8333";	#Put your API Password here
	
$data=file_get_contents("http://api.smilesn.com/session?username=".$username."&password=".$password);
$data=json_decode($data);
$sessionid=$data->sessionid;

$file2 = fopen('session.txt', 'w');

$file1 = fopen('session.txt', 'a');
fputs($file1, $sessionid);
fclose($file1);

return $sessionid;
}
	


function send_sms($receivenum, $sendernum, $textmessage)
{
$receivenum=urlencode($receivenum);
$sendernum=urlencode($sendernum);
$textmessage=urlencode($textmessage);


$session_file = file("session.txt");
$session_id = trim($session_file[0]);

if(empty($session_id))
{
$session_id = $this->get_session();
}

$data=file_get_contents("http://api.smilesn.com/sendsms?sid=".$session_id."&receivenum=".$receivenum."&sendernum=8333&textmessage=".$textmessage);

$data2=json_decode($data);
$response_status=$data2->status;

#=====* START - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY
if($response_status=="SESSION_EXPIRED")
{
$session_id = $this->get_session();
$data=file_get_contents("http://api.smilesn.com/sendsms?sid=".$session_id."&receivenum=".$receivenum."&sendernum=8333&textmessage=".$textmessage);
}
#=====* END - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY

return $data;
}



function receive_sms()
{
$session_file = file("session.txt");
$session_id = trim($session_file[0]);

if(empty($session_id))
{
$session_id = $this->get_session();
}

$data=file_get_contents("http://api.smilesn.com/receivesms?sid=".$session_id);

$data2=json_decode($data);
$response_status=$data2->status;


#=====* START - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY
if($response_status=="SESSION_EXPIRED")
{
$session_id = $this->get_session();
$data=file_get_contents("http://api.smilesn.com/receivesms?sid=".$session_id);
}
#=====* END - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY


return $data;
}
	
}
#======================* END - Smile API Class
/*
$num1 = "03469194800";
$num2 = "8333";
$data ="";
$object_smile_api = new SMILE_API();
$object_smile_api->send_sms($num1, $num2, "hiiii");
*/
/*
$data = $object_smile_api->receive_sms();
$data2=json_decode($data);



foreach($data2->status AS $data3)
{
echo $data3->sender_num." ";

echo $data3->text." ";

if ($data3->text == "825") {
	$message = "825 Your GPA is 3.48";
	$object_smile_api->send_sms($data3->sender_num, $num2, $message);
} elseif ($data3->text == "861") {
	$message = "861 Your GPA is 3.40";
	$object_smile_api->send_sms($data3->sender_num, $num2, $message);
} elseif ($data3->text == "888") {
	$message = "888 Your GPA is 3.40";
	$object_smile_api->send_sms($data3->sender_num, $num2, $message);
} else {
	$object_smile_api->send_sms($data3->sender_num, $num2, "Not registered");
}

} */ 
//echo $data;
?>


<?php 
$object_smile_api = new SMILE_API();
$data = $object_smile_api->receive_sms();
$data2=json_decode($data);


foreach($data2->status AS $data3)
{
echo $data3->sender_num." ";

echo $data3->text." ";

$message = intval($data3->text);
//$message = 3;
echo $message;

/*
if ($data3->text == "825") {
	$message = "825 Your GPA is 3.48";
	$object_smile_api->send_sms($data3->sender_num, $num2, $message);
} elseif ($data3->text == "861") {
	$message = "861 Your GPA is 3.40";
	$object_smile_api->send_sms($data3->sender_num, $num2, $message);
} elseif ($data3->text == "888") {
	$message = "888 Your GPA is 3.40";
	$object_smile_api->send_sms($data3->sender_num, $num2, $message);
} else {
	$object_smile_api->send_sms($data3->sender_num, $num2, "Not registered");
}
*/
 
$student_id = 1;
$date = date('y-m-d');

              $date =  explode('-',$date);
              $day = $date[2];
              $month = $date[1];
              $year = "20" . $date[0];
			echo "<br>";
			echo $day . " " . $month . " " . $year . " ";
          //    $q = mysql_query("select * from attendance where student = $student_id && day = $day && month = $month && year = $year");
              
              $q = mysql_query("select * from attendance where student = $message && day = $day && month = $month  && year = $year");
              echo mysql_num_rows($q);
			  if($row = mysql_fetch_array($q))
				echo "theek hia<br>". $row['status'];
              $status = $row['status'];
			  echo "  " . $status;
              if($status=='p')
                $states = 'Your child is present';
              else if($status=='a')
                 $states = 'Your child is absent';
              else if($status=='l')
                 $states = 'Your child is at leave'; 
              else
                 $states = 'record not found';
			
			$object_smile_api->send_sms($data3->sender_num, "8333", $states);
      }
?>