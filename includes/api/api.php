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

require_once(INCLUDES_PATH.'/oauth/oauth.php');
require_once(INCLUDES_PATH.'/oauth/get_user_auth.php');

define("NO_AUTH", 1);

$api_url = 'https://api.openstreetmap.org/api/0.6/';
$userAgent = 'NewOSMContributorsInUS, currently testing, contact at clifford@snowandsnow.us';

function call_api ($action, $params=null, $method='GET', $access_token_pair=NO_AUTH) {

	global $oauth;
	global $userAgent;

	echo 'Calling API '.$action.PHP_EOL;

	$endpoint = $GLOBALS['api_url'] . $action;

	if ($access_token_pair == NO_AUTH) {
		$opts = [
			'http' => [
				'method' => $method,
				'user_agent' => $userAgent
			]
		];
		$context = stream_context_create($opts);
		return file_get_contents($endpoint, false, $context);

	} else {
		if (is_null($access_token_pair)) {
			$access_token_pair = get_user_auth();
		}
		if (!$access_token_pair) {
			die("Not authorized");
		}

		$oauth->setToken($access_token_pair[0], $access_token_pair[1]);
		$oauth->fetch($endpoint, $params, $method, ["User-Agent: $userAgent"]);

		return $oauth->getLastResponse();
	}
}

?>
