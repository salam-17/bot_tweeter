000<?php
/**
 * Envoie un message sur twitter 
 * Attention, si le message fait plus de 240 caractères, alors il ne sera pas accepté par Twitter.
 *
 * @param $message Message à envoyer à Twitter
 * @return TRUE ou FALSE
 */
function tweet($message) {
	require_once 'tmhOAuth.php';
	$tmhOAuth = new tmhOAuth(array(
		'consumer_key' => '',
		'consumer_secret' => '',
		'token' => '',
		'secret' => '',
	));

	$tmhOAuth->request('POST', $tmhOAuth->url('1.1/statuses/update'), array(
		'status' => $message
	));

	if ($tmhOAuth->response['code'] == 200) {
	
		return TRUE;
		
	} else {
		return FALSE;
	}
}
?>