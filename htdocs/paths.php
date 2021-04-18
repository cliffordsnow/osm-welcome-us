<?php
/* This file is part of osm-welcome: a platform to coordinate welcoming of OpenStreetMap mappers
 * Copyright © 2018  Midgard and osm-welcome contributors
 *
 * This program is free software: you can redistribute it and/or modify it under the terms of the
 * GNU Affero General Public License as published by the Free Software Foundation, either version 3
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License along with this
 * program. If not, see <https://www.gnu.org/licenses/>.
 */
require_once('defines.php');
// Stay logged in for a month
session_set_cookie_params(60*60*24*31, APP_HTTP_PATH, null, false, true);
session_start();

if (!isset($authorization_required) || $authorization_required !== false) {
	$logged_in = isset($_SESSION['userid']) && isset($_SESSION['displayname']);
	
	if (!$logged_in && (!isset($accessible_without_login) || !$accessible_without_login )) {
		header('Location: login.php?returnto='.rawurlencode($_SERVER['REQUEST_URI']));
		die('You are not logged in. Please <a href="dologin.php?returnto='.rawurlencode($_SERVER['REQUEST_URI']).'">log in with your OSM account</a>.');
	}
}

if (@$_SESSION['corrupted']) {
	do_logout(true);
	die('We have detected a possible attempt to take over your session. You have been logged out as a precaution. If you have a user agent spoofer, please set it to a constant value.<br/><br/><a href="login.php?returnto='.$_SERVER['REQUEST_URI'].'">Click here to proceed to the login page.</a>');
}

if (isset($_SESSION['useragent']) || isset($_SESSION['httpaccept']) || isset($_SESSION['ip'])) {
	if (
		$_SERVER['HTTP_USER_AGENT'] !== $_SESSION['useragent'] ||
		$_SERVER['REMOTE_ADDR'] !== $_SESSION['ip']
	) {
		require(INCLUDES_PATH.'/do_logout.php');
		
		$_SESSION['corrupted'] = true;
		do_logout(true);
		die('We have detected a possible attempt to take over your session. You have been logged out as a precaution. If you have a user agent spoofer, please set it to a constant value.<br/><br/><a href="login.php?returnto='.$_SERVER['REQUEST_URI'].'">Click here to proceed to the login page.</a>');
	}
} else {
	$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];
	$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
}

date_default_timezone_set('America/Los_Angeles');


?>
