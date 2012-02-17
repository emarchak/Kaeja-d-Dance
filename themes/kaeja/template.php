<?php

/**
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function to match your subthemes name,
 *    e.g. if you name your theme "themeName" then the function
 *    name will be "themeName_preprocess_hook". Tip - you can
 *    search/replace on "kaeja".
 * 2. Uncomment the required function to use.
 */

/**
 * Override or insert variables into all templates.
 */
/* -- Delete this line if you want to use these functions
function kaeja_preprocess(&$vars, $hook) {
}
function kaeja_process(&$vars, $hook) {
}
// */



/**
 * Override or insert variables into the html templates.
 */
/* -- Delete this line if you want to use these functions
function kaeja_preprocess_html(&$vars) {
  // Uncomment the folowing line to add a conditional stylesheet for IE 7 or less.
  // drupal_add_css(path_to_theme() . '/css/ie/ie-lte-7.css', array('weight' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
}
function kaeja_process_html(&$vars) {
}
// */

/**
 * Override or insert variables into the page templates.
 */

function kaeja_preprocess_page(&$vars) {

  // Set variables for the main menu and secondary links menu.
  $vars['main_menu_links'] = theme('links__system_main_menu', array('links' => $vars['main_menu'], 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'clearfix')), 'heading' => t('Main menu')));
 
  //$vars['secondary_menu_links'] = theme('links__system_secondary_menu', array('links' => $vars['secondary_menu'], 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'clearfix')), 'heading' => t('Secondary menu')));
  
  $menu_tree = menu_tree_all_data('main-menu');
  
  $output = '';
  $item =  menu_get_item();
	$mlid = db_select('menu_links' , 'ml')
		->condition('ml.link_path' , $item['href'])
		->fields('ml' , array('mlid'))
  	->execute()
		->fetchField();
  // $mlid = db_result(db_query("SELECT mlid FROM {menu_links} WHERE link_path = '%s'",$item['href']));
  
  $menu_item = menu_link_load($mlid);
  $plid = $menu_item['plid'];
 
  if ($plid != 0) {
    $parent_item = menu_link_load($plid);
    $rlid = $parent_item['plid'];
  }
  
  
<<<<<<< HEAD
=======
  //ADD THESE AGAIN LATER
  $vars['linked_site_logo'] = false;
  $vars['hide_site_name'] = false;
  
>>>>>>> a04f9fa27e583765200848bed0167b712d8a6d8a
  // Pull out just the menu items we are going to render so that we get an accurate count for the first/last classes.
  foreach ($menu_tree as $data) {
    if (!$data['link']['hidden'] && ($mlid == $data['link']['mlid']) || (isset($rlid) && $rlid == $data['link']['mlid']) || ($plid == $data['link']['mlid'])) {
      $menu = $data['below'];
    }
  }

  if (isset($menu)) {
  	$num_items = count($menu);
  }
  
  $count = 0;
  $extra_class= '';
 
	 if (isset($menu)){
    foreach ($menu as $data) {

      $count++;
      if ($count == 1) {
        $extra_class = 'first';
      } elseif ($count == $num_items) {
        $extra_class = 'last';
      } else {
        $extra_class = '';
      }
      
		  $sub_menu = '';
			if (!empty($data['link']['options']['attributes']['title'])) {
				$attr = drupal_attributes($data['link']['options']['attributes']);
			} else {
				$attr = '';
			}
			
			$link = l($data['link']['title'], $data['link']['href'],$data['link']['localized_options']);
		  
		  if ($data['below']) {
		    $sub_menu = drupal_render(menu_tree_output($data['below']));
		  	$output .= '<li' . $attr . '>' . $link . $sub_menu . "</li>\n";
		  } else {
		  	$output .= '<li' . $attr . '>' . $link . "</li>\n";
		  }   
    }
  }
  
  $vars['secondary_menu_links'] = '<ul id="secondary-menu" class="secondary-links clearfix">'.$output.'</ul>';



}
function kaeja_process_page(&$vars) {
}
// */

/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function kaeja_preprocess_node(&$vars) {
}
function kaeja_process_node(&$vars) {
}
// */

/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function kaeja_preprocess_comment(&$vars) {
}
function kaeja_process_comment(&$vars) {
}
// */

/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function kaeja_preprocess_block(&$vars) {
}
function kaeja_process_block(&$vars) {
}
// 
*/

function kaeja_field__field_event_id(&$vars) {
	$events = $vars['items'];
	if (!empty($events)) {
		$count = 0;
		$items = array();
		foreach ($events as $event) {
			$eid = $event['#markup'];
			$civicrm = db_select('civicrm_event', 'e')
			  ->condition('e.id' , $eid)
			  ->fields( 'e', array (
					'title','summary','description','participant_listing_id','is_public','start_date','end_date','is_online_registration','registration_link_text','registration_start_date','registration_end_date','max_participants','event_full_text','is_monetary','contribution_type_id','payment_processor_id','is_map','is_active','fee_label','is_show_location','loc_block_id','default_role_id','intro_text','footer_text','confirm_title','confirm_text','confirm_footer_text','is_email_confirm','confirm_email_text','confirm_from_name','confirm_from_email','cc_confirm','bcc_confirm','default_fee_id','default_discount_fee_id','thankyou_title','thankyou_text','thankyou_footer_text','is_pay_later','pay_later_text','pay_later_receipt','is_multiple_registrations','allow_same_participant_emails','has_waitlist','requires_approval','expiration_time','waitlist_text','approval_req_text','currency','campaign_id'))
			  ->execute()
			  ->fetchAll();
			$items[$count] = $civicrm;
			$count++;
		}
	$vars['events'] = array( $items);	
	}
}