<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/manage/admin-includes/manage-includes.php');

$progress = new SetupProgress;
$module = new Module;

$page_title = "We Design";
$page_group = "design";
$page = "we-design";

	

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$ts = time();

$we_design_id = (isset($_REQUEST['we_design_id'])) ? $_REQUEST['we_design_id'] : 0;

// add if not exist
$sql = "SELECT we_design_id FROM we_design WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);

if($result->num_rows == 0){
	$sql = "INSERT INTO we_design 
		(last_update, profile_account_id) 
		VALUES ('".$ts."', '".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);
	$we_design_id = $db->insert_id;
}

if(!isset($_SESSION['we_design_id'])) $_SESSION['we_design_id'] = $we_design_id;


$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST['update_we_design'])){
	
	$top_1 = (isset($_POST['top_1']))? trim(addslashes($_POST['top_1'])) : ''; 

	
	if(!is_numeric($we_design_id)) $we_design_id = 0;

	$_SESSION['temp_page_fields']['top_1'] = $top_1;
	
	$stmt = $db->prepare("UPDATE we_design
						SET
						top_1 = ?
						WHERE we_design_id = ?");
						
		//echo 'Error-1 UPDATE   '.$db->error;
	if(!$stmt->bind_param("si"
						,$top_1
						,$_SESSION['we_design_id'])){
							
		echo 'Error-2 UPDATE   '.$db->error;
		
	}else{
		$stmt->execute();
		$stmt->close();				
		$msg = "Updated";
	}


	/*	
	$mssl = (isset($_POST['mssl']))? 1 : 0;
	$seo_name = trim(addslashes($_POST['seo_name']));
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = trim(addslashes($_POST['title']));
	$keywords = trim(addslashes($_POST['keywords']));
	$description = trim(addslashes($_POST['description']));
	$page_heading = trim(addslashes($_POST['page_heading']));
	*/
	//require_once($_SERVER['DOCUMENT_ROOT'].'/manage/cms/insert_page_seo.php');
	//require_once($_SERVER['DOCUMENT_ROOT']."/manage/cms/insert_page_breadcrumb.php");
	//unset($_SESSION['temp_page_fields']);

}


$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT top_1
    FROM we_design 
 	WHERE we_design_id = '".$_SESSION['we_design_id']."'";

$result = $dbCustom->getResult($db,$sql);	
if($result->num_rows > 0){
$object = $result->fetch_object();
	$top_1 = $object->top_1;
}else{
	$top_1 = '';
}

$_SESSION['temp_page_fields']['top_1'] = $top_1;

	

	
	/*
	require_once($_SERVER['DOCUMENT_ROOT'].'/manage/cms/get_seo_variables.php');
	if(!isset($_SESSION['temp_page_fields']['page_heading'])) $_SESSION['temp_page_fields']['page_heading'] = $page_heading;
	if(!isset($_SESSION['temp_page_fields']['seo_name'])) $_SESSION['temp_page_fields']['seo_name'] = $seo_name;
	if(!isset($_SESSION['temp_page_fields']['title'])) $_SESSION['temp_page_fields']['title'] = $title;
	if(!isset($_SESSION['temp_page_fields']['keywords'])) $_SESSION['temp_page_fields']['keywords'] = $keywords;
	if(!isset($_SESSION['temp_page_fields']['description'])) $_SESSION['temp_page_fields']['description'] = $description;
	*/


require_once($_SERVER['DOCUMENT_ROOT'].'/manage/admin-includes/doc_header.php'); 

?>
<script>

function validate(theform){
			
	return true;
}


/*
function select_img(img_id){
	document.getElementById(img_id).checked = true;	
}
*/


$(document).ready(function() {
	
	
	$('.fancybox').fancybox({
		autoSize : false,
		height : 800,
		width : 920	
	});

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
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,code",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : false,
		forced_root_block : false

	});
	


	$('.fancybox').click(function(){		
		
		ajax_set_page_session();
	
	});


});




function ajax_set_page_session(){
	
	var q_str = "?page=we-design-fax"+get_query_str();
		
	//alert(q_str);
	
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
	//query_str += "&img_alt_text="+$("#img_alt_text").val(); 
	query_str += "&content="+escape(tinyMCE.get('wysiwyg').getContent());
	
	query_str += "&design_fax_number="+$("#design_fax_number").val(); 
		
	query_str += "&seo_name="+document.form.seo_name.value; 
	query_str += "&title="+document.form.title.value.replace('&', '%26'); 
	query_str += "&keywords="+document.form.keywords.value.replace('&', '%26'); 
	query_str += "&description="+document.form.description.value.replace('&', '%26'); 
	
	
	
	
	return query_str;
}


function previewSubmit() {
  document.form.action = '<?php echo $ste_root; ?>/pages/preview/preview.php';
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

	require_once($_SERVER['DOCUMENT_ROOT'].'/manage/admin-includes/manage-header.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/manage/admin-includes/manage-top-nav.php');

?>
<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/manage/admin-includes/manage-side-nav.php'); ?>
	</div>
	<div class="manage_main">
	<?php 
		require_once($_SERVER['DOCUMENT_ROOT']."/manage/admin-includes/class.admin_bread_crumb.php");	
		$bread_crumb = new AdminBreadCrumb;
		$bread_crumb->reSet();
		$bread_crumb->add("CMS", $ste_root."manage/cms/cms-landing.php");
		$bread_crumb->add("Pages", $ste_root."manage/cms/pages/page.php");
		$bread_crumb->add("Fax", '');
        echo $bread_crumb->output();
        require_once($_SERVER['DOCUMENT_ROOT'].'/manage/admin-includes/manage-content-top.php');
        ?>
	<form name="form" action="<?php echo $current_page; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="update_we_design" value="1">        
		<input type="hidden" name="we_design_id" value="<?php echo $_SESSION['we_design_id']; ?>">		
		<div class="page_actions edit_page"> 
            <a onClick="regularSubmit();" href="#" class="btn btn-success btn-large"><i class="icon-ok icon-white"></i> Save </a>          
        </div>
		<div class="page_content edit_page">
            <fieldset class="edit_content">
                <legend>Page Content <i class="icon-minus-sign icon-white"></i></legend>
				<div class="colcontainer formcols">
					<div class="twocols">
						<label>top_1</label>
					</div>
					<div class="twocols">
<input id='top_1' type="text" name="top_1" value="<?php echo stripslashes($_SESSION['temp_page_fields']['top_1']); ?>" />
					</div>
				</div>
            </fieldset>
		</div>
	</form>	
	</div>
</div>	
</body>
</html>