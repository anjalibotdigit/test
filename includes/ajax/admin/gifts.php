<?php
/**
 * ajax -> admin -> gifts
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();


// check admin logged in
if(!$user->_logged_in || !$user->_is_admin) {
	modal("MESSAGE", __("System Message"), __("You don't have the right permission to access this"));
}

// edit gifts
try {

	switch ($_GET['do']) {
		case 'add':
			/* valid inputs */
			if(is_empty($_POST['image'])) {
				throw new Exception(__("You must upload gift image"));
			}
			/* insert */
			$db->query(sprintf("INSERT INTO gifts (image) VALUES (%s)", secure($_POST['image']) )) or _error("SQL_ERROR_THROWEN");
			/* return */
			return_json( array('callback' => 'window.location = "'.$system['system_url'].'/admincp/gifts";') );
			break;

		case 'edit':
			/* valid inputs */
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
				_error(400);
			}
			if(is_empty($_POST['image'])) {
				throw new Exception(__("You must upload gift image"));
			}
			/* update */
			$db->query(sprintf("UPDATE gifts SET image = %s WHERE gift_id = %s", secure($_POST['image']), secure($_GET['id'], 'int') )) or _error("SQL_ERROR_THROWEN");
			/* return */
			return_json( array('success' => true, 'message' => __("gift info have been updated")) );
			break;

		default:
			_error(400);
			break;
	}

} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>