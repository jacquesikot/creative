<?php session_start();
$email= strip_tags(htmlspecialchars($_POST['email']));
$name= strip_tags(htmlspecialchars($_POST['name']));
$phone= strip_tags(htmlspecialchars($_POST['phone']));
$service= strip_tags(htmlspecialchars($_POST['service_request']));
$comment= strip_tags(htmlspecialchars($_POST['comment']));
$to = "ram@infoquestit.com";
//$to="ssathyapriya2012@gmail.com";
$subject = "Consult Now Request";
$txt = '<html>
<body>
<div style="width: 650px; margin:auto;">
	&nbsp;
	<table align="center" width="650px" cellspacing="0" cellpadding="0" style="width: 650px; margin:auto; border: 1px solid #CECECE;">
		<tbody>
			<tr height="80" valign="top">
				<td height="80" style="border-bottom:solid 2px #00ABC7">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tbody>
						<tr style="height: 60px;">
												<td style="padding-top: 10px; padding-bottom: 5px; padding-left:5px;"><img style="opacity: 1.8;padding:20px;" alt="front-logo" border="0" src="http://emiratesdirectory.com/creative/assets/images/color-logo.png" /></td>
							<td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;padding:10px;width: 400px;text-align:right"><b>'. date('d/m/Y').'</b><br />
							<br />
							<b>Consult Now Request</b></td>
						</tr>
					</tbody>
				</table>
				</td>
			</tr>
			<tr>
				<td style="padding-left:20px;padding-right:20px;padding-bottom:20px;padding-top:20px">
				<table border="1" cellpadding="5" cellspacing="5" class="table table-bordered tableformat" style="border-collapse:collapse;border-color:#d7d7d7;border: 1px solid #d7d7d7;" width="100%">
					<tbody>
						<tr>
							<td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;line-height:16px;width:30%"><b>Name:</b></td>
							<td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;line-height:16px;width:70%">'.$name.'</td>
						</tr>
						<tr>
							<td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;line-height:16px;width:30%"><b>Email:</b></td>
							<td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;line-height:16px;width:70%">'.$email.' </td>
						</tr>
						<tr>
							<td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;line-height:16px;width:30%"><b>Phone/Mobile:</b></td>
							<td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;line-height:16px;width:70%">'.$phone.'</td>
						</tr>
						<tr>
							<td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;line-height:16px;width:30%"><b>Service</b></td>
							<td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;line-height:16px;width:70%">'.$service.'</td>
						</tr>
						
						
						<tr>
							<td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;line-height:16px;width:30%"><b>Comment:</b></td>
							<td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;line-height:16px;width:70%;">'.$comment.'</td>
						</tr>
					</tbody>
				</table>
				</td>
			</tr>
			<tr>
				<td bgcolor="#00ABC7" style="height: 25px;">&nbsp;</td>
			</tr>
			<tr>
				<td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-align:center;padding-top: 10px; padding-bottom: 10px;"><b>© 2021 Creative Link Services - All rights reserved.</b></td>
			</tr>
		</tbody>
	</table>
	</div>
</body>
	</html>';
 $headers = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= "From: Creative Link Services <info@emiratesdirectory.com> \r\n" ;


$send_mail =	mail($to,$subject,$txt,$headers);
if($send_mail){
	echo json_encode(array('status'=>'success','message'=>'Your request has been submitted successfully'));
	//header("Location: " . $_POST['post_url']);
	//$_SESSION["status"] = "success";
	//$_SESSION["message"] = "Your request has been submitted successfully ";
}else{
	echo json_encode(array('status'=>'error','message'=>'Mail is not send'));
	//header("Location: " . $_POST['post_url']);
	//_SESSION["status"] = "error";
	//$_SESSION["message"] = "Mail is not send";
}
?>