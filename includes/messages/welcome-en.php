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

$language = 'en';
$welcome[$language] = array();


$welcome[$language]['language_name'] = 'English';

$welcome[$language]['hi'] = 'Hi %1$s';

$welcome[$language]['bravo'] = 'I saw that you made your first edit on OpenStreetMap. Congratulations and thanks! You’re now a member of the OSM community.';

$welcome[$language]['questions'] = 'If you’ve got any questions, we can help you: if you think you broke something, don’t know for sure how to map something, or just want to know more about OpenStreetMap, you can contact us.';

$welcome[$language]['helpintro'] = 'Here’s some help to get you started:';

$welcome[$language]['info_wiki'] = 'You can find a lot of information about how to map on '.markdown_link('the wiki', 'https://wiki.openstreetmap.org/wiki/').'.';

$welcome[$language]['info_iD'] = 'If you want to map something with iD and can’t find it, the quickest solution may be'; // Followed by info_solution
$welcome[$language]['info_Potlatch'] = 'If you want to map something with Potlatch and can’t find it, the quickest solution may be'; // Followed by info_solution
$welcome[$language]['info_JOSM'] = 'If you want to map something with JOSM, the presets may be of help. It’s a good idea to check out the wiki page of the tag so you can see how it is meant to be used. There are hyperlinks in the preset windows. The quickest way to find something else in the wiki may be'; // Followed by info_solution
$welcome[$language]['info_MAPSME'] = 'In Maps.me, editing options are quite limited. Head to '.markdown_link('openstreetmap.org', 'https://www.openstreetmap.org').' and click Edit to have full editing powers. If you want to know how to tag something, the quickest solution may be'; // Followed by info_solution
$welcome[$language]['info_other'] = 'If you want to know how to tag something, the quickest solution may be'; // Followed by info_solution

$welcome[$language]['info_solution'] = 'to search for “site:wiki.openstreetmap.org [search term]” with your favourite search engine. You can also browse through the questions on '.markdown_link('the Help site', 'https://help.openstreetmap.org').' or ask one yourself, or post on '.markdown_link('the forum', 'https://forum.openstreetmap.org/viewforum.php?id=29').'.';

$welcome[$language]['news'] = 'If you want to stay on top of the United States community, subscribe to the '.markdown_link('US  mailing list', 'https://lists.openstreetmap.org/listinfo/talk-us').' or sign up for the '.markdown_link('OSM US newsletter', 'http://osm.us3.list-manage.com/subscribe?u=https://openstreetmap.us3.list-manage.com/subscribe?u=162692bfdedb78ec46fd108a3&id=801ce00e6d').' or chat with us on '.markdown_link('Slack', 'https://osmus.slack.com/').'. You can also follow '.markdown_link('@OpenStreetMapUS', 'https://twitter.com/OpenStreetMapUS').' on Twitter, or the '.markdown_link('Facebook group', 'https://www.facebook.com/groups/osm.us/').'.';

$welcome[$language]['resultmaps'] = 'To see active mappers in your neighbourhood or to check out how much you’ve contributed, check out the maps and stats at '.markdown_link('resultmaps.neis-one.org', 'http://resultmaps.neis-one.org/').'.';

$welcome[$language]['weeklyosm'] = 'There’s also a '.markdown_link('weekly, global news letter about the OSM world', 'http://www.weeklyosm.eu/').' you can subscribe to. (It has an RSS feed for the fans.)';

$welcome[$language]['endingsentence'] = 'Happy Mapping!';

$welcome[$language]['osm-us'] = 'OpenStreetMap United States';

