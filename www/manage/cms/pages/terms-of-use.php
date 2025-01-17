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

$page_title = 'Edit: Terms of Use';
$page_group = 'terms-of-use';
$page = 'terms-of-use';

	

$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$ts = time();
// add if not exist
$sql = "SELECT terms_of_use_id FROM terms_of_use WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);

if($result->num_rows == 0){
	$sql = "INSERT INTO terms_of_use 
		(content, last_update, profile_account_id) 
		VALUES ('Add Content', '".$ts."', '".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);
	
}



if(isset($_POST["edit_terms_of_use"])){
	
	$content = trim(addslashes($_POST['content'])); 
	$terms_of_use_id = $_POST['terms_of_use_id'];
	$mssl = (isset($_POST['mssl']))? 1 : 0;
	$seo_name = trim(addslashes($_POST['seo_name']));
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = trim(addslashes($_POST['title']));
	$keywords = trim(addslashes($_POST['keywords']));
	$description = trim(addslashes($_POST['description']));
	$page_heading = trim(addslashes($_POST['page_heading']));

	require_once($real_root."/manage/cms/insert_page_seo.php");
	
	//if(in_array(2,$user_functions_array)){
		// create a backup
		
		//$backup = new Backup;
		//$dbu = $backup->doBackup($terms_of_use_id,$user_id,"terms_of_use");	
		//echo $dbu;
		//exit;
		$sql = sprintf("UPDATE terms_of_use SET content = '%s' WHERE terms_of_use_id = '%u'", 
		$content, $terms_of_use_id);

		$msg = "Your change is now live.";
	/*
	}else{
		
		$sql = sprintf("INSERT INTO review 
						(content_table, 
						when_submitted, 
						submitted_by_login_id, 
						slug, 
						content1, 
						content_record_id) 
		VALUES ('%s','%u','%u','%s','%s','%u')", 
		"terms_of_use", 
		$ts, 
		$user_id, 
		"terms-of-use", 
		$content, 
		$terms_of_use_id);

		$msg = "Your change is now pending approval.";

	}
	*/

	$result = $dbCustom->getResult($db,$sql);
	

	
	require_once($real_root."/manage/cms/insert_page_breadcrumb.php");
	
}


if(isset($_POST["set_ssl"])){
	$page_name = $_POST['page_name'];
	$mssl = (isset($_POST['mssl']))? 1 : 0;
	
	$sql = "UPDATE page_seo
			SET mssl = '".$mssl."'
			WHERE page_name = '".$page_name."'
			AND profile_account_id = '".$_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);
			
}



	$terms_of_use_id = (isset($_REQUEST['terms_of_use_id'])) ? $_REQUEST['terms_of_use_id'] : 0;
	
	if(!isset($_SESSION['terms_of_use_id'])) $_SESSION['terms_of_use_id'] = $terms_of_use_id;
	
	
 	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$sql = "SELECT content
    FROM terms_of_use 
 	WHERE terms_of_use_id = '".$_SESSION['terms_of_use_id']."'";
    $result = $dbCustom->getResult($db,$sql);	
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		$content = $object->content;
	}else{
		$content = '';
	}
	
	if(!isset($_SESSION['temp_page_fields']['content'])) $_SESSION['temp_page_fields']['content'] = $content;
	
	require_once($real_root."/manage/cms/get_seo_variables.php");
	
	if(!isset($_SESSION['temp_page_fields']['page_heading'])) $_SESSION['temp_page_fields']['page_heading'] = $page_heading;
	if(!isset($_SESSION['temp_page_fields']['seo_name'])) $_SESSION['temp_page_fields']['seo_name'] = $seo_name;
	if(!isset($_SESSION['temp_page_fields']['title'])) $_SESSION['temp_page_fields']['title'] = $title;
	if(!isset($_SESSION['temp_page_fields']['keywords'])) $_SESSION['temp_page_fields']['keywords'] = $keywords;
	if(!isset($_SESSION['temp_page_fields']['description'])) $_SESSION['temp_page_fields']['description'] = $description;
		
		
	
	



require_once($real_root.'/manage/admin-includes/doc_header.php'); 


?>

<script>

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



$(document).ready(function() {
	
	$('.fancybox').fancybox({
		autoSize : false,
		height : 800,
		width : 900	
	});
	
	$('.fancybox').click(function(){		
		
		ajax_set_page_session();
	
	});
	
});



function ajax_set_page_session(){
	
	var q_str = "?page=terms"+get_query_str();
		
	$.ajaxSetup({ cache: false}); 
	$.ajax({
	  url: 'ajax_set_page_session.php'+q_str,
	  success: function(data) {
		//alert(data);
	  }
	});
}


function get_query_str(){
	
	var query_str = '';
	
	query_str += "&page_heading="+$("#page_heading").val().replace('&', '%26'); 
	query_str += "&content="+escape(tinyMCE.get('content').getContent());
	
	query_str += "&seo_name="+document.form.seo_name.value; 
	query_str += "&title="+document.form.title.value.replace('&', '%26'); 
	query_str += "&keywords="+document.form.keywords.value.replace('&', '%26'); 
	query_str += "&description="+document.form.description.value.replace('&', '%26'); 
	
	return query_str;
}




function previewSubmit() {
  document.form.action = '<?php echo SITEROOT; ?>pages/preview/preview.php';
  document.form.target = '_blank'; 
  document.form.submit();
}	


function regularSubmit() {
  document.form.action = '<?php echo $current_page; ?>';
  document.form.target = '_self';
  document.form.submit(); 
}	

</script>
</head>
<body>
<?php
	require_once($real_root.'/manage/admin-includes/manage-header.php');
	require_once($real_root.'/manage/admin-includes/manage-top-nav.php');
	
	
	
require_once($real_root."/manage/cms/get_seo_variables.php");	
	
?>
<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php 
        require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
        ?>
	</div>
	<div class="manage_main">
		<?php 
   		require_once($real_root."/manage/admin-includes/class.admin_bread_crumb.php");	
		$bread_crumb = new AdminBreadCrumb;
		$bread_crumb->reSet();
		$bread_crumb->add("CMS", SITEROOT."/manage/cms/cms-landing.php");		
		$bread_crumb->add("Pages", SITEROOT."/manage/cms/pages/page.php");
		$bread_crumb->add("Terms of Use", '');
        echo $bread_crumb->output();
		
        require_once($real_root.'/manage/admin-includes/manage-content-top-category.php');
        ?>
        <form name="form" action="<?php echo $current_page; ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="edit_terms_of_use" value="1">        
            <input type="hidden" name="terms_of_use_id" value="<?php echo $_SESSION['terms_of_use_id']; ?>">
                
            <input type="hidden" name="page" value="<?php echo $page; ?>">
            
            <input type="hidden" name="ret_page" value="terms-of-use">
            <input type="hidden" name="ret_dir" value="manage/cms/pages">
            <input type="hidden" name="content_table" value="terms_of_use"> 
                
			<div class="page_actions edit_page"> 
	           	<a onClick="previewSubmit();" href="#" class="btn btn-primary btn-large"><i class="icon-eye-open icon-white"></i> Preview </a>
				<a onClick="regularSubmit();" href="#" class="btn btn-success btn-large"><i class="icon-ok icon-white"></i> Save </a>
                
                <a href="<?php echo SITEROOT; ?>manage/cms/navigation/navbar.php?strip=1" class="btn btn-primary btn-large fancybox fancybox.iframe">
                <i class="icon-eye-open icon-white"></i> Edit Navigation </a>

				<hr />
				<!-- I'm not sure if this was being used or not, but I left it in. You can just hide it or get rid of it if this feature isn't going to be released.-->
				<a href="<?php echo SITEROOT;?>/manage/cms/pages/page.php" class="btn"><i class="icon-arrow-left"></i> Cancel &amp; Go Back</a>
				<?php 
                if($_SESSION['is_ssl']){ 
                    $checked = ($mssl)? "checked=checked" : ''; 		
                ?>
                <label>Set Page as SSL</label>
                <div class="checkboxtoggle on"> <span class="ontext">ON</span><a class="switch on" href="#"></a><span class="offtext">OFF</span>
                    <input type="checkbox" class="checkboxinput" name="mssl" value="1" <?php echo $checked; ?> />
                </div>
                <?php } ?>
			</div>
			<div class="page_content edit_page">
				<fieldset class="edit_content">
					<legend>Page Content <i class="icon-minus-sign icon-white"></i></legend>
                        <div class="colcontainer formcols">
                            <div class="twocols">
                                <label>Page Name</label>
                            </div>
                            <div class="twocols">
                                <input type="text" id="page_heading" name="page_heading" value="<?php echo stripslashes($_SESSION['temp_page_fields']['page_heading']); ?>" />
                            </div>
                        </div>
					<div class="colcontainer">
						<textarea id="content" class="wysiwyg" name="content"><?php echo stripslashes($_SESSION['temp_page_fields']['content']); ?></textarea>
					</div>
				</fieldset>

	        <?php require_once("edit_page_seo.php"); ?>
    	    <?php require_once($real_root."/manage/cms/edit_page_breadcrumb.php"); ?>

			</div>
		</form>
		
    </div>
    <p class="clear"></p>
<?php 
require_once($real_root.'/manage/admin-includes/manage-footer.php');
?>

</div>

</body>
</html>


