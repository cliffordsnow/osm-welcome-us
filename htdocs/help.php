<?php
/* This file is part of osm-welcome: a platform to coordinate welcoming of OpenStreetMap mappers
 * Copyright © 2018  Midgard and osm-welcome contributors
 *
 * This program is free software: you can redistribute it and/or modify it under the terms of the
 * GNU Affero General Public License as published by the Free Software Foundation, either version 3
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERChaNTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License along with this
 * program. If not, see <https://www.gnu.org/licenses/>.
 */
include_once('paths.php');
include_once(INCLUDES_PATH.'/page.php');

register_style('css/info.css');
page_start('Help: welcoming new contributors', 'info.php');

function markdown_link ($text, $url) {
	echo '<span class="invisible">[</span><a href="';
	echo $url;
	echo '">';
	echo $text;
	echo '</a><span class="invisible">](';
	echo $url;
	echo ')</span>';
}
?>

	<article>
		<section id=terms">
			<h3>Welcome Tool Help</h3>
			<p>The OpenStreetMap US Welcome tools is designed to greet new mappers that made their first edit in the US. There are two parts to the welcome tool. The fist is the welcome message. The tools contain a generic welcome message but you are welcome to substitute your own message.</p>
			<p>The welcome message should be:</p>
			<ul>
				<li>Welcoming</li>
				<li>Friendly</li>
				<li>Informative</li>
				<li>Brief</li>
			</ul>

			<p>The second part of the Welcome tools is the opportunity to review the new mappers first edits and offer constructive tips to help the mapper improve. To review the edit(s) select the View User on OSMCha button. After reviewing the edit, leave changeset comments to help the user become a better mapper. One way is to leave a #TIP: comment with a quick suggestion on how to improve the edit. For example #TIP: square buildings by selecting the building outline then just type a 'q' More help using OSMCha can on the <a href="https://osmcha.org/about">OSMCha website</a></p>
			<p>When leaving changeset comments remember:</p>
		<ul>
			<li>Be friendly</li>
			<li>Offer help</li>
			<li>Point to appropriate wiki pages for more guidance</li>
		</section>
	</article>

<?php
page_end();
?>
