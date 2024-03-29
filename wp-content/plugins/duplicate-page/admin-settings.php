<div class="wrap duplicate_page_settings">
<h1><?php _e('Duplicate Page Settings', 'duplicate_page')?></h1>
<?php $duplicatepageoptions = array();
$opt = get_option('duplicate_page_options');
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
if(isset($_POST['submit_duplicate_page']) && wp_verify_nonce( $_POST['duplicatepage_nonce_field'], 'duplicatepage_action' )):
	_e("<strong>Saving Please wait...</strong>", 'duplicate_page');
	$needToUnset = array('submit_duplicate_page');//no need to save in Database
	foreach($needToUnset as $noneed):
	  unset($_POST[$noneed]);
	endforeach;
		foreach($_POST as $key => $val):
		$duplicatepageoptions[$key] = $val;
		endforeach;
		 $saveSettings = update_option('duplicate_page_options', $duplicatepageoptions );
		if($saveSettings)
		{
			dp_redirect('options-general.php?page=duplicate_page_settings&msg=1');
		}
		else
		{
			dp_redirect('options-general.php?page=duplicate_page_settings&msg=2');
		}
endif;
if(!empty($msg) && $msg == 1):
  _e( '<div class="updated settings-error notice is-dismissible" id="setting-error-settings_updated"> 
<p><strong>Settings saved.</strong></p><button class="notice-dismiss" type="button"><span class="screen-reader-text">Dismiss this notice.</span></button></div>', 'duplicate_page');	
elseif(!empty($msg) && $msg == 2):
  _e( '<div class="error settings-error notice is-dismissible" id="setting-error-settings_updated"> 
<p><strong>Settings not saved.</strong></p><button class="notice-dismiss" type="button"><span class="screen-reader-text">Dismiss this notice.</span></button></div>', 'duplicate_page');
endif;
$duplicate_post_status = array('draft','publish','private','pending');
?> 
<div id="poststuff">
<div id="post-body" class="metabox-holder columns-2">
<div id="post-body-content" style="position: relative;">
<form action="" method="post" name="duplicate_page_form">
<?php  wp_nonce_field( 'duplicatepage_action', 'duplicatepage_nonce_field' ); ?>
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="duplicate_post_status"><?php _e('Duplicate Post Status', 'duplicate_page')?></label></th>
<td><select id="duplicate_post_status" name="duplicate_post_status">
    <?php foreach($duplicate_post_status as $val):
	$optionDisplayVal = ucfirst($val); ?>
	<option value="<?php echo $val; ?>" <?php echo($opt['duplicate_post_status'] == $val ) ? "selected = 'selected'" : ""; ?>><?php _e($optionDisplayVal, 'duplicate_page')?></option>
    <?php endforeach; ?>
    </select>
    <p><?php _e('Please select any post status you want to assign for duplicate post. <strong>Default:</strong> Draft.', 'duplicate_page')?></p>
</td>
</tr>
<tr>
<th scope="row"><label for="duplicate_post_redirect"><?php _e('Redirect to after click on <strong>Duplicate This Link</strong>', 'duplicate_page')?></label></th>
<td><select id="duplicate_post_redirect" name="duplicate_post_redirect">
	<option value="to_list" <?php echo($opt['duplicate_post_redirect'] == 'to_list' ) ? "selected = 'selected'" : ""; ?>><?php _e('To current list', 'duplicate_page')?></option>
	<option value="to_page" <?php echo($opt['duplicate_post_redirect'] == 'to_page' ) ? "selected = 'selected'" : ""; ?>><?php _e('To duplicate edit page directly', 'duplicate_page')?></option>
    </select>
    <p><?php _e('Please select any post redirection, redirect you to selected after click on duplicate this link. <strong>Default:</strong> To current list.', 'duplicate_page')?></p>
</td>
</tr>
</tbody></table>
<p class="submit"><input type="submit" value="Save Changes" class="button button-primary" id="submit" name="submit_duplicate_page"></p>
</form>
</div>
<div id="postbox-container-1" class="postbox-container">
<div id="side-sortables" class="meta-box-sortables ui-sortable">
    <div id="submitdiv" class="postbox" style="padding: 6px;">
    <p><strong style="color:#F00"><?php _e('Contribute some donation, to make plugin more stable. You can pay amount of your choice.', 'duplicate_page')?></strong></p>
    <form name="_xclick" action="https://www.paypal.com/yt/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="mndpsingh287@gmail.com">
    <input type="hidden" name="item_name" value="Duplicate Page Plugin - Donation">
    <input type="hidden" name="currency_code" value="USD">
    <code>$</code> <input type="text" name="amount" value="" required="required" placeholder="Enter amount">
    <input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-butcc-donate.gif" border="0" name="submit" alt="Make Donations with Paypal">
    </form>
      <hr />
    </div>
</div>
</div>
</div>
</div>
</div>