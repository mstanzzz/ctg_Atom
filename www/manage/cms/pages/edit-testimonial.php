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
$progress = new SetupProgress;
$module = new Module;


$page_title = "Edit Testimonial";
$page_group = "edit-testimonial";

	

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$msg = '';

require_once($real_root.'/manage/admin-includes/doc_header.php'); 


?>

<script type="text/javascript" language="javascript">
		tinyMCE.init({
        // General options
        mode : "specific_textareas",
        editor_selector : "wysiwyg",
        theme : "advanced",
        skin : "o2k7",
        plugins : "table,advhr,advlink,emotions,inlinepopups,insertdatetime,searchreplace,paste,style",
        // Theme options
        theme_advanced_buttons1 :"bold,italic,underline,strikethrough,|,styleselect,formatselect,fontsizeselect,|,forecolor,backcolor",
        theme_advanced_buttons2 : "justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,outdent,indent,blockquote,|,cut,copy,paste,pastetext,pasteword,|,undo,redo,|,link,unlink,",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : false,
		forced_root_block : false

	});

</script>
</head>
<div class="lightboxholder">
	<?php if($msg != ''){ ?>
	<div class="alert">
		<p><?php echo $msg ?></p>
	</div>
	<?php 
		} 
    	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		$testimonial_id = (isset($_GET['testimonial_id'])) ? $_GET['testimonial_id'] : 0;
		$sql = sprintf("SELECT * FROM testimonial 
		WHERE testimonial_id = '%u' AND profile_account_id = '%u'", $testimonial_id, $_SESSION['profile_account_id']);
$result = $dbCustom->getResult($db,$sql);		if($result->num_rows > 0){
			$object = $result->fetch_object();
			$name = $object->name;
			$email = $object->email;
			$city_state = $object->city_state;
			$list_order = $object->list_order;
			$content = $object->content;
			$hide = $object->hide;	
		}else{
			$name = '';
			$email = '';
			$city_state = '';
			$list_order = '';
			$content = '';
			$hide = '';		
		}
		
	?>
        <form name="edit_testimonial" action="testimonial-list.php" method="post" target="_top">
			<input id="testimonial_id" type="hidden" name="testimonial_id" value="<?php echo $testimonial_id;  ?>" />
			<div class="lightboxcontent">
				<h2>Edit Testimonial</h2>
				<fieldset class="colcontainer">
					<div class="threecols">
						<label>Name</label>
						<input type="text" name="name" value="<?php echo stripslashes($name); ?>" maxlength="160" size="30" />
					</div>
					<div class="threecols">
						<label>Email Address</label>
						<input type="text" name="email" value="<?php echo $email; ?>" maxlength="160" size="30"  />
					</div>
					<div class="threecols">
						<label>City State</label>
						<input type="text" name="city_state" value="<?php echo stripslashes($city_state); ?>" maxlength="160" size="30" />
					</div>
				</fieldset>
				<fieldset class="colcontainer"> 
					<div class="twocols">
						<label>Active?</label>
						<div class="radiotoggle on"> <span class="ontext">ON</span><a class="switch on" href="#"></a><span class="offtext">OFF</span>
                        <input type="radio" class="radioinput" name="hide" value="1" <?php if($hide) echo "checked='checked'"; ?> /></div>
					</div>
					<div class="twocols">
						<label>Display Order</label>
						<input name="list_order" type="text"  value="<?php echo $list_order; ?>"/> 
					</div>
				</fieldset>
				<fieldset class="colcontainer">
					<label>Testimonial</label>
					<textarea  name="content" class="wysiwyg" id="wysiwyg"><?php echo stripslashes($content); ?></textarea>
				</fieldset>
                
                
                <fieldset class="colcontainer">
                
                <?php
                $sql = "SELECT file_name 
			FROM testimonial_image 
			WHERE testimonial_id = '".$testimonial_id."'";
			
			$res = $dbCustom->getResult($db,$sql);
            
			while($row = $res->fetch_object()){
				
				
			echo "<a href='".SITEROOT."/user_uploads/".$_SESSION['profile_account_id']."/".$row->file_name."' class='fancybox'>
				<img src='".SITEROOT."/user_uploads/".$_SESSION['profile_account_id']."/".$row->file_name."' style='width: 80%; margin: 10px auto; height: auto;' /></a>";
			
				
			}
			
			
			?>
            </fieldset>
                
                
			</div>
			<div class="savebar">
				<button class="btn btn-large btn-success" type="submit" name="edit_testimonial"><i class="icon-ok icon-white"></i> Save Changes </button>
			</div>
        </form>

</div>

</div>
</body>
</html>



