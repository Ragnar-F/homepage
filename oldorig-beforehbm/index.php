<!doctype html>
<?php //require("visits/stats.php"); ?>
<html lang="en">
<head>
  <title>AutoHotkey</title><link rel="icon" type="image/ico" href="/favicon.ico">
<meta name="google-site-verification" content="fr3ji3GiYpzhLJkRkVDBS-gJoxhmoVFZnNMd8iZnE3Q" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="Free keyboard macro program. Supports hotkeys for keyboard, mouse, and joystick. Can expand abbreviations as you type them (AutoText).">
	<meta name="keywords" content="hotkey,hotkeys,hot key,hot keys,macro,macros,keyboard macro,keyboard macros,mouse macro,download,shortcut,shortcuts,shortcut key,shortcut keys,keyboard shortcut,keyboard shortcuts,script,clipboard,rsi,automate,automation,button,buttons,keystroke,keystrokes,autotext,click,press,clicks,clicker,presses,keypress,volume,mute,remap,remapper,scripting,send keys,sendkeys,ahk,ahkl,ahk_l,ironahk,iak,autoit,aut,au3">
	<!-- 
	AHKScript.org homepage uses the http://purecss.io/ CSS framework (v0.3.0)
	you can either host the CSS yourself of call Yahoos version:
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">
	-->
	<link rel="stylesheet" href="css/pure-min.css">
	<link rel="stylesheet" href="css/autohotkey.css">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" type="image/ico" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/static/ahk76.png">
    
	<?php /*?><link rel="prefetch prerender" href="/docs/Tutorial.htm" /><?php */?>
	
	<?php
		if (!isset($_GET['mobile']))
			echo '<script src="/js/detectmobilebrowser.js"></script>';
	?>
    <script type="text/javascript" language="javascript" src="/js/jquery-1.11.1.min.js"></script>
<noscript>
Javascript is Disabled in your browser please enable it
</noscript>
    <script type="text/javascript">
	$(document).ready( 
					function() 
						{
						$("#dlChoices").hide();
						$("#dlButton").click( 
											function() 
											{ 
											$("#dlChoices").toggle('5')
											/*if ( $("#dlButton").text() == "Download" )
												$("#dlButton").text("v<?php /*@include 'download/1.1/version.txt';*/ ?>");
											 else $("#dlButton").text("Download");*/
											
											
											} ); /// click
					
						}); // ready
	
    </script>
	
</head>
<body>
	<div class="content">
        <div class="ribbon" style="width:100%;">
	 		<!--<img src="static/ahk.png" alt="AHK" id="ahkimg" />
	 		<img src="static/autohotkey_text.png" alt="AutoHotkey - Automation, Hotkeys, Scripting" id="ahktext" />-->
			<div style="width:100%;">
				<a href="http://ahkscript.org/logos">
					<?php //<!-- Detect & Improve the logo on mobile-->
						echo '<img src="';
						if (isset($_GET['mobile']))
							echo 'static/ahk_logo_m.png" class="img-responsive" style="width:240px;height:76px"';
						else
							echo 'static/ahk_logo.png" class="img-responsive" width="517" height="78"';
						echo ' alt="AutoHotkey" style="margin-top:0">';
					?>
				</a>
			</div>
			<!-- image split in two above so it scales better on mobile devices - you can either
			     remove the two images above and keep this single image below or vice versa
			<img src="static/ahk_logo.png" alt="AutoHotkey - Automation, Hotkeys, Scripting" />
			-->

			<div id="searchform">
				<!-- Use of this code assumes agreement with the Google Custom Search Terms of Service. -->
				<!-- The terms of service are available at http://www.google.com/cse/docs/tos.html -->
				<form name="cse" id="searchbox_demo" action="https://www.google.com/cse">
				  <input type="hidden" name="cref" value="" />
				  <input type="hidden" name="ie" value="utf-8" />
				  <input type="hidden" name="hl" value="" />
				  <input type="hidden" name="cx" value="010629462602499112316:ywoq_rufgic" />
				  <input name="q" type="text" class="google-pure-input-1-2" />
				  <?php //<!-- Detect & Improve the search button on mobile-->
					if (isset($_GET['mobile']))
						echo '<input type="submit" name="sa" value="Search" class="pure-button" style="padding: 0.5em 0.5em;" />';
					else
						echo '<input type="submit" name="sa" value="Search" class="pure-button" />';
				  ?>
				</form>
				<script src="https://cse.google.com/cse/tools/onthefly?form=searchbox_demo&lang="></script>
			</div>
			<!--
			<form class="pure-form">
			<input type="text" placeholder="Search ahkscript.org" class="pure-input-1-2">
			<button type="submit" class="pure-button">Search</button>
			</form>
			-->
         </div> <!-- /ribbon -->
	<div id="wrapper">

	<div class="pure-g-r splash">
		<div class="pure-u-2-3">
        
			<h1>AutoHotkey</h1>

			<!--<p><small><em>Welcome to AHKScript.org, a new community founded by a number of enthusiasts to promote the use of AutoHotkey.</em></small></p>-->
			
			<h4>What is AutoHotkey?</h4>

			<p>AutoHotkey (AHK) is a free, open-source macro-creation and automation software for Windows that allows users to automate repetitive tasks. It is driven by a scripting language that was initially aimed at providing keyboard shortcuts, otherwise known as hotkeys, that over time evolved into a full-fledged scripting language. And if you're really interested, here's a great video about it <a href="https://youtu.be/lIFE7h3m40U?t=2m50s">[here]</a>.
			(<a href="http://ragnar-f.github.com/docs">de</a> - <a href="http://ahkcn.sourceforge.net/docs">帮助</a>)</p>
			
			<h4>Getting started might be easier than you think</h4>
			
			<p>Check out the <a href="/docs/Tutorial.htm">quick-start tutorial</a> for a brief overview of what you can do with AutoHotkey.</p>

		</div> <!-- /pure-u-2-3 -->

        <div class="pure-u-1-3" style="text-align:center;">
		   <h1><a class="pure-button primary-button" id="dlButton">Download</a></h1>
          <blockquote id="dlChoices">
		   <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      <a class="pure-button secondary-button" href="/download/ahk-install.exe" title="Direct download the current version" >Installer</a>
           <a href="/download/" title="Take me to the downloads page" target="_blank" class="pure-button secondary-button" >Other versions</a>
          </h4>
          </blockquote>
		   <h1><a href="/boards/" class="pure-button success-button">Forum</a></h1>
		   <h1><a href="#Resources_at_bottom" onClick="window.open('/docs/','_blank' ) " class="pure-button secondary-button">Docs</a></h1>
		   <p><?php /*?><table >
	

		<tr>
			<td class="row1">There are legal fees to form AutoHotkey Foundation. Any donation will help<br />
			  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">

              <div align="center">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="FXC8HB7XBTQJ6">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">              </div>
			</form></td>
			<td class="row1"><div align="left">This site is maintained by Volunteers and is never monetized. We depend on donations to help with costs.</div></td>
  </tr>
	</table><?php */?>&nbsp;</p>
        </div> <!-- /pure-u-1-3 -->

     </div> <!-- /pure-g-r splash -->

	<div class="content">
		<div class="pure-g-r content-ribbon">

			<div class="pure-u-2-3">
				<div class="l-box">

		        	<h3 id="beginners">Beginners</h3>

					<p>You can use AutoHotkey to:</p>

					<ul>
					<li>Automate almost anything by sending keystrokes and mouse clicks.<br />You can write a <a href="/docs/misc/Macros.htm">mouse or keyboard macro</a> by hand or a macro recorder.</li>
					<li><a href="/docs/misc/Remap.htm">Remap</a> keys and buttons on your keyboard, joystick, and mouse.</li>
					<li>Create <a href="/docs/Hotkeys.htm">hotkeys</a> for keyboard, joystick, and mouse.<br />  Essentially any key, button or combination can become a hotkey.</li>
					<li><a href="/docs/Hotstrings.htm">Expand abbreviations</a> as you type them.<br />  For example, typing "btw" can automatically produce "by the way".</li>
					<li>Retrieve and change the <a href="/docs/misc/Clipboard.htm">clipboard's contents</a>.</li>
					<li>Convert any AHK script into an <a href="/docs/Scripts.htm#ahk2exe">executable file</a> that can be run on computers where AutoHotkey is not installed.</li>
					<li>Don't know where to start or how to fix your script?<br />  Join the friendly <a href="/boards/">AutoHotkey community</a> and ask for help.</li>
					</ul>

			        <h3>Intermediates &amp; Experts</h3>

					<p>You can also:</p>

					<ul>
					<li>Create custom data-entry forms, user interfaces and menu bars.<br /> See <a href="/docs/commands/Gui.htm">GUI</a> for details (you can use a Gui editor).</li>
					<li>Automate data entry jobs by reading data from text files, XML, CSV, Excel and various database formats.</li>
					<li>Read signals from hand-held remote controls via the <a href="/docs/scripts/WinLIRC.htm">WinLIRC client script</a>.</li>
					<li>Use the <a href="/docs/commands/ComObjCreate.htm">Component Object Model</a> (COM).</li>
					<li>Use <a href="/docs/Objects.htm">array/associative array/OOP</a> (Objects).</li>
					<li>Use variadic <a href="/docs/Functions.htm">functions</a>.</li>
					<li>Use <a href="/docs/commands/DllCall.htm">DLL calls</a> and <a href="/docs/commands/PostMessage.htm">Windows Messages</a>.</li>
					<li>Use <a href="/docs/misc/RegEx-QuickRef.htm">Perl Compatible Regular Expressions</a> (PCRE).</li>
					<li>Use <a href="/docs/Scripts.htm#idebug">interactive debugging</a> features and more.</li>
					</ul>

					<h3>Standard Tools</h3>

					<p>The AutoHotkey installer includes the English documentation, script compiler 
					and Window Spy:</p>
				
					<p><b>ahk2exe</b><br />
					Convert any AHK script into an <a href="/docs/Scripts.htm#ahk2exe">executable file</a> that can be run on computers where AutoHotkey is not installed.<br />
					<a href="/docs/Scripts.htm#ahk2exe" class="pure-button secondary-button">More info</a></p>

					<p><b>Window Spy</b><br />
					A tool to retrieve detailed information about program windows and controls.
					Right click AutoHotkey tray icon to activate.</p>

				</div> <!-- /l-box -->
			</div> <!-- pure-u-2-3 -->

			<div class="pure-u-1-3">
				<div class="l-box tools">
					<h3>Updates</h3>

					<p>For the latest updates on AutoHotkey: Check the <a href="/docs/AHKL_ChangeLog.htm">Changelog</a> or <a href="/boards/viewforum.php?f=24">Announcements</a> forum.</p>
				</div> <!-- /l-box tools -->
				<div class="l-box tools">
					<h3>About the Foundation</h3>

					<p>Want to know more about the AutoHotkey Foundation? Read about it <a href="http://ahkscript.org/foundation">here</a>.</p>
				</div>
				<div class="l-box tools">

					<h3>User Developed Tools</h3>

					<p><b>SciTE4AutoHotkey</b><br />
					A SciTE-based AutoHotkey script editor that includes syntax highlighting, auto-completion, etc.<br />
					<a href="http://fincs.ahk4.me/scite4ahk/" class="pure-button secondary-button">More info</a></p>

					<p><b>GUI Creator</b><br />
					A tool to draw a Graphical User Interface (GUI) for your AHK scripts.<br/>
					<a href="/boards/viewtopic.php?f=6&t=303" class="pure-button secondary-button">More info</a></p>

					<p><b>Macro Creator</b><br />
					An advanced AutoHotkey Script Recorder and Writer.<br />
					<a href="/boards/viewtopic.php?f=6&t=143" class="pure-button secondary-button">More info</a></p>

					<p><b>iWB2 Learner (aka iWebBrowser2)</b><br /> 
					A tool to retrieve information about Internet Explorer webpages, useful for automating the IE browser using COM.<br />
					<a href="http://www.autohotkey.com/board/topic/84258-iwb2-learner-iwebbrowser2/" class="pure-button secondary-button">More info</a></p>

				</div> <!-- /l-box tools -->
			</div> <!-- /pure-u-1-3 -->

		</div> <!-- /pure-g-r content-ribbon -->
	</div>


	<div class="l-box ribbon resources">

		<h2><a name="Resources_at_bottom"></a>Resources</h2>

  </div> <!-- /l-box ribbon resources -->

		<div class="pure-g-r content-ribbon">

			<div class="pure-u-1-3">
				<div class="l-box">
					<p><b>Documentation &amp; Tutorials</b></p>

					<ul>
					<li><a href="/docs/">Documentation</a> (<a href="http://ragnar-f.github.com/docs">de</a> - <a href="http://ahkcn.sourceforge.net/docs">帮助</a>)</li>
					<li><a href="/boards/viewforum.php?f=7">Community tutorials</a> <small>(Forums)</small></li>
					<li><a href="http://www.autohotkey.com/board/forum/61-tutorials/">Community tutorials</a> <small>(Archive forum)</small></li>
					<li><a href="http://www.youtube.com/user/ahkTuts">YouTube AutoHotkey tutorials</a></li>
					<li><a href="http://maul-esel.github.io/ahkbook/index.html">Book</a> <small>(work in progress)</small></li>
					<li><a href="http://rosettacode.org/wiki/Category:AutoHotkey">Rosettacode</a> <small>(code examples)</small> </li>
					<li><a href="http://ahkwiki.net/">日本語 AutoHotkey Wiki</a> <small>(Japanese, ahkwiki.net)</small></li>
					<li><a href="http://www.computoredge.com/AutoHotkey/Free_AutoHotkey_Scripts_and_Apps_for_Learning_and_Generating_Ideas.html">Jack Dunning's AHK Page</a> <small>(Scripts, examples)</small></li>
					</ul>

				</div> <!-- /l-box -->
			</div> <!-- /pure-u-1-3 -->
			
			<div class="pure-u-1-3">
				<div class="l-box">

					<p><b>Communities</b></p>
					<ul>
					<li><a href="/boards/">AutoHotkey forum</a>  (<a href="/boards/viewforum.php?f=8">de</a>, <a href="/boards/viewforum.php?f=26">中文</a>, <a href="/boards/viewforum.php?f=39">es</a>, <a href="/boards/viewforum.php?f=46">ru</a>) <small>(phpBB)</small>
					</li>
					<li><a href="http://www.autohotkey.com/board">Archived forum</a>  (<a href="http://www.autohotkey.com/board/forum/62-deutsch-german/">de</a>) <small>(IPBoards)</small></li>
					<li><a href="http://stackoverflow.com/questions/tagged/autohotkey">Stackoverflow</a></li>
					<li><a href="http://superuser.com/questions/tagged/autohotkey">Superuser</a></li>
					<li><a href="http://www.reddit.com/r/AutoHotkey">Reddit</a></li>
					<li><a href="https://zeef.com/?query=AutoHotkey&in=all">ZEEF</a></li>
					<!-- <li><a href="http://ahk8.com/">中文论坛</a> <small>(Chinese, ahk8.com)</small> </li> -->
					<li><a href="http://forum.script-coding.com/viewforum.php?id=13">Русскоязычный форум</a> <small>(Russian, forum.script-coding.com)</small> </li>
					<li><a href="http://www.autohotkey.co.kr/">한국어</a> <small>(Korean, autohotkey.co.kr)</small></li>
					</ul>

				</div> <!-- /l-box -->
			</div> <!-- /pure-u-1-3 -->
			
			<div class="pure-u-1-3">
				<div class="l-box">

					<p><b>Source code (at Github)</b></p>
					<ul>
					<li><a href="https://github.com/Lexikos/AutoHotkey_L">AutoHotkey source code</a></li>
					<li><a href="https://github.com/Lexikos/AutoHotkey_L-Docs">AutoHotkey documentation</a> (<a href="https://github.com/Ragnar-F/ragnar-f.github.com">de</a>)</li>
					<li><a href="https://github.com/fincs/Ahk2Exe">ahk2exe source code</a></li>
					<li><a href="https://github.com/Lexikos/AutoHotkey_L/tree/alpha">AutoHotkey v2</a> <small>(alpha stage)</small></li>
					<li><a href="http://ahkscript.github.io">AHKScript Github organisation</a></li>
					</ul>

					<p><b>Forks</b></p>
					<ul>
					<li><a href="http://hotkeyit.github.io/v2/">AutoHotkey_H + AutoHotkey.dll</a></li>
					<li><a href="http://www.autohotkey.com/forum/topic27146.html">Pocket PCs</a> (WinCE)</li>
					<li><a href="http://www.autohotkey.com/forum/viewtopic.php?t=54494">IronAHK</a>, a .NET rewrite <small>(cross-platform, alpha stage)</small></li>
					</ul>

				</div> <!-- /l-box -->
			</div> <!-- /pure-u-1-3 -->

		</div> <!-- /pure-g-r content-ribbon -->

	</div> <!-- /wrapper -->
	</div>
    
	<div class="l-box ribbon">
		<h2>Join the AutoHotkey Community</h2>
		<p style='text-align:center;'>Join the community and contribute to AutoHotkey by developing code, submitting a bug fix, improving the documentation, helping other members, or even just filling a bug report.
		</p>
	</div> <!-- /l-box ribbon -->

    <div class="footer">

		<p><b>Copyright</b> &copy; 2013-2014 AutoHotkey Foundation LLC - AutoHotkey Software License: <a href="/docs/license.htm">GNU General Public License</a>
		<!-- <p class="hits"><?php //echo $info; ?>&nbsp;(<i>this month</i>)</p></p> -->

    </div> <!-- /footer -->

</body>
</html>
