<?php
/* This file is part of osm-welcome: a platform to coordinate welcoming of OpenStreetMap mappers
 * Copyright © 2021  Clifford Snow and osm-welcome contributors
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



function states($state){
	$states = array(
		"Alabama" => "AL",
		"Alaska" => "AK",
		"Arizona" => "AZ",
		"Arkansas" => "AR",
		"California" => "CA",
		"Colorado" => "CO",
		"Connecticut" => "CT",
		"Delaware" => "DE",
		"District of Columbia" => "DC",
		"Florida" => "FL",
		"Georgia" => "GA",
		"Hawaii" => "HI",
		"Idaho" => "ID",
		"Illinois" => "IL",
		"Indiana" => "IN",
		"Iowa" => "IA",
		"Kansas" => "KS",
		"Kentucky" => "KY",
		"Louisiana" => "LA",
		"Maine" => "ME",
		"Maryland" => "MD",
		"Massachusetts" => "MA",
		"Michigan" => "MI",
		"Minnesota" => "MN",
		"Mississippi" => "MS",
		"Missouri" => "MO",
		"Montana" => "MT",
		"Nebraska" => "NE",
		"Nevada" => "NV",
		"New Hampshire" => "NH",
		"New Jersey" => "NJ",
		"New Mexico" => "NM",
		"New York" => "NY",
		"North Carolina" => "NC",
		"North Dakota" => "ND",
		"Ohio" => "OH",
		"Oklahoma" => "OK",
		"Oregon" => "OR",
		"Pennsylvania" => "PA",
		"Rhode Island" => "RI",
		"South Carolina" => "SC",
		"South Dakota" => "SD",
		"Tennessee" => "TN",
		"Texas" => "TX",
		"Utah" => "UT",
		"Vermont" => "VT",
		"Virginia" => "VA",
		"Washington" => "WA",
		"West Virginia" => "WV",
		"Wisconsin" => "WI",
		"Wyoming" => "WY"
	);
	return $states[$state];

};
?>
