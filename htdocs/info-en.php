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
include_once('paths.php');
include_once(INCLUDES_PATH.'/page.php');

register_style('css/info.css');
page_start('Help: welcomeing new contributors', 'info.php');

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
		<section id="terms">
			<h3>Hints to help new contributors</h3>
			<p>Add hints below:</p>
			<ul>
				<li>hint 1</li>
				<li>hint 2</li>
				<li>hint 3</li>
				<li>hint 4</li>
			</ul>

			<p>Final words here</p>
		</section>
	</article>

<?php
page_end();
?>
