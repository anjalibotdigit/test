<?php

/**
 * ajax -> posts -> project
 * 
 * @package Sngine
 * @author Zamblek
 */
// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true);

// check if market enabled
if (!$system['market_enabled']) {
    modal("MESSAGE", __("Error"), __("This feature has been disabled by the admin"));
}

try {

    // initialize the return array
    $return = array();

    switch ($_REQUEST['do']) {

        case 'publish':
            // valid inputs
            /* filter project */
            if (isset($_POST['project'])) {
                $_POST['project'] = _json_decode($_POST['project']);
                if (!is_object($_POST['project'])) {
                    _error(400);
                }
                /* check product name */
                if (is_empty($_POST['project']->name)) {
                    return_json(array('error' => true, 'message' => __("Please add your project name")));
                }
                /* check product price */
                if (is_empty($_POST['project']->pattern)) {
                    return_json(array('error' => true, 'message' => __("Please add your project pattern")));
                }
                if (is_empty($_POST['project']->craft)) {
                    return_json(array('error' => true, 'message' => __("Please add your project craft")));
                }
                if (is_empty($_POST['project']->size)) {
                    return_json(array('error' => true, 'message' => __("Please add your project size")));
                }
                if (is_empty($_POST['project']->needle)) {
                    return_json(array('error' => true, 'message' => __("Please add your project needle")));
                }
                if (is_empty($_POST['project']->made)) {
                    return_json(array('error' => true, 'message' => __("Please add your project made for")));
                }
                if (is_empty($_POST['project']->yarn)) {
                    return_json(array('error' => true, 'message' => __("Please add your project yarn")));
                }
                if (is_empty($_POST['project']->sta_date)) {
                    return_json(array('error' => true, 'message' => __("Please add your project start date")));
                }

                if (is_empty($_POST['project']->how_much)) {
                    return_json(array('error' => true, 'message' => __("Please add your project How much")));
                }
                if (is_empty($_POST['project']->dye_lot)) {
                    return_json(array('error' => true, 'message' => __("Please add your project dye lot")));
                }



                /* check product status */
                if (!in_array($_POST['project']->status, array('start', 'progress', 'finished'))) {
                    return_json(array('error' => true, 'message' => __("Please select valid project status")));
                }
            }
            /* filter photos */
            $photos = array();
            if (isset($_POST['photos'])) {
                $_POST['photos'] = _json_decode($_POST['photos']);
                
                if (!is_object($_POST['photos'])) {
                    _error(400);
                }
                /* filter the photos */
                foreach ($_POST['photos'] as $photo) {
                    $photos[] = $photo;
                }
                if (count($photos) == 0) {
                    _error(400);
                }
            }
           
            /* prepare inputs */
            $inputs['handle'] = "me";
            $inputs['privacy'] = "public";
            $inputs['message'] = $_POST['message'];
            $inputs['project'] = $_POST['project'];
            $inputs['photos'] = array_reverse($photos);
            /* publish */
            $post = $user->publisher($inputs);
            $return['callback'] = "window.location = '" . $system['system_url'] . "/posts/" . $post['post_id'] . "';";
            break;

        case 'create':
            // prepare publisher

            $return['product_publisher'] = $smarty->fetch("ajax.project.publisher.tpl");
            $return['callback'] = "$('#modal').modal('show'); $('.modal-content:last').html(response.product_publisher); initialize_modal();";
            break;

        case 'edit':
            // valid inputs
            if (!isset($_GET['post_id']) || !is_numeric($_GET['post_id'])) {
                _error(400);
            }

            // get post
            $post = $user->get_post($_GET['post_id']);
           

            if (!$post) {
                _error(400);
            }
            /* assign variables */
            
            $smarty->assign('post', $post);
            /* return */
            $return['template'] = $smarty->fetch("ajax.project.editor.tpl");
            $return['callback'] = "$('#modal').modal('show'); $('.modal-content:last').html(response.template); initialize_modal();";
            break;

        default:
            _error(400);
            break;
    }

    // return & exit
    return_json($return);
} catch (Exception $e) {
    modal("ERROR", __("Error"), $e->getMessage());
}
?>