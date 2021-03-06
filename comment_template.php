<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system
|
|     Copyright (C) 2001-2002 Steve Dunstan (jalist@e107.org)
|     Copyright (C) 2008-2010 e107 Inc (e107.org)
|
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $URL: https://e107.svn.sourceforge.net/svnroot/e107/trunk/e107_0.7/e107_themes/templates/comment_template.php $
|     $Revision: 11678 $
|     $Id: comment_template.php 11678 2010-08-22 00:43:45Z e107coders $
|     $Author: e107coders $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }
if (!defined("USER_WIDTH")){ define("USER_WIDTH","width:100%"); }

global $sc_style, $comment_shortcodes;
global $pref, $comrow, $row2, $tp, $NEWIMAGE, $USERNAME, $RATING;

$sc_style['SUBJECT']['pre'] = "<b>";
$sc_style['SUBJECT']['post'] = "</b>";

$sc_style['USERNAME']['pre'] = "<b>";
$sc_style['USERNAME']['post'] = "</b>";

$sc_style['TIMEDATE']['pre'] = "";
$sc_style['TIMEDATE']['post'] = "";

$sc_style['REPLY']['pre'] = "";
$sc_style['REPLY']['post'] = "";

$sc_style['AVATAR']['pre'] = "<div class='spacer'>";
$sc_style['AVATAR']['post'] = "</div>";

$sc_style['COMMENTS']['pre'] = "";
$sc_style['COMMENTS']['post'] = "<br />";

$sc_style['JOINED']['pre'] = "";
$sc_style['JOINED']['post'] = "<br />";

$sc_style['COMMENT']['pre'] = "";
$sc_style['COMMENT']['post'] = "<br />";

$sc_style['RATING']['pre'] = "";
$sc_style['RATING']['post'] = "<br />";

$sc_style['IPADDRESS']['pre'] = "";
$sc_style['IPADDRESS']['post'] = "<br />";

$sc_style['LEVEL']['pre'] = "";
$sc_style['LEVEL']['post'] = "<br />";

$sc_style['LOCATION']['pre'] = "";
$sc_style['LOCATION']['post'] = "<br />";

$sc_style['SIGNATURE']['pre'] = "";
$sc_style['SIGNATURE']['post'] = "<br />";

$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $comment_author_email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;


$COMMENTSTYLE = "
<ol class='commentlist'>
	<li id='comment-'>
		<cite>
			<img src='" .THEME_ABS. "images/comment_arrows.png' alt='' /><span class='reply' > {REPLY}</span>
			<span class='author'>{USERNAME}</span> --> {SUBJECT}<br />
			<span class='time'>{TIMEDATE}</span>  {JOINED} {COMMENTEDIT} 
		</cite>
	<div class='commenttext'>
		{COMMENT}<br />
		{RATING}
		{IPADDRESS}
		{LEVEL}
		{LOCATION}
		{SIGNATURE}
	</div>
	</li>
</ol>	
	
<br />";

echo "<script type='text/javascript' src='".THEME_ABS."comment.js'></script>";

?>