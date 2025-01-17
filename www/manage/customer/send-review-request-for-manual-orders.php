<?php
if(strpos($_SERVER['REQUEST_URI'], 'solvitware/' )){ 
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/solvitware';
}elseif(strpos($_SERVER['REQUEST_URI'], 'designitpro' )){  
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/designitpro'; 
}elseif(strpos($_SERVER['REQUEST_URI'], 'storittek/' )){  
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/storittek'; 
}else{
	$real_root = $_SERVER['DOCUMENT_ROOT']; 	
}
require_once($real_root.'/includes/class.dbcustom.php');
$dbCustom = new DbCustom();

require_once($real_root.'/manage/admin-includes/manage-includes.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/includes/class.customer_account.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/includes/class.saas_customer.php');

$ts = time();
//$month = 60*60*24*30;
//$look_back_upper = $ts - $month; 
//$look_back_lower = $look_back_upper - ($month*12);
//$look_back_lower = $look_back_upper - $month;

$db = $dbCustom->getDbConnect(CART_DATABASE);

$sql = "DELETE FROM sent_email_feedback"; 
//$result = $dbCustom->getResult($db,$sql);


//exit;


/*
$sql = "SELECT * 
		FROM sent_email_feedback";
$result = $dbCustom->getResult($db,$sql);

echo "<table border='1'>";
while($row = $result->fetch_object()){
	
	echo "<tr><td>".$row->customer_id."</td><td>".$row->order_id."</td><td>".$row->review_id."</td></tr>";
	
}
echo "</table>";


exit;

*/

$body_intro_text = getRevewReqEmailText('manual');

$order_id = isset($_GET['order_id']) ? $_GET['order_id'] : 0;

$sql = "SELECT order_id
			,customer_id 
			,shipping_name
			,billing_name
			,shipping_email
			,billing_email
			,in_house_product_descr			
		FROM ctg_order
		WHERE order_id = '".$order_id."'";
		
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	
	$object = $result->fetch_object();
	
	//has an email already been sent to this customer for this order?	
	$sql = "SELECT sent_email_feedback_id
			FROM sent_email_feedback
			WHERE order_id = '".$order_id."'";
	$res = $dbCustom->getResult($db,$sql);
	
	if($res->num_rows == 0){
	//if(1){	
		send_review_email($object->customer_id
			,$object->order_id
			,$object->shipping_name
			,$object->billing_name
			,$object->shipping_email
			,$object->billing_email
			,$object->in_house_product_descr
			,$body_intro_text); 
		
		$sql = "INSERT INTO sent_email_feedback
				(order_id, customer_id, sent_date)
				VALUES
				('".$object->order_id."', '".$object->customer_id."', '".$ts."')";
				
		$r = $dbCustom->getResult($db,$sql);
				
		
	}else{
		echo "A review request email has already been sent for this order";	
	}
	
	
	
}
	

function send_review_email($customer_id, $order_id, $shipping_name, $billing_name, $shipping_email, $billing_email, $in_house_product_descr, $body_intro_text){
	
	$CustAccnt = new CustomerAccount;
	$saas_cust = new SaasCustomer;
	
	$c_data_array = $CustAccnt->getEmailData($dbCustom,$customer_id);

	$customer_name = $c_data_array['name'];
	$customer_email = $c_data_array['username'];
	
	if(trim($customer_email) == ''){		
		$customer_email = $shipping_email;		
	}
	if(trim($customer_email) == ''){		
		$customer_email = $billing_email;		
	}
	if(trim($customer_name) == ''){		
		$customer_name = $shipping_name;		
	}
	if(trim($customer_name) == ''){		
		$customer_name = $billing_name;		
	}
	
	

	SITEROOT = $_SERVER['HTTP_HOST'];
	SITEROOT =str_replace('www.' ,'',SITEROOT);

	if($customer_name != ''){
		$dear_cust = "Hi ".$customer_name.", ";
		$email_subject = $customer_name.' review your recent purchase on '.SITEROOT;	
	}else{
		$dear_cust = "Hi:";
		$email_subject = "Review your recent purchase on ".SITEROOT;			
	}	
	if(!isset($_SESSION['profile_company'])) $_SESSION['profile_company'] = 'Closets To Go';
	
	$company_email = $saas_cust->email;
	
	$message = '';
	
	$message .= "<html lang='en'>";
	$message .= "<meta charset='utf-8'>";
	$message .= "<body>";
	
	$message .= "<div style='width: 600px;'>";

	$logo_file_name = get_logo(); 
	 
	$message .= "<div style='margin-top: 6px;'>"; 
	$message .= "<img src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/logo/".$logo_file_name."'"; 
    $message .= " alt='".$_SESSION['profile_company']."' /></div>";

	$message .= "<div style='margin-top:6px;font-size:12px;'>"; 
	//$message .= "Rate your recent experience with us.</div>";
	
	//$message .= "<div style='clear:both;'></div>";
	
	$message .= $dear_cust."<br /><br />";


	$message .=  $body_intro_text;
	
	//$message .= "I personally wanted to reach out and thank you for your recent purchase from Closets To Go.<br /><br />";
	//$message .= "You've put your trust in us to assist you in creating what we hope was a great experience as reflected in our customer service on through the finished product. "; 
	//$message .= "So that we may continue to provide you and others with outstanding products and customer service we would greatly appreciate if you could fill out a review from the link below. "; 
	//$message .= "We know everyone has busy lives and we really are grateful for your time.<br /><br />";
	//$message .= "<br /><br />Kindest Regards,<br /><br />";	
	//$message .= "Closets To Go<br />";
	//$message .= "Jeff Turner<br />";
	//$message .= "President<br /></p>";
			
	$message .= "<br /><br /><hr /><br />";



	$url_str = SITEROOT."/give-us-feedback/testimonial/".$customer_id."/".$order_id;


		$stars = '';
		$stars .= "<table cellspacing='10'>";	
		$stars .= "<tr>";
		
		$stars .= "<td>";
		$stars .= "<a href='".$url_str."/1/0' target='_blank' style='text-decoration:none;'>";
		$stars .= "<div style='font-size:32px; color:blue;'>";
		$stars .= "☆";	
		$stars .= "</div>";
		$stars .= "</a>";	
		$stars .= "</td>";
	
		$stars .= "<td>";
		$stars .= "<a href='".$url_str."/2/0' target='_blank' style='text-decoration:none;'>";
		$stars .= "<div style='font-size:32px; color:blue;'>";
		$stars .= "☆";	
		$stars .= "</div>";
		$stars .= "</a>";	
		$stars .= "</td>";
	
		$stars .= "<td>";
		$stars .= "<a href='".$url_str."/3/0' target='_blank' style='text-decoration:none;'>";
		$stars .= "<div style='font-size:32px; color:blue;'>";
		$stars .= "☆";	
		$stars .= "</div>";
		$stars .= "</a>";	
		$stars .= "</td>";
	
		$stars .= "<td>";
		$stars .= "<a href='".$url_str."/4/0' target='_blank' style='text-decoration:none;'>";
		$stars .= "<div style='font-size:32px; color:blue;'>";
		$stars .= "☆";	
		$stars .= "</div>";
		$stars .= "</a>";	
		$stars .= "</td>";
	
		$stars .= "<td>";
		$stars .= "<a href='".$url_str."/5/0' target='_blank' style='text-decoration:none;'>";
		$stars .= "<div style='font-size:32px; color:blue;'>";
		$stars .= "☆";	
		$stars .= "</div>";
		$stars .= "</a>";	
		$stars .= "</td>";
		$stars .= "</tr>";	
		$stars .= "</table>";

		$message .= $stars;

	$items_array = get_items($order_id);
	
	
	foreach($items_array as $items_v){
		$message .= "<img src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$items_v['file_name']."'/>";
		$message .= "<br />";

		$message .= "<div style='margin-top:6%; margin-left:14px; font-size:14px;'><b>".$items_v['name']."</b></div>";
		$message .= "<br />";		
	}
	$message .= "<div style='margin-top:6%; margin-left:14px; font-size:14px;'><b>".$in_house_product_descr."</b></div>";
	$message .= "<br />";
		
		
	
	$message .= "</div>";
	
	$message .= "</body>";
	$message .= "</html>";







	echo $message;
	echo "<br /><br />".$customer_email."<hr /><br /><br /><br /><br />";

	$to = $customer_email;
	//$to = 'mark.stanz@gmail.com';
		
	
	$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: $company_email";
	$headers .= "\r\n";
	$headers .= "Return-path: help@closetstogo.com";
	
	if(!mail($to, $email_subject, $message, $headers)){
	
	}
	
	echo "Email Sent to ".$to;
	
}


function get_items($order_id){
	
	$dbCustom = new DbCustom();
	
	$db = $dbCustom->getDbConnect(CART_DATABASE);
	
	$ret = array();
	
	$sql = "SELECT item.item_id, item.name, image.file_name
			FROM order_line_item, item, image
			WHERE order_line_item.item_id = item.item_id
			AND item.img_id = image.img_id
			AND order_line_item.order_id = '".$order_id."'";
			
	$result = $dbCustom->getResult($db,$sql);
	$i = 0;		
	while($row = $result->fetch_object()){	
		$ret[$i]['item_id'] = $row->item_id;
		$ret[$i]['name'] = $row->name;
		$ret[$i]['file_name'] = $row->file_name;
		$i++;
	}

	return $ret;
	
}




?>