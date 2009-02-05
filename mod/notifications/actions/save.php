<?php

	/**
	 * Elgg SMS Client
	 * 
	 * @package ElggSMS
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.com/
	 */

	// Restrict to logged in users
		gatekeeper();
		
		global $SESSION;
		
		global $NOTIFICATION_HANDLERS;
		foreach($NOTIFICATION_HANDLERS as $method => $foo) {
			$subscriptions[$method] = get_input($method.'subscriptions');
			remove_entity_relationships($SESSION['user']->guid,'notify' , $method, false);
		}
		
	// Add new ones
		foreach($subscriptions as $key => $subscription)
		if (is_array($subscription) && !empty($subscription)) {
			foreach($subscription as $subscriptionperson) {
				// register_notification_interest($SESSION['user']->guid, $subscription);
				add_entity_relationship($_SESSION['user']->guid, 'notify' . $key, $subscriptionperson);
			}
		}
		
		system_message(elgg_echo('notifications:subscriptions:success'));
		
		forward($_SERVER['HTTP_REFERER']);

?>