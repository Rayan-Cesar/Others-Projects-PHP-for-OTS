<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1"/>
<html>
<script language=JavaScript>
<!--
var mensagem="";
function clickIE() {if (document.all) {(mensagem);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(mensagem);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
// --> 
</script>
<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}</style>
<script type="text/javascript">
  if(top.location != window.location) {
    top.location = self.location;
  }
</script>
<meta charset="utf-8">
<title><?PHP echo $title ?></title>
<meta name="description" content="Tibia is a free massively multiplayer online role-playing game (MMORPG)">
<meta name="author" content="Felipe">
<meta http-equiv="content-language" content="en">
<meta name="keywords" content="free online rpg, free mmorpg, mmorpg, mmog, online role playing game, online multiplayer game, internet game, online rpg, rpg">
<!--ICON-->
<link rel="shortcut icon" href="<?PHP echo $layout_name; ?>/images/general/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?PHP echo $layout_name; ?>/images/general/favicon.ico" type="image/x-icon">
<!--CSS'S-->
<link href="<?PHP echo $layout_name; ?>/css/basic_d.css" rel="stylesheet" type="text/css">
<link href="<?PHP echo $layout_name; ?>/css/news.css" rel="stylesheet" type="text/css">
<!--JS--> 
<script id="twitter-wjs" src="<?PHP echo $layout_name; ?>/js/widgets.js"></script>
<script id="facebook-jssdk" async src="<?PHP echo $layout_name; ?>/js/all.js"></script>
<script type="text/javascript" src="<?PHP echo $layout_name; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?PHP echo $layout_name; ?>/js/ajaxcip.js"></script>
<script type="text/javascript" src="<?PHP echo $layout_name; ?>/js/generic.js"></script>
<script type="text/javascript" src="<?PHP echo $layout_name; ?>/js/create_character.js"></script>
<script type="text/javascript">  
var loginStatus=0; 
loginStatus='<?PHP if($logged){ ?>true<?PHP }else{ ?>false<?PHP } ?>';  
var activeSubmenuItem='<?PHP echo $subtopic; ?>';  
var JS_DIR_IMAGES=0; 
JS_DIR_IMAGES='<?PHP echo $layout_name; ?>/images/';  
var JS_DIR_ACCOUNT=0; 
JS_DIR_ACCOUNT='';  
var g_FormName='';  
var g_FormField='';  
var g_Deactivated=false;
var FB_TryLogin = 0;
var FB_ForceReload = 0;
</script>
<script type="text/javascript">
  if(top.location != window.location) {
    top.location = self.location;
  }
</script>



<script type="text/javascript" src="<?PHP echo $layout_name; ?>/initialize.js"></script>

<link href="<?PHP echo $layout_name; ?>/css/facebook.css" rel="stylesheet" type="text/css">  
</head>

<body onbeforeunload="SaveMenu();" onunload="SaveMenu();" class="fadeIn" data-twttr-rendered="true" style="background-image:url(./layouts/tibiarl/images/header/background-artwork.jpg); background-repeat: no-repeat; background-position: 50% 0%;">
<script type="text/javascript">
  window.fbAsyncInit = function() {
    FB.init({
      appId      : 497232093667125, // App ID
      status     : true,              // check login status
      cookie     : true,              // enable cookies to allow the server to access the session
      xfbml      : true               // parse XFBML
    });
    FB.Event.subscribe('auth.login', function() {
      var URLHelper = "?";
      if (window.location.search.replace("?", "").length > 0) {
        URLHelper = "&";
      }
      if (FB_TryLogin == 1) {
        window.location = window.location + URLHelper + "step=facebooktrylogin&wasreloaded=1";
      } else if (FB_TryLogin == 2) {
        window.location = window.location + URLHelper + "page=facebooktrylogin&wasreloaded=1";
      } else {
        window.location = window.location + URLHelper + "wasreloaded=1";
      }
    });
    FB.Event.subscribe('auth.logout', function(a_Response) {
      if (a_Response.status !== 'connected') {
        window.location.href=window.location.href;
      } else {
        /* nothing to do here*/
      }
    });
    FB.Event.subscribe('auth.statusChange', function(response) {
      if (FB_ForceReload == 1 && response.status == "connected") {
        var URLHelper = "?";
        if (window.location.search.replace("?", "").length > 0) {
          URLHelper = "&";
        }
        window.location = window.location + URLHelper + "step=facebooktrylogin&wasreloaded=1";
      }
    });
  };
  (function(d){
    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    ref.parentNode.insertBefore(js, ref);
  }(document));
</script>
  <a name="top"></a>
  <div id="MainHelper1">
  	<div id="MainHelper2">
    	<div id="ArtworkHelper1">
        	<div id="ArtworkHelper2">
          		<div id="HeaderArtworkDiv"></div>
        	</div>
      	</div>
		
      	<div id="DeactivationContainer" onclick="DisableDeactivationContainer();"></div>

      	<div id="Bodycontainer">
      	<div id="ContentRow">
          	<div id="MenuColumn">
            	<div id="LeftArtwork">
              		<a href="/?subtopic=latestnews">
						<img id="TibiaLogoArtworkTop" src="<?PHP echo $layout_name; ?>/images/header/tibia-logo-artwork-top.gif" alt="logoartwork">
					</a>
            	</div>
				
  				<?PHP include "loginbox.php"; ?>
				<div id="Menu">
					<div id="MenuTop" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-top.gif);"></div>
						<div id="news" class="menuitem">
							<span onclick="MenuItemAction('news')">
  								<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
    								<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
      								<span id="news_Lights" class="Lights">
        								<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
										<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
										<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
      								</span>
									<div id="news_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-news.gif);"></div>
									<div id="news_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-news.gif);"></div>
									<div id="news_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/minus.gif);"></div>
    							</div>
  							</div>
						</span>
						<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
						
						<div id="news_Submenu" class="Submenu">
  <a target="_blank" href="https://www.facebook.com/BaiakPvp-829250937219416/" alt="Facebook">
  <div id="submenu_latestnews" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    								<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
    								<div id="ActiveSubmenuItemIcon_face" class="ActiveSubmenuItemIcon" style="background-image: url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
    								<div id="ActiveSubmenuItemLabel_fae" class="SubmenuitemLabel"><img src="layouts/tibiarl/images/general/social-network_mini_facebook.png" height="14" width="14"><span style="color:#d7d7d7;"> FaceBook Page</span></span></div>
    								<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  								</div>
								</a>
 
							<a href="?subtopic=latestnews">
  								<div id="submenu_latestnews" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    								<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
    								<div id="ActiveSubmenuItemIcon_latestnews" class="ActiveSubmenuItemIcon" style="background-image: url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
    								<div id="ActiveSubmenuItemLabel_latestnews" class="SubmenuitemLabel"><img src="/images/new.png" height="14" width="14"><span style="color:#d7d7d7;"> Latest News</span></span></div>
    								<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  								</div>
							</a>
							
								
								<a href="?subtopic=cast">
  								<div id="submenu_cast" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    								<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
									<div id="ActiveSubmenuItemIcon_cast" class="ActiveSubmenuItemIcon" style="background-image: url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
									<div id="ActiveSubmenuItemLabel_cast" class="SubmenuitemLabel"><span style="color:#d7d7d7;"><img src="http://findicons.com/files/icons/1253/flurry_extras/128/tv.png" height="14" width="14"><span style="background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)"> Cast System</span></span></div>
									<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  								</div>	</a>
								<a href="?subtopic=download">
  								<div id="submenu_download" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    								<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
									<div id="ActiveSubmenuItemIcon_download" class="ActiveSubmenuItemIcon" style="background-image: url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
									<div id="ActiveSubmenuItemLabel_download" class="SubmenuitemLabel"><span style="color:#d7d7d7;"><img src="/images/down.png" height="14" width="14"><span style="background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)"> Downloads</span></span></div>
									<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  								</div>	</a>						
						</div>
					</div>

								
					

								
				<div id="Wars" class="menuitem">
				<span onclick="MenuItemAction('wars')">
					<div class="MenuButton" style="background-image:url(./layouts/tibiarl/images/menu/button-background.gif);">
						<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(./layouts/tibiarl/images/menu/button-background-over.gif);"></div>
						<span id="wars_Lights" class="Lights">
							<div class="light_lu" style="background-image:url(./layouts/tibiarl/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(./layouts/tibiarl/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(./layouts/tibiarl/images/menu/green-light.gif);"></div>
						</span>
						<div id="wars_Icon" class="Icon" style="background-image:url(./layouts/tibiarl/images/menu/icon-wars.gif);"></div>
						<div id="wars_Label" class="Label" style="background-image:url(./layouts/tibiarl/images/menu/label-wars.gif);"></div>
						<div id="wars_Extend" class="Extend" style="background-image: url(./layouts/tibiarl/images/general/plus.gif);"></div>
					</div>
				</div>
			</span>
			<div id="wars_Submenu" class="Submenu">
				<a href="?subtopic=warentrosa">
					<div id="submenu_warentrosa" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(./layouts/tibiarl/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_warentrosa" class="ActiveSubmenuItemIcon" style="background-image:url(./layouts/tibiarl/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_warentrosa" class="SubmenuitemLabel"><span style="color:#d7d7d7;"><img src="" alt=""><span style="background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)">War Anti Entrosa <small><font color="red"> [new]</font></small></span></span></div>
						<div class="RightChain" style="background-image:url(./layouts/tibiarl/images/general/chain.gif);"></div>
					</div>
				</a>
					
				<a href="?subtopic=wars">
					<div id="submenu_wars" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(./layouts/tibiarl/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_wars" class="ActiveSubmenuItemIcon" style="background-image:url(./layouts/tibiarl/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_wars" class="SubmenuitemLabel"><span style="color:#d7d7d7;">War System</span></span></div>
						<div class="RightChain" style="background-image:url(./layouts/tibiarl/images/general/chain.gif);"></div>
					</div>
				</a>
				
					<a href="?subtopic=fraggers">
						<div id="submenu_fraggers" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_fraggers" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_fraggers" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Top Frags</span></span></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=topguilds">
						<div id="submenu_topguilds" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_topguilds" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_topguilds" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Top Guilds</span></span></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>

					<a href="?subtopic=patentesinfo">
						<div id="submenu_topguilds" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_patentesinfo" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_patentesinfo" class="SubmenuitemLabel"><span style="color:#d7d7d7;"><img src="" alt=""><span style="background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)">Patentes Info <small><font color="orange"> [new]</font></small></span></span></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					
					<a href="?subtopic=patentescores">
						<div id="submenu_patentescores" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_patentescores" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_patentescores" class="SubmenuitemLabel"><span style="color:#d7d7d7;"><img src="" alt=""><span style="background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)">Patente Scores <small><font color="#ff00c0"> [new]</font></small></span></span></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>

					<a href="?subtopic=experiencetable">
						
					
					
					</a>
				</div>
			</div>
			
			
			
			<div id="community" class="menuitem">
				<span onclick="MenuItemAction('community')">
					<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
						<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
						<span id="community_Lights" class="Lights">
							<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
						</span>
						<div id="community_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-community.gif);"></div>
						<div id="community_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-community.gif);"></div>
						<div id="community_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
					</div>
				</div>
			</span>
			
			<div id="community_Submenu" class="Submenu">
				<a href="?subtopic=characters">
					<div id="submenu_characters" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_characters" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_characters" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Characters</span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=whoisonline">
					<div id="submenu_whoisonline" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_whoisonline" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_whoisonline" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Who is Online</span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=highscores">
					<div id="submenu_highscores" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_highscores" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_highscores" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Highscores</span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				
				<a href="?subtopic=killstatistics">
					<div id="submenu_killstatistics" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_killstatistics" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_killstatistics" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Kill Statics</span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				
				<a href="?subtopic=guilds">
					<div id="submenu_guilds" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_guilds" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_guilds" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Guilds</span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				
						<a href="?subtopic=fraggers">
					<div id="submenu_frags" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_guilds" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_guilds" class="SubmenuitemLabel"><span style="color:red">Top Fraggers</span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				
				<a href="?subtopic=sellpoints">
					<div id="submenu_sellpoints" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_sellpoints" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_sellpoints" class="SubmenuitemLabel"><span style="color:#d7d7d7;"><img src="" alt=""><span style="background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)">Sell Points <small><font color="#3ea7fa">[new]</font></small></span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				
				
				
			</div>
		</div>
		
		
			<div id="forum" class="menuitem">
				<span onclick="MenuItemAction('forum')">
					<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
						<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
						<span id="forum_Lights" class="Lights">
							<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
						</span>
						<div id="forum_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-events.gif);"></div>
						<div id="forum_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-events.gif);"></div>
						<div id="forum_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
					</div>
				</div>
				
			</span>
			<div id="forum_Submenu" class="Submenu">
			
			
			
						<a href="?subtopic=Calendario">
					<div id="submenu_Calendario" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_calendario" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_snowballwar" class="SubmenuitemLabel"><span style="color:#d7d7d7;"><img src="" alt=""><span style="background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)">Calendario <small><font color="#f9a83d">[new]</font></small> <img src="layouts/tibiarl/images/general/calendario.png" height="14" width="14"></span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
			
			<a href="?subtopic=dtt">
					<div id="submenu_dtt" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_dtt" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_dtt" class="SubmenuitemLabel"><span style="color:#d7d7d7;"><span style="background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)">Defend The Towers <img src="layouts/tibiarl/images/general/tower.gif" height="14" width="14"></span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				
			<a href="?subtopic=teambattle">
					<div id="submenu_dtt" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_teambattle" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_teambattle" class="SubmenuitemLabel"><span style="color:#d7d7d7;"><img src="" alt=""><span style="background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)">Team Battle <img src="layouts/tibiarl/images/general/team.png" height="14" width="14"></span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>	
	
				<a href="?subtopic=snowballwar">
					<div id="submenu_snowballwar" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_snowballwar" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_snowballwar" class="SubmenuitemLabel"><span style="color:#d7d7d7;"><img src="" alt=""><span style="background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)">Snow Ball War <small><font color="#f9a83d">[new]</font></small> <img src="layouts/tibiarl/images/general/neve.png" height="14" width="14"></span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
					
									<a href="?subtopic=islandofelement">
					<div id="submenu_snowballwar" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_islandofelement" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_islandofelement" class="SubmenuitemLabel"><span style="color:#d7d7d7;"><img src="" alt=""><span style="background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)">Island Of Elements </span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>


			<a href="?subtopic=desertwar">
					<div id="submenu_desertwar" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_desertwar" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_desertwar" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Desert War <img src="layouts/tibiarl/images/general/desert.gif" height="14" width="14"></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>


          		<a href="?subtopic=battlefield">
					<div id="submenu_battlefield" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_battlefield" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_battlefield" class="SubmenuitemLabel"><span style="color:#d7d7d7;">BattleField <img src="layouts/tibiarl/images/general/war.gif" height="14" width="30"></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
			<a href="?subtopic=bandeira">
					<div id="submenu_bandeira" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_bandeira" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_bandeira" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Capture The Flag <img src="layouts/tibiarl/images/general/ctf.png" height="14" width="14"></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
					<a href="?subtopic=zombievent">
					<div id="submenu_zombievent" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_zombievent" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_zombievent" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Zombie Event <img src="layouts/tibiarl/images/general/zombie.gif" height="14" width="14"></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>


			</div>
		</div>
			
			<div id="account" class="menuitem">
				<span onclick="MenuItemAction('account')">
  					<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
    					<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
      					<span id="account_Lights" class="Lights">
        					<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
      					</span>
					  	<div id="account_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-account.gif);"></div>
					  	<div id="account_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-account.gif);"></div>
					  	<div id="account_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
    				</div>
  				</div>
			</span>
			<div id="account_Submenu" class="Submenu">
			<?PHP
			if($group_id_of_acc_logged >= $config['site']['access_admin_panel']){
			?>
				<a href="?subtopic=cpanel">
  					<div id="submenu_cpanel" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_cpanel" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_cpanel" class="SubmenuitemLabel"><font color=red><span style="color:#d7d7d7;">Admin Painel</span></span></font></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
			<?PHP } ?>
				<a href="?subtopic=accountmanagement">
  					<div id="submenu_accountmanagement" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_accountmanagement" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_accountmanagement" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Account Management</span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=createaccount">
  					<div id="submenu_createaccount" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    					<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_createaccount" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_createaccount" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Create Account</span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<?PHP
				if($config['site']['download_page']){
				?>
				<a href="?subtopic=download&action=downloadagreement">
  					<div id="submenu_download" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_download" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_download" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Download Client</span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<?PHP } ?>
				<a href="?subtopic=lostaccount">
  					<div id="submenu_lostaccount" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_lostaccount" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_lostaccount" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Recuperar Account</span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
			</div>
		</div>
			<div id="team" class="menuitem">
				<span onclick="MenuItemAction('team')">
  					<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
    					<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image: url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
      					<span id="team_Lights" class="Lights">
							<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
      					</span>
						<div id="team_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-support.gif);"></div>
						<div id="team_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-support.gif);"></div>
						<div id="team_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
    				</div>
  				</div>
			</span>
			<div id="team_Submenu" class="Submenu">
				<a href="?subtopic=tibiarules">
  					
				</a>
				<a href="?subtopic=team">
  					<div id="submenu_team" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_team" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_team" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Support List</span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
					<a href="?subtopic=serverinfo">
  					<div id="submenu_serverinfo" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_serverinfo" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_serverinfo" class="SubmenuitemLabel"><span style="color:#d7d7d7;">Server Info</span></span></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
			</div>
		</div>
		
		
		<?PHP
			if($config['site']['shop_system']){
		?>
			<div id="shops" class="menuitem">
				<span onclick="MenuItemAction('shops')">
  					<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
    					<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image: url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
      					<span id="shops_Lights" class="Lights">
							<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
      					</span>
					  	<div id="shops_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-shops.gif);"></div>
					  	<div id="shops_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-shops.gif);"></div>
					  	<div id="shops_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
    				</div>
  				</div>
			</span>
			<div id="shops_Submenu" class="Submenu">
				<a href='?subtopic=buypt'>
  					<div id='submenu_buypt' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    					<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_buypt' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class="SubmenuitemLabel"><span style="color:yellow; background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)">Doar Points</span></div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
			
			<a href='?subtopic=confirmacao'>
  					<div id='submenu_confirmacao' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_confirmacao' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class="SubmenuitemLabel"><span style="color:yellow; background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)">Confirmando Points</span></div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>

				<a href='?subtopic=shopsystem'>
  					<div id='submenu_shopsystem' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_shopsystem' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class="SubmenuitemLabel"><blink style="color: #18ff00; background: transparent url(/layouts/tibiarl/images/menu/bg_menu.gif)">Shop Online</blink></div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<?PHP
				if($logged){
				?>
				<a href='?subtopic=shopsystem&action=show_history'>
  					<div id='submenu_show_history' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_show_history' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'>History</div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<?PHP } ?>
				<?PHP
				if($group_id_of_acc_logged >= $config['site']['access_admin_panel']){
				?>
				<a href='?subtopic=shopadmin'>
  					<div id='submenu_shopadmin' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_shopadmin' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'><font color=0099FF>Shop Admin</font></div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<a href='?subtopic=shopguildadmin'>
  					<div id='submenu_shopguildadmin' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_shopguildadmin' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'><font color=#EB8305>ShopGuild Admin</font></div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<?PHP } ?>
			</div>
		</div>
		<?PHP } ?>
		<div id="MenuBottom" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-bottom.gif);"></div>
	</div>
	<script type="text/javascript">InitializePage();</script></div>
    	<div id="ContentColumn">
        	<div id="Content" class="Content">
<div style="position:absolute; top:-32px; left:490px;">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">

</div>
            	<div id="ContentHelper">
				<script type="text/javascript" src="<?PHP echo $layout_name; ?>/newsticker.js"></script>
				<?PHP echo $news_content; ?>

				



  				
				<div id="news" class="Box">
    				<div class="Corner-tl" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/corner-tl.gif);"></div>
					<div class="Corner-tr" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/corner-tr.gif);"></div>
					<div class="Border_1" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/border-1.gif);"></div>
					<div class="BorderTitleText" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/title-background-green.gif);"></div>
    				<img id="ContentBoxHeadline" class="Title" src="pages/headline.php?txt=<?PHP echo ucwords(str_replace('_', ' ', strtolower($subtopic))); ?>" alt="Contentbox headline">
    				<div class="Border_2">
      					<div class="Border_3">
        					<div class="BoxContent" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/scroll.gif);">
								<?PHP echo $main_content; ?>
        					</div>
      					</div>
    				</div>

					<div class="Border_1" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/border-1.gif);"></div>
					<div class="CornerWrapper-b"><div class="Corner-bl" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/corner-bl.gif);"></div></div>
					<div class="CornerWrapper-b"><div class="Corner-br" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/corner-br.gif);"></div></div>
  				</div>
              	<div id="ThemeboxesColumn">
                	<div id="DeactivationContainerThemebox" onclick="DisableDeactivationContainer();"></div>
                	<div id="RightArtwork">
                  		<img id="Monster" src="images/monster/marid.gif" onclick="window.location = #" alt="Monster of the Week">
                  		<img id="PedestalAndOnline" src="<?PHP echo $layout_name; ?>/images/header/pedestal-and-online.gif" alt="Monster Pedestal and Players Online Box">
                  		<div id="PlayersOnline" onClick="window.location='?subtopic=whoisonline'">
		  				    <?PHP
			if($config['status']['serverStatus_online'] == 1)
				echo $config['status']['serverStatus_players'].'<br />Players Online';
			else
				echo '<font color="red"><b>Server<br />OFFLINE</b></font>';
		  ?></div>
        </div>

                	<div id="Themeboxes">
					
					


					
					
					
					

<style type="text/css" media="all">
  .Toplevelbox {
    top: -4px;
    position: relative;
    margin-bottom: 10px;
    width: 180px;
    height: 346px;
  }

  .top_level_x {
    position: absolute;
    top: 29px;
    left: 6px;
    height: 290px;
    width: 168px;
    z-index: 20;
    text-align: center;
    padding-top: 6px;
    font-family: Tahoma, Geneva, sans-serif;
    font-size: 9.2pt;
    color: black;
    font-weight: bold;
    text-align: right;
    text-decoration: inherit;
    text-shadow: 0.1em 0.1em #333
  }

  .top_level {
    position: absolute;
    top: 29px;
    left: 6px;
    height: 300px;
    width: 168px;
    z-index: 20;
    text-align: center;
    padding-top: 6px;
    font-family: Tahoma, Geneva, sans-serif;
    font-size: 9.2pt;
    color: black;
    font-weight: bold;
    text-align: right;
    text-decoration: inherit;
    text-shadow: 0.1em 0.1em #333
  }

  #Topbar a {
  text-decoration: none;
  cursor: auto;
  }
  a.topfont {
    font-family: Verdana, Arial, Helvetica; 
    font-size: 11px; 
    color: #ffcc33;
    text-decoration: none
	text-shadow: #FA0606 1px 1px 10px;
  }
  a:hover.topfont {
    font-family: Verdana, Arial, Helvetica; 
    font-size: 11px;  
    color: #CCC; 
    text-decoration:none
  }
</style>
<div id="Topbar" class="Themebox" style="background-image:url(<?PHP echo $layout_name; ?>/images/top_level.png);">
  <div class="top_level" style="background:url(<?PHP echo $layout_name; ?>/images/bg_top.png)" align="	">
    <?php
	$limitt = 5;
	$_storage = 378378;
	$skills = $SQL->query("SELECT a.name, a.level, a.experience, b.resets, a.looktype, a.lookaddons, a.lookhead, a.lookbody, a.looklegs, a.lookfeet FROM (SELECT * FROM players WHERE group_id < 2 AND name != 'Account Manager') a left join (SELECT b.player_id, b.value as resets FROM player_storage b WHERE b.key = '$_storage') b on (a.id = b.player_id) ORDER BY ABS(b.resets) DESC, a.level DESC, a.experience DESC LIMIT $limitt");
 
	$number_of_rows = 0;


	foreach($skills as $skillss) {
    $resets= $skillss['resets'];
    $resets= (int)$resets;

    echo '<div align="left">
    		
    		<a href="?subtopic=characters&name='.$skillss['name'].'" class="topfont"><font color="#CCC">&nbsp;&nbsp;&nbsp;&nbsp;'.$a.' - </font>'.$skillss['name'].'<br>
          <small><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Level: ('.$skillss['level']  . ')  - Resets: '. (($resets)? $resets : 0) .'</font></small><br>
        </a>

        <img src="http://outfit-images.ots.me/animatedOutfits1099/animoutfit.php?id='.$skillss['looktype'].'&addons='.$skillss['lookaddons'].'&head='.$skillss['lookhead'].'&body='.$skillss['lookbody'].'&legs='.$skillss['looklegs'].'&feet='.$skillss['lookfeet'].'" width="64" height="64" style="width: 64px; height: 64px; position: absolute; background-position: 0 0; background-repeat: no-repeat; left: -50px; margin-top: -70px;">

    </div>';
    $number_of_rows++;

  	}

?>

    <div class="Bottom" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-bottom.gif); margin-top: 70px;; margin-left:-5px;">
</div>	


<div id="CastleWarBox" class="Themebox" style="left: -5px; top: 58px; background-image:url(<?PHP echo "$layout_name"; ?>/images/themeboxes/castlewarbox.png); margin-bottom:20px; height:192px;">
  <div style="padding-top:48px;">
  
    <div align="center" style="text-align:center;">
     <?php foreach($SQL->query('SELECT * FROM `global_storage` WHERE `key` = 100006')->fetchAll() as $storage)
            {
              if ($storage['value'] != -1) {
                $guildId = $storage['value'];
                break;
              }
            }

            $guild = new Guild();
            $guild->loadById($guildId);
            if (!$guild)
              $name = "";
            else
              $name = $guild->getName();
      ?>
      <a href="" class="topfont">
	  <center><font color="RED">CASTLE 48H</font></center><br>
      <?php if ($guildId != 0) { echo '<img src="/guild_image.php?id=' . $guildId . '" width="64" height="64" border="0"/>'; } else { echo 'Nenhuma guild Castle48H.'; }?></a>
      <p><a class="topfont"><?php echo $name; ?></a></p>
    </div>      </div>
  <div class="Bottom" style="background-image:url(layouts/tibia/imagens/general/box-bottom.gif); top:191px;"></div>
</div>

<div id="CastleWarBox" class="Themebox" style="left: -5px; top: 60px; background-image:url(<?PHP echo "$layout_name"; ?>/images/themeboxes/castlewarbox.png); margin-bottom:20px; height:192px;">
  <div style="padding-top:48px;">
  
    <div align="center" style="text-align:center;">
     <?php foreach($SQL->query('SELECT * FROM `global_storage` WHERE `key` = 123123')->fetchAll() as $storage)
            {
              if ($storage['value'] != -1) {
                $guildId = $storage['value'];
                break;
              }
            }

            $guild = new Guild();
            $guild->loadById($guildId);
            if (!$guild)
              $name = "";
            else
              $name = $guild->getName();
      ?>
      <a href="" class="topfont">
	  <center><font color="RED">CASTLE 24H</font></center><br>
      <?php if ($guildId != 0) { echo '<img src="/guild_image.php?id=' . $guildId . '" width="64" height="64" border="0"/>'; } else { echo 'Nenhuma guild Castle24H.'; }?></a>
      <p><a class="topfont"><?php echo $name; ?></a></p>
    </div>      </div>
  <div class="Bottom" style="background-image:url(layouts/tibia/imagens/general/box-bottom.gif); top:191px;"></div>
</div></div>


  


<div id="fb-root"></div>


</br>



<?PHP
$time = time();
$viewpoll = $SQL->query('SELECT * FROM z_polls where end > '.$time.' ORDER BY id DESC LIMIT 1');
foreach($viewpoll as $p)
$polls .= '<center>'.$p['question'].'</center>';
    if(count($p['id']) > 0)
     echo '<div id="CurrentPollBox" class="Themebox" style="background-image:url('.$layout_name.'/images/themeboxes/current-poll/currentpollbox.gif);">
      <div id="CurrentPollText">'.$polls.'</div>
      <a class="ThemeboxButton" href="?subtopic=polls&id= '.$p['id'].'" onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif);"><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
        <div class="ButtonText" style="background-image:url('.$layout_name.'/images/buttons/_sbutton_votenow.gif);"></div>
      </a>
    <div class="Bottom" style="background-image:url('.$layout_name.'/images/general/box-bottom.gif);"></div>
    </div>';
?>
						
						

						<!-- networks theme box -->
						<?PHP
						$nF = $SQL->query("SELECT " .$SQL->fieldName('network_link'). " FROM " .$SQL->tableName('z_network_box'). " WHERE " .$SQL->fieldName('network_name'). " = 'facebook'")->fetch();
						$nT = $SQL->query("SELECT " .$SQL->fieldName('network_link'). " FROM " .$SQL->tableName('z_network_box'). " WHERE " .$SQL->fieldName('network_name'). " = 'twitter'")->fetch();
						?>
						<?PHP if(!empty($nF)){ ?>
    							</div>
							<?PHP if(!empty($nT)){ ?>
  							<div id="TwitterBlock">
    							<a href="https://twitter.com/<?PHP echo $nT['network_link']; ?>" class="twitter-follow-button" data-show-count="false">Follow @<?PHP echo $nT['network_link']; ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  							</div>
							<?PHP } ?>
  							<div class="Bottom" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-bottom.gif);"></div>
						</div>
						<?PHP } ?>
						<?PHP if($config['site']['screenshot_page']){ ?>
  						<!-- screenshot theme box -->
  						<div id="ScreenshotBox" class="Themebox" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/screenshot/screenshotbox.gif);">
    						<a href="#">
      							<img id="ScreenshotContent" class="ThemeboxContent" src="images/screenshots/witch_thumb.gif" alt="Screenshot of the Day">
    						</a>
  							<div class="Bottom" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-bottom.gif);"></div>
  						</div>
						<?PHP } ?>
    					<!-- current poll theme box -->
						<?PHP
    						$time = time();
							$viewpoll = $SQL->query("SELECT * FROM `z_polls` where end > '$time' ORDER BY id DESC LIMIT 1");
							foreach($viewpoll as $p){
							$polls .= '<center>'.$p['question'].'</center>';
								if(isset($p['id'])){
								 echo '<div id="CurrentPollBox" class="Themebox" style="background-image:url('.$layout_name.'/images/themeboxes/current-poll/currentpollbox.gif);">
								  <div id="CurrentPollText">'.$polls.'</div>
								  <a class="ThemeboxButton" href="index.php?subtopic=polls&id= '.$p['id'].'" onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif);"><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
									<div class="ButtonText" style="background-image:url('.$layout_name.'/images/buttons/_sbutton_votenow.gif);"></div>
								  </a>
								<div class="Bottom" style="background-image:url('.$layout_name.'/images/general/box-bottom.gif);"></div>
								</div>';
								}
							}
							?>

                	</div>
              	</div>
            </div>
		</div>
        <div id="Footer">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- favor não retirar, como editor do site é uma forma de eu ganhar um incentivo -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-6100399131205060"
     data-ad-slot="1095005431"></ins><br>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        	Copyright by CipSoft GmbH. All rights reserved.<br>
            <a href="#">About CipSoft</a> | 
			<a href="#">Service Agreement</a> | 
			<a href="#">Privacy Policy</a>
        </div>
	</div>
</div>
</div>
</div>
</div>
<style type="text/css">
/*<![CDATA[*/
#fbplikebox{display: block;padding: 0;z-index: 99999;position: fixed;}
.fbplbadge {background-color:#3B5998;display: block;height: 150px;top: 50%;margin-top: -75px;position: absolute;left: -47px;width: 47px;background-image: url("http://3.bp.blogspot.com/-1GCgbuSZXK0/T38iRiVF41I/AAAAAAAABpg/WlGuQ3fi-Rs/s1600/vertical-right.png");background-repeat: no-repeat;overflow: hidden;-webkit-border-top-left-radius: 8px;-webkit-border-bottom-left-radius: 8px;-moz-border-radius-topleft: 8px;-moz-border-radius-bottomleft: 8px;border-top-left-radius: 8px;border-bottom-left-radius: 8px;}
/*]]>*/
</style>
<script type="text/javascript">
/*<![CDATA[*/
    (function(w2b){
        w2b(document).ready(function(){
            var $dur = "medium"; // Duration of Animation
            w2b("#fbplikebox").css({right: -250, "top" : 100 })
            w2b("#fbplikebox").hover(function () {
                w2b(this).stop().animate({
                    right: 0
                }, $dur);
            }, function () {
                w2b(this).stop().animate({
                    right: -250
                }, $dur);
            });
            w2b("#fbplikebox").show();
        });
    })(jQuery);
/*]]>*/
</script>
<div id="fbplikebox" style="right: -250px; top: 100px;">
<div class="fbplbadge"></div>
<iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FBaiakfull-829250937219416/&amp;width=250&amp;height=250&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23C4C4C4&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:250px;background:#fff;" allowtransparency="true">
</iframe>

  
  <script type="text/javascript">
    // disable all control elements which are not part of the content container element
    if (g_Deactivated == true) {
      document.getElementById('LoginButtonContainer').style.zIndex = "1";
      document.getElementById('DeactivationContainer').style.display = "block";
      document.getElementById('DeactivationContainer').style.zIndex = "50";
      document.getElementById('DeactivationContainerThemebox').style.display = "block";
      document.getElementById('Monster').style.cursor = "auto";
      document.getElementById('PlayersOnline').style.cursor = "auto";
      document.getElementById('ThemeboxesColumn').style.opacity = "0.30";
      document.getElementById('ThemeboxesColumn').style.MozOpacity = "0.30";
      document.getElementById('ThemeboxesColumn').filters.alpha.opacity = "0.75";
      document.getElementById('ThemeboxesColumn').style.filter = "alpha(opacity=50); opacity: 0.30";
      document.getElementById('Monster').setAttribute("onclick", "")
      document.getElementById('PlayersOnline').setAttribute("onclick", "")
    }
  </script>


  
  

  	<div id="HelperDivContainer" style="background-image: url(<?PHP echo $layout_name; ?>/images/content/scroll.gif);">
  		<div class="HelperDivArrow" style="background-image: url(<?PHP echo $layout_name; ?>/images/content/helper-div-arrow.png);"></div>
  		<div id="HelperDivHeadline"></div>
  		<div id="HelperDivText"></div>
 		<center>
  			<img class="Ornament" src="<?PHP echo $layout_name; ?>/images/content/ornament.gif">
  		</center>
  	<br>
	
	</div>
	
</body>
</html>
