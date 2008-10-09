<?php
/*
Plugin Name: Post Keyword Research (Bloggerizer)
Plugin URI: http://www.semvironment.com
Description: Provides links for keyword research directly at the post and edit levels.
Version: 1.0
Author: semvironment
Author URI: http://www.semvironment.com
*/

function mark_submitpost_box() {
?>
	<div class="side-info">
	<h5>Keyword Research</h5>
	<ul>
		<li><a href="https://adwords.google.com/select/KeywordToolExternal" target="_blank">Google Keyword Tool</a></li>
		<li><a href="http://www.keyworddiscovery.com/search.html" target="_blank">KeywordDiscovery</a></li>
		<li><a href="http://freekeywords.wordtracker.com/" target="_blank">WordTracker</a></li>
	</ul>
	</div>
<?php
}

function mark_admin_notices() {
?>
	<ul id="submenu">
		<li><a href="https://adwords.google.com/select/KeywordToolExternal" target="_blank">Google Keyword Tool</a></li>
		<li><a href="http://www.keyworddiscovery.com/search.html" target="_blank">KeywordDiscovery</a></li>
		<li><a href="http://freekeywords.wordtracker.com/" target="_blank">WordTracker</a></li>
	</ul>
<?php
}

$PHP_SELF_fragments = explode("/", $_SERVER['PHP_SELF']);
$name_of_file = $PHP_SELF_fragments[count($PHP_SELF_fragments)-1];

$editing_files = array('page-new.php', 'page.php', 'post-new.php', 'post.php');

if(in_array($name_of_file, $editing_files)) {
	add_action('submitpost_box', 'mark_submitpost_box');
	add_action('admin_notices', 'mark_admin_notices');
}

?>