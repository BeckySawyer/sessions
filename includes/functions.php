<?php
function isLoggedIn() {
	return !empty($_SESSION['username']);
}
function addMessage($message) {
	$_SESSION['message'] = $message;
}
function showMessage() {
	if (!empty($_SESSION['message'])) {
		$paul = $_SESSION['message'];
		unset($_SESSION['message']);
		return $paul;
	}
		return '';
}
function redirect($url) {
 	header('Location: ' . $url);
 	die();
}