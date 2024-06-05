<?php
	$update_interval = 1;
	if (!isset($world_id)) {
		$world_id = 0;
		$world_name = $config['server']['serverName'];
	}
	
	$order = $_REQUEST['order'];
	if($order == 'level')
		$orderby = 'level';
	elseif($order == 'vocation')
		$orderby = 'vocation';
		
	if(empty($orderby))
		$orderby = 'name';
		$tmp_file_name = 'cache/whoisonline-'.$orderby.'-'.$world_id.'.tmp';

	if(file_exists($tmp_file_name) && filemtime($tmp_file_name) > (time() - $update_interval)){
		$tmp_file_content = explode(",", file_get_contents($tmp_file_name));
		$number_of_players_online = $tmp_file_content[0];
		$players_rows = $tmp_file_content[1];
	} else{
		$players_online_data = $SQL->query('SELECT * FROM players WHERE world_id = '.(int) $world_id.' AND online > 0 ORDER BY '.$orderby);$number_of_players_online = 0;
		foreach($players_online_data as $player){
			$number_of_players_online++;
			$acc = $SQL->query('SELECT * FROM '.$SQL->tableName('accounts').' WHERE '.$SQL->fieldName('id').' = '.$player['account_id'].'')->fetch();
			if(is_int($number_of_players_online / 2))
				$bgcolor = $config['site']['darkborder'];
		}
	}

	date_default_timezone_set('America/Sao_Paulo');

	$nextOpenTimes = array(
		'Sunday 21:00',
		'Monday 21:00',
		'Tuesday 21:00',
		'Wednesday 21:00',
		'Thursday 21:00',
		'Friday 21:00',
		'Saturday 21:00',
	);
	$daysOpen = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');

	function getNextCastleOpening($daysOpen, $nextOpenTimes)
	{
		if (in_array(date('D'), $daysOpen) && date('H') == '21' && date('M')) {
			return 0;
		}

		$openTimes = array();
		$currentTime = strtotime('now');
		foreach ($nextOpenTimes as $nextOpenTime) {
			$openTime = strtotime($nextOpenTime);
			if ($openTime < $currentTime) {
				continue;
			}

			array_push($openTimes, $openTime - $currentTime);
		}

		usort($openTimes, function($a, $b) {
		  return $a > $b;
		});

		return $openTimes[0];
	}

	$openTime = getNextCastleOpening($daysOpen, $nextOpenTimes);
	$elementId = 'NextCastleOpening';

	function anti_injection($sql){
		// remove palavras que contenham sintaxe sql
		$sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"),"",$sql);
		$sql = trim($sql);//limpa espaços vazio
		$sql = strip_tags($sql);//tira tags html e php
		$sql = addslashes($sql);//Adiciona barras invertidas a uma string
		return $sql;
	}
?>
<html>
<head>
<link href="//use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
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
<link href="//fonts.googleapis.com/css?family=Fondamento" rel="stylesheet">
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

<body onBeforeUnLoad="SaveMenu();" onUnload="SaveMenu();" data-twttr-rendered="true">
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
          		<div id="HeaderArtworkDiv" style="background-image:url(<?PHP echo $layout_name; ?>/images/header/background-artwork.jpg);"></div>
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
						<div id="news_Submenu" class="Submenu">
							<a href="?subtopic=latestnews">
  								<div id="submenu_latestnews" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    								<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
    								<div id="ActiveSubmenuItemIcon_latestnews" class="ActiveSubmenuItemIcon" style="background-image: url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
    								<div id="ActiveSubmenuItemLabel_latestnews" class="SubmenuitemLabel">Latest News</div>
    								<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  								</div>
							</a>
							<a href="?subtopic=archive">
  								<div id="submenu_archive" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    								<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
									<div id="ActiveSubmenuItemIcon_archive" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
									<div id="ActiveSubmenuItemLabel_archive" class="SubmenuitemLabel">News Archive</div>
									<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  								</div>
							</a>
						</div>
					</div>
				<div id="guilds" class="menuitem">
					<span onclick="MenuItemAction('guilds')">
						<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
							<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
							<span id="guilds_Lights" class="Lights">
								<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
								<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
								<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							</span>
							<div id="guilds_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-wars.gif);"></div>
							<div id="guilds_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-guilds.gif);"></div>
							<div id="guilds_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
						</div>
					</div>
				</span>
				<div id="guilds_Submenu" class="Submenu">
					<a href="?subtopic=guilds">
						<div id="submenu_guilds" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_guilds" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_guilds" class="SubmenuitemLabel">Guilds</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=citywar">
						<div id="submenu_citywar" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_citywar" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_citywar" class="SubmenuitemLabel"><font color="#ef0928">War Anti-Entrosa </font><img src="/layouts/tibiarl/images/battle.gif"></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=warcastle">
						<div id="submenu_warcastle" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_warcastle" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_warcastle" class="SubmenuitemLabel">War Castle <img src="/layouts/tibiarl/images/espada_cruzada.png"></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=wars">
						<div id="submenu_wars" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_wars" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_wars" class="SubmenuitemLabel">War System <img src="/layouts/tibiarl/images/red-green.gif"></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=guildoutfit">
						<div id="submenu_guildoutfit" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_guildoutfit" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_guildoutfit" class="SubmenuitemLabel">Comando !guildoutfit</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=guildbc">
						<div id="submenu_guildbc" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_guildbc" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_guildbc" class="SubmenuitemLabel">Comando !guildbc <img src="/layouts/tibiarl/images/new.gif"></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
				</div>
			</div>
				<div id="library" class="menuitem">
					<span onclick="MenuItemAction('library')">
						<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
							<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
							<span id="library_Lights" class="Lights">
								<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
								<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
								<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							</span>
							<div id="library_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-library.gif);"></div>
							<div id="library_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-library.gif);"></div>
							<div id="library_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
						</div>
					</div>
				</span>
				<div id="library_Submenu" class="Submenu">
					<a href="?subtopic=serverinfo">
						<div id="submenu_serverinfo" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_serverinfo" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_serverinfo" class="SubmenuitemLabel">Server Info</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=stamina">
						<div id="submenu_stamina" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_stamina" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_stamina" class="SubmenuitemLabel">Stamina Info</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=cooking">
						<div id="submenu_cooking" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_cooking" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_cooking" class="SubmenuitemLabel">Cooking/Receitas <img src="/layouts/tibiarl/images/new.gif"></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=aura">
						<div id="submenu_aura" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_aura" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_aura" class="SubmenuitemLabel">Aura System</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=caveexc">
						<div id="submenu_caveexc" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_caveexc" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_caveexc" class="SubmenuitemLabel">Cave Exclusiva <img src="/layouts/tibiarl/images/new.gif"></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=exerciseweapon">
						<div id="submenu_caveexc" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_caveexc" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_caveexc" class="SubmenuitemLabel">Exerciseweapon <img src="/layouts/tibiarl/images/new.gif"></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=worldboss">
						<div id="submenu_worldboss" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_worldboss" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_worldboss" class="SubmenuitemLabel"><font color="#e8023b">World Bosses</font> <img src="/layouts/tibiarl/images/new.gif"></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=mining">
						<div id="submenu_mining" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_mining" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_mining" class="SubmenuitemLabel">Mining <img src="/layouts/tibiarl/images/new.gif"></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=dodgeecritical">
						<div id="submenu_dodgeecritical" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_dodgeecritical" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_dodgeecritical" class="SubmenuitemLabel">Dodge/Critical</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=weaponelements">
						<div id="submenu_weaponelements" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_weaponelements" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_weaponelements" class="SubmenuitemLabel">Weapon Elements</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=emotespells">
						<div id="submenu_emotespells" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_emotespells" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_emotespells" class="SubmenuitemLabel">Emote Spells</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=addons">
						<div id="submenu_addons" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_addons" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_addons" class="SubmenuitemLabel">Addons</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=tasks">
						<div id="submenu_tasks" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_tasks" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_tasks" class="SubmenuitemLabel">Task System</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=exerciseweapon"> <!-- Exercise Weapon -->
						<div id="submenu_exerciseweapon" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div id="ActiveSubmenuItemIcon_exerciseweapon" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=founderaura"> <!-- Aura Exclusiva -->
						<div id="submenu_founderaura" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div id="ActiveSubmenuItemIcon_founderaura" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=founderoutfit"> <!-- Founder Outfit Exclusivo -->
						<div id="submenu_founderoutfit" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div id="ActiveSubmenuItemIcon_founderoutfit" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=experiencetable">
						<div id="submenu_experiencetable" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_experiencetable" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_experiencetable" class="SubmenuitemLabel">Experience Table</div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
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
						<div id="ActiveSubmenuItemLabel_characters" class="SubmenuitemLabel">Characters</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=whoisonline">
					<div id="submenu_whoisonline" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_whoisonline" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_whoisonline" class="SubmenuitemLabel">Who is online</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=highscores">
					<div id="submenu_highscores" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_highscores" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_highscores" class="SubmenuitemLabel">Highscores</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				<a href="?subtopic=cleanhouses"> <!-- Power Gamer Botãozinha feito já so ativar. -->
					<div id="submenu_cleanhouses" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_cleanhouses" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_cleanhouses" class="SubmenuitemLabel">Cleanhouses</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=onlinetime"> <!-- Online Time Botãozinha feito já so ativar. -->
					<div id="submenu_onlinetime" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_onlinetime" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_onlinetime" class="SubmenuitemLabel">Online Time</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
 				<a href="?subtopic=powergamers"> <!-- Power Gamer Botãozinha feito já so ativar. -->
 					<div id="submenu_powergamers" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
 						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
 						<div id="ActiveSubmenuItemIcon_powergamers" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
					<div id="ActiveSubmenuItemLabel_powergamers" class="SubmenuitemLabel">PowerGamer <img src="/layouts/tibiarl/images/new.gif"></div>
 						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div> 
 					</div>
 				</a>
				<a href="?subtopic=killstatistics">
					<div id="submenu_killstatistics" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_killstatistics" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_killstatistics" class="SubmenuitemLabel">Kill Statistics</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=houses">
					<div id="submenu_houses" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_houses" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_houses" class="SubmenuitemLabel">Houses</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=castsystem">
					<div id="submenu_castsystem" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_castsystem" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_castsystem" class="SubmenuitemLabel">Cast System</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>				
				<a href="?subtopic=polls">
					<div id="submenu_polls" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_polls" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_polls" class="SubmenuitemLabel">Polls</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
			</div>
		</div>
		<div id="events" class="menuitem">
				<span onclick="MenuItemAction('events')">
					<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
						<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
						<span id="events_Lights" class="Lights">
							<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
						</span>
						<div id="events_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-events.gif);"></div>
						<div id="events_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-eventos.gif);"></div>
						<div id="events_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
					</div>
				</div>
			</span>
			<div id="events_Submenu" class="Submenu">
				<a href="?subtopic=eventseller">
  					<div id="submenu_eventseller" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_eventseller" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_eventseller" class="SubmenuitemLabel"><font color="#00FFFF">NPC Event Seller</font></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=bossseller">
  					<div id="submenu_bossseller" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_bossseller" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_bossseller" class="SubmenuitemLabel"><font color="#D45FFF">NPC Boss Seller</font></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=daily">
  					<div id="submenu_daily" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_daily" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_daily" class="SubmenuitemLabel">Daily Quest <img src="/layouts/tibiarl/images/new.gif"></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=dtt">
  					<div id="submenu_dtt" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_dtt" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_dtt" class="SubmenuitemLabel">Defend The Tower</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=snowball">
  					<div id="submenu_snowball" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_snowball" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_snowball" class="SubmenuitemLabel">SnowBall War</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=bomberman">
  					<div id="submenu_bomberman" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_bomberman" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_bomberman" class="SubmenuitemLabel">Bomberman</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=zombie">
  					<div id="submenu_zombie" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_zombie" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_zombie" class="SubmenuitemLabel">Zombie Event</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=monsterhunter">
  					<div id="submenu_monsterhunter" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_monsterhunter" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_monsterhunter" class="SubmenuitemLabel">Monster Hunter</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=bloodcastle">
  					<div id="submenu_bloodcastle" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_bloodcastle" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_bloodcastle" class="SubmenuitemLabel">Blood Castle <img src="/layouts/tibiarl/images/new.gif"></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=treasurehunt">
  					<div id="submenu_treasurehunt" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_treasurehunt" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_treasurehunt" class="SubmenuitemLabel">Caça ao Tesouro <img src="/layouts/tibiarl/images/new.gif"></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=therain">
  					<div id="submenu_therain" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_therain" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_therain" class="SubmenuitemLabel">The Rain <img src="/layouts/tibiarl/images/new.gif"></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=csbattle">
  					<div id="submenu_csbattle" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_csbattle" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_csbattle" class="SubmenuitemLabel">CounterStrike <img src="/layouts/tibiarl/images/new.gif"></div>
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
						<div id="forum_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-forum.gif);"></div>
						<div id="forum_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-forum.gif);"></div>
						<div id="forum_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
					</div>
				</div>
			</span>
			<div id="forum_Submenu" class="Submenu">
				<a href="?subtopic=forum">
					<div id="submenu_forum" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_forum" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_forum" class="SubmenuitemLabel">Server Forum</div>
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
						<div id="ActiveSubmenuItemLabel_cpanel" class="SubmenuitemLabel"><font color=red>Admin Panel</font></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
			<?PHP } ?>
				<a href="?subtopic=accountmanagement">
  					<div id="submenu_accountmanagement" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_accountmanagement" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_accountmanagement" class="SubmenuitemLabel">Account Management</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=createaccount">
  					<div id="submenu_createaccount" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    					<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_createaccount" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_createaccount" class="SubmenuitemLabel">Create Account</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<?PHP
				if($config['site']['download_page']){
				?>
				<a href="?subtopic=download">
  					<div id="submenu_download" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_download" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_download" class="SubmenuitemLabel"><font color="#00FFFF">Download Client</font></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<?PHP } ?>
				<a href="?subtopic=lostaccount">
  					<div id="submenu_lostaccount" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_lostaccount" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_lostaccount" class="SubmenuitemLabel">Lost Account?</div>
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
				<a href="?subtopic=ticket">
  					<div id="submenu_ticket" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_ticket" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_ticket" class="SubmenuitemLabel">Ticket <img class="ticket" src="<?PHP echo $layout_name; ?>/images/new.gif"></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=tibiarules">
  					<div id="submenu_tibiarules" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_tibiarules" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_tibiarules" class="SubmenuitemLabel">Tibia Rules</div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=team">
  					<div id="submenu_team" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_team" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_team" class="SubmenuitemLabel">Support List</div>
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
				<a href='?subtopic=donate'>
  					<div id='submenu_donate' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    					<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_donate' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'><span style='color:yellow'><i class='fa fa-credit-card' aria-hidden='true'></i> Donatar</span></div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<a href='?subtopic=shopsystem'>
  					<div id='submenu_shopsystem' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_shopsystem' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'><span style='color:#00fb54'><i class='fa fa-shopping-cart' aria-hidden='true'></i> Shop Offer</span></div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<a href='?subtopic=shopguild'>
  					<div id='submenu_shopguild' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_shopguild' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'><span style='color:orange'><i class="fa fa-users" aria-hidden="true"></i> Shop Guild</span></div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<a href="?subtopic=pagconcluido"> <!-- PagSeguro Pagamento Aprovado -->
					<div id="submenu_pagconcluido" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div id="ActiveSubmenuItemIcon_pagconcluido" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=paypalcancel"> <!-- Paypal Pagamento Cancelado -->
					<div id="submenu_paypalcancel" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div id="ActiveSubmenuItemIcon_paypalcancel" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=paypalconcluido"> <!-- Paypal Pagamento Aprovado -->
					<div id="submenu_paypalconcluido" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div id="ActiveSubmenuItemIcon_paypalconcluido" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
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
						<div id="ContentHelper">
							<div id="" class="Box">
								<div class="Corner-tl" style="background-image:url(<?php echo $layout_name; ?>/images/content/corner-tl.gif);"></div>
								<div class="Corner-tr" style="background-image:url(<?php echo $layout_name; ?>/images/content/corner-tr.gif);"></div>
								<div class="Border_1" style="background-image:url(<?php echo $layout_name; ?>/images/content/border-1.gif);"></div>
								<div class="BorderTitleText" style="background-image:url(<?php echo $layout_name; ?>/images/content/black_background.gif); height: 28px;">
								<div class="InfoBar">
									<a class="InfoBarBlock" style="text-decoration:none"> <!-- para me lembrar: add href="#" caso queira por link -->
										<img class="InfoBarBigLogo" src="<?php echo $layout_name; ?>/images/content/info/icon-cast.png">
										<span class="InfoBarNumbers"><img class="InfoBarSmallElement" src="<?php echo $layout_name; ?>/images/content/info/icon-streamers.png">
											<?php
												$cast = $SQL->query('SELECT COUNT(1) FROM `players` WHERE `broadcasting`>0;')->fetch();
												$viewes = $SQL->query('SELECT COUNT(1) FROM `players` WHERE `viewers`>0;')->fetch();
											?>
											<span class="InfoBarSmallElement"><?php echo $cast[0]; ?> casts</span>
											<img class="InfoBarSmallElement" src="<?php echo $layout_name; ?>/images/content/info/icon-viewers.png">
											<span class="InfoBarSmallElement"><?PHP echo $viewes[0]?> spectators</span>
										</span>
									</a>
									<a href="?subtopic=forum" style="text-decoration:none" onclick="document.getElementById('pop').style.display='block';">
										<img class="InfoBarBigLogo" src="<?php echo $layout_name; ?>/images/content/info/discordapp.png">
										<span class="InfoBarNumbers">
											<span class="InfoBarSmallElement">Discord</span>
										</span>
									</a>
									&nbsp;&nbsp;
									<a style="text-decoration:none" method="post" href="https://www.facebook.com/TibianhaMl/">
										<img class="InfoBarBigLogo" src="<?php echo $layout_name; ?>/images/content/info/icon-face.png">
										<span class="InfoBarNumbers">
											<span class="InfoBarSmallElement">Facebook</span>
										</span>
									</a>
									&nbsp;&nbsp;
									<a style="text-decoration:none" href="?subtopic=download">
										<img class="InfoBarBigLogo" src="<?php echo $layout_name; ?>/images/content/info/icon-download.png">
										<span class="InfoBarNumbers">
											<span class="InfoBarSmallElement">Download Client</span>
										</span>
									</a>
									<a style="float:right;text-decoration:none;"  href="?subtopic=whoisonline">
										<img class="InfoBarBigLogo" src="<?php echo $layout_name; ?>/images/content/info/icon-players-online.png">
										<span class="InfoBarNumbers">
											<span class="InfoBarSmallElement">
												<?php
												if($config['status']['serverStatus_online'] == 1)
													$players_online1 = $number_of_players_online.' Players Online';
												else
													$players_online1 = 'Server Offline&nbsp;';
												?>
												<?php echo $players_online1; ?>
											</span>
										</span>
									</a>
								</div>
							</div>
							<div class="Border_1" style="background-image:url(<?php echo $layout_name; ?>/images/content/border-1.gif);"></div>
							<div class="CornerWrapper-b">
								<div class="Corner-bl" style="background-image:url(<?php echo $layout_name; ?>/images/content/corner-bl.gif);"></div>
							</div>
							<div class="CornerWrapper-b"><div class="Corner-br" style="background-image:url(<?php echo $layout_name; ?>/images/content/corner-br.gif);">
						</div>
					</div>
				</div>
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
                  		<img id="Monster" src="images/monster/ascending_ferumbras.gif" onclick="window.location = #" alt="Monster of the Week">
                  		<img id="PedestalAndOnline" src="<?PHP echo $layout_name; ?>/images/header/pedestal-and-online.gif" alt="Monster Pedestal and Players Online Box">
                  		<div id="PlayersOnline" onClick="window.location='?subtopic=whoisonline'">
							<?PHP
							if($config['status']['serverStatus_online'] == 1)
								echo '<font color="#00FF00">Server Online</font><br>Uptime: '.$config['status']['serverStatus_uptime'].'';
							else
								echo '<b><font color="#FF0000">Server Offline</font></b>';
							?>
		  				</div>
        			</div>
                	<div id="Themeboxes">
						<!-- Countdown INICIO -->
						<!--	<div id="CountDownBox" class="Themebox" style="background-image: url('layouts/tibiarl/images/themeboxes/countdown/countdown_box.png');">
							<span class="countdowntext">Inauguração!</span>
							<div style="background:url(./layouts/tibiarl/images/themeboxes/countdown/Cuckoo_Clock.gif);width: 43px;height: 32px;position: absolute;margin-left: -2px;margin-top: 2px;"></div>
								<div class="Bottom" style="background-image: url('layouts/tibiarl/images/general/box-bottom.gif');"></div>
								<div id="countdown">
									<div style="margin-top: 39px;margin-left: 3px;">
										<b><span class="days" style="margin-left: 5px;"></span></b>
									</div>
									<div>
										<div class="Separator" style="background-image: url(./layouts/tibiarl/images/themeboxes/countdown/separator.png);"></div>
										<b><span class="hours"></span></b>
									</div>
									<div>
										<div class="Separator" style="background-image: url(./layouts/tibiarl/images/themeboxes/countdown/separator.png);left: 0px;"></div>
										<b><span class="minutes"></span></b>
									</div>
									<div>
										<div class="Separator" style="background-image: url(./layouts/tibiarl/images/themeboxes/countdown/separator.png);margin-left: -7px;"></div>
										<b><span class="seconds"></span></b>
									</div>
								</div>
								<script>
									jQuery(function($) {
										function getTimeRemaining(endtime) {
												var t = Date.parse(endtime) - Date.parse(new Date());
												var seconds = Math.floor((t / 1000) % 60);
												var minutes = Math.floor((t / 1000 / 60) % 60);
												var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
												var days = Math.floor(t / (1000 * 60 * 60 * 24));
											return {
											'total': t,
											'days': days,
											'hours': hours,
											'minutes': minutes,
											'seconds': seconds
											};
										}

										function initializeClock(id, endtime, message) {
											var clock = document.getElementById(id);
											var daysSpan = clock.querySelector('.days');
											var hoursSpan = clock.querySelector('.hours');
											var minutesSpan = clock.querySelector('.minutes');
											var secondsSpan = clock.querySelector('.seconds');

											function updateClock() {
												var t = getTimeRemaining(endtime);

												daysSpan.innerHTML = t.days;
												hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
												minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
												secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

												if(t.total<=0){
													clearInterval(timeinterval);
													document.getElementById(id).innerHTML = message;
												}
											}

											updateClock();
											var timeinterval = setInterval(updateClock, 1000);
										}

										var deadline = 'May 5 2023 19:00:00';
										initializeClock('countdown', deadline, '<div style="margin-top: 30px;margin-left: 45px;"><small><small>small><b>Servidor Iniciado!</b></small></small></div>')
									});
								</script>
							</div>
							<!-- Countdown FIM -->
						<?php
							$q = $SQL->query("SELECT `name`, `looktype`, `lookaddons`, `lookhead`, `lookbody`, `looklegs`, `lookfeet`, `level`, `vocation` FROM `players` WHERE `deleted` = 0 AND (`account_id` != 1 AND `group_id` < 3) ORDER BY `level` DESC LIMIT 5")->fetchAll();
							if ($q) { 
								$rankImages = array(
									1 => "top1.gif",
									2 => "top2.gif",
									3 => "top3.gif"
								)
								
								?>
															<!-- Top EXP SERVIDOR -->
						<!--		<div id="Topbar" class="Toplevelbox" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/rankings/top_level_top.gif);">
									<div style="background:url(<?PHP echo $layout_name; ?>/images/themeboxes/rankings/shield.gif);width: 32px;height: 32px;position: relative;margin-left: 5px;margin-top: 1px;"></div>
									<span class="topleveltext">Top Experience</span>
									<div id="RankingBox" class="Themebox" style="height: auto; display: table; margin-top: -4px;">
										<div id="menusrank"></div>
										<table style="font-family: sans-serif; font-size: 12px; padding: 0px 12px; height: auto; display: block; background-image:url(./<?PHP echo $layout_name; ?>/images/themeboxes/rankings/box-bg.gif); margin-bottom: 5px; margin-top: -6px">
											<?php
												$count = 0;
												foreach ($q as $v) {
													$count++;
													$tmpPlayer = new Player();
													$tmpPlayer->find($v['name']);
													if ($tmpPlayer->isLoaded()) {
														echo '
														<tr style="background-color:'.($count % 2 ? 'rgba(241, 224, 198, 0.6)' : 'rgba(212, 192, 161, 0.6)').';" >
															<td width="34px;" style="padding:0px; padding-left: 2px;">
																<div class="outfitImgtoplevel" style="background-image:url(/outfit.php?id='.$v['looktype'].'&addons='.$v['lookaddons'].'&head='.$v['lookhead'].'&body='.$v['lookbody'].'&legs='.$v['looklegs'].'&feet='.$v['lookfeet'].'&mount=0&direction=3);"></div>
															</td>
															<td width="130px;" style="padding:1px; padding-left: 3px;">
																<strong style="float: right; font-size: 9px; color: '.($tmpPlayer->isOnline() ? 'green': '#bf2015' ).';">
																	<i class="fa fa-user" aria-hidden="true"></i>
																</strong>

																<a class="top_level" href="?subtopic=characters&name='.$v['name'].'">
																	<small style="margin-left: -2px;">'.$count.'- </small>'.$v['name'].'
																</a>';

																$tooLongName = ((strlen($tmpPlayer->getName()) > 17) ? '<img src="'.$layout_name.'/images/themeboxes/rankings/'.$rankImages[$count].'" style="float: left;margin-top: -36px;margin-left: -4px;">' : '<img src="'.$layout_name.'/images/themeboxes/rankings/'.$rankImages[$count].'" style="float: left;margin-top: -26px;margin-left: -4px;">');

																echo '<div class="levelvoctoplevel">
																	<small style="font-size: 9px;">'. ($rankImages[$count] ? $tooLongName : '').'
																	<b>'.$v['level'].'</b>, '.htmlspecialchars(Website::getVocationName($v['vocation'], false)).'</small>
																</div>
															</td>
														</tr>';
													}
												}
											?>
										</table><br>
										<div class="Bottom2" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/rankings/box-bottom.gif);"></div>
									</div>
								</div>
							<?php
								}
							?>

														
							<?php
							function c_v($valuein)
							{
								$value2 = $valuein;
								while(strlen($value) > 3)
								{
									$value .= substr($value2, -3, 3);
									$value2 = substr($value2, 0, strlen($value2)-3);
								}
								$value = $value2.$value;
								if($valuein > 0)
									return '<font color="green">exp: +'.number_format($value, 0,'.','.').'</font>';
								elseif($valuein < 0)
									return '<font color="red">exp: '.number_format($value, 0,'.','.').'</font>';
								elseif($valuein == 0)
									return '<font color="darkred">none</font>';
							}

							$q1 = $SQL->query("SELECT `name`, `looktype`, `lookaddons`, `lookhead`, `lookbody`, `looklegs`, `lookfeet`, `experience`, `exphist_lastexp` FROM `players` WHERE `deleted` = 0 AND (`account_id` != 1 AND `group_id` < 4) ORDER BY `experience`-`exphist_lastexp` DESC LIMIT 5")->fetchAll();
							if ($q1) {
								$rankImages = array(
									1 => "top1.gif",
									2 => "top2.gif",
									3 => "top3.gif"
								)
							?>
														<!--  FIM -->
														<!-- Top EXP DIA -->
								<div id="Topbar" class="Toplevelbox" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/rankings/top_level_top.gif);">
									<div style="background:url(<?PHP echo $layout_name; ?>/images/themeboxes/rankings/shield.gif);width: 32px;height: 32px;position: relative;margin-left: 5px;margin-top: 1px;"></div>
									<span class="topleveltext">Top Exp Day</span>
									<div id="RankingBox" class="Themebox" style="height: auto; display: table; margin-top: -4px;">
										<div id="menusrank"></div>
										<table style="font-family: sans-serif; font-size: 12px; padding: 0px 12px; height: auto; display: block; background-image:url(./<?PHP echo $layout_name; ?>/images/themeboxes/rankings/box-bg.gif); margin-bottom: 5px; margin-top: -6px">
											<?php
												$count = 0;
												foreach ($q1 as $v) {
													$count++;
													$tmpPlayer = new Player();
													$tmpPlayer->find($v['name']);
													$onlineTime = ($v['experience']-$v['exphist_lastexp']);
													if ($tmpPlayer->isLoaded()) {
														echo '
														<tr style="background-color:'.($count % 2 ? 'rgba(241, 224, 198, 0.6)' : 'rgba(212, 192, 161, 0.6)').';" >
															<td width="34px;" style="padding:0px; padding-left: 2px;">
																<div class="outfitImgtoplevel" style="background-image:url(/outfit.php?id='.$v['looktype'].'&addons='.$v['lookaddons'].'&head='.$v['lookhead'].'&body='.$v['lookbody'].'&legs='.$v['looklegs'].'&feet='.$v['lookfeet'].'&mount=0&direction=3);"></div>
															</td>
															<td width="130px;" style="padding:1px; padding-left: 3px;">
																<strong style="float: right; font-size: 9px; color: '.($tmpPlayer->isOnline() ? 'green': '#bf2015' ).';">
																	<i class="fa fa-user" aria-hidden="true"></i>
																</strong>
																<a class="top_level" href="?subtopic=characters&name='.$v['name'].'">
																	<small style="margin-left: -2px;">'.$count.'- </small>'.$v['name'].'
																</a>';

																$tooLongName = ((strlen($tmpPlayer->getName()) > 13) ? '<img src="'.$layout_name.'/images/themeboxes/rankings/'.$rankImages[$count].'" style="float: left;margin-top: -38px;margin-left: -4px;">' : '<img src="'.$layout_name.'/images/themeboxes/rankings/'.$rankImages[$count].'" style="float: left;margin-top: -25px;margin-left: -4px;">');

																echo '<div class="levelvoctoplevel">
																	<small style="font-size: 10px;">'. ($rankImages[$count] ? $tooLongName : '').'
																	<strong style="float: right; font-size: 8px;">'.c_v($v['experience']-$v['exphist_lastexp']).'</strong>
																	</small>
																</div>
															</td>
														</tr>';
													}
												}
											?>
										</table><br>
										<div class="Bottom2" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/rankings/box-bottom.gif);"></div>
									</div>
								</div>
							<?php
								}
							?>

							<?php
								$queryCastle = $SQL->query("SELECT `name`, `id` FROM `guilds` WHERE `real_castle` = 1 ORDER BY id DESC LIMIT 1")->fetch();
								if ($queryCastle) {
									$guild = new Guild();
									$guild->load($queryCastle["id"]);
									if ($guild->isLoaded()) {
										$guildName = $guild->getName();
										$guildLogo = $guild->getGuildLogoLink();

										$url = "?subtopic=guilds&action=show&guild=".urlencode($guild->getID())."";
									}
								}
							?>
											<!-- Top EXP Dia Fim -->
							<div id="Topbar" class="Toplevelbox" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/top_level_top.gif);">
								<div style="background:url(<?PHP echo $layout_name; ?>/images/themeboxes/castle/swords.gif);width: 32px;height: 32px;position: relative;margin-left: 10px;margin-top: 1px;"></div>
								<span class="topleveltext">War Castle</span>
								<div id="RankingBox" class="Themebox" style="height: auto;display: table;margin-top: 27px;">
									<div id="menusrank"></div>
									<table style="font-family: sans-serif; font-size: 12px; padding: 0px 12px; height: auto; display: block; background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/castle/box-bg.gif); margin-bottom: 5px; margin-top: -6px">	
										<tr>
											<td style="padding-left: 9px;">
												<div class="warText">
													<?php if ($url) { ?>
														<a <?php echo (($url) ? "href='". $url ."'" : ''); ?>>
															<?php if ($guildLogo) { ?>
																<img class="guildcastleimg" src="<?php echo (($guildLogo) ? $guildLogo : ''); ?>">
															<?php } ?>

															<div class="guildname">
																<?php echo $guildName; ?>
															</div>
														</a>
													<?php } else { ?>
														<img class="guildcastleimg" src="images/default_guild_logo.gif">
														<div class="guildname">
															Nenhuma guild domina!
														</div>
													<?php } ?>

													<br>
													<span class="castletime">
														<span id="<?php echo $elementId; ?>"></span>
														<script>
															updateCastleTimer(<?php echo json_encode($elementId); ?>, <?php echo json_encode($openTime); ?>);
														</script>
													</span>
												</div>
											</td>
										</tr> 
									</table>
									<div class="Bottom3" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/castle/box-bottom.gif);"></div>
								</div>
							</div>
							
							<!-- SUPPORT -->
							<div id="Suportbox" class="support" style="background-image: url('layouts/tibiarl/images/themeboxes/suportbox_mini.gif');">
								<span class="topleveltext">Suporte</span>
								<div class="supporttext">
									<img class="supporttext" src="./layouts/tibiarl/images/themeboxes/icon_gm.gif" alt="go to post">
									<div class="supporttext2"><a href="#"><small><a href="mailto:rafa_tolomeotti@hotmail.com.br"><i class="fas fa-envelope"></i> E-mail Support <i class="fas fa-envelope"></i></a></small></a></div>
									<div class="supporttext3"><font size="1" face="tahoma" color="#594A44"><b>Abrir Suporte via ticket!</b></font></div>
								</div>
								<a href="/?subtopic=ticket" method="post" style="padding:0px;margin:0px;" >
								<div class="ThemeboxButton" onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);" style="background-image: url('layouts/tibiarl/images/buttons/sbutton.gif');"><div class="BigButtonOver" style="background-image: url('layouts/tibiarl/images/buttons/sbutton_over.gif'); visibility: hidden;"></div>
									<div class="ButtonText" style="background-image: url('layouts/tibiarl/images/buttons/openticket.gif');"></div>
								</div>
								</a>
							</div>
							
							<!-- DISCORD -->
							<div id="DiscordBox" class="Themebox" style="background-image: url('layouts/tibiarl/images/themeboxes/discord/discord.gif');">
								<a href="https://discord.gg/AedM8zA" method="post" style="padding:0px;margin:0px;" >
								<div class="ThemeboxButton" onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);" style="background-image: url('layouts/tibiarl/images/buttons/sbutton.gif');"><div class="BigButtonOver" style="background-image: url('layouts/tibiarl/images/buttons/sbutton_over.gif'); visibility: hidden;"></div>
									<div class="ButtonText" style="background-image: url('layouts/tibiarl/images/themeboxes/discord/join_discord.gif');"></div>
								</div>
								</a>
								<div class="Bottom" style="background-image: url('layouts/tibiarl/images/general/box-bottom.gif');"></div>
							</div>

								<!-- networks theme box -->
								<?PHP
								$nF = $SQL->query("SELECT " .$SQL->fieldName('network_link'). " FROM " .$SQL->tableName('z_network_box'). " WHERE " .$SQL->fieldName('network_name'). " = 'facebook'")->fetch();
								$nT = $SQL->query("SELECT " .$SQL->fieldName('network_link'). " FROM " .$SQL->tableName('z_network_box'). " WHERE " .$SQL->fieldName('network_name'). " = 'twitter'")->fetch();
								?>
								<?PHP if(!empty($nF)){ ?>
								<div id="NetworksBox" class="Themebox" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/networks/networksbox.png);">
									<div id="FacebookBlock">
										<div id="FacebookLikeBox">
											<div class="fb-like-box fb_iframe_widget" data-href="https://www.facebook.com/<?PHP echo $nF['network_link']; ?>" data-width="175" data-height="180" data-show-faces="true" data-stream="false" data-border-color="none" data-header="false" fb-xfbml-state="rendered">
												<span style="vertical-align: bottom; width: 181px; height: 180px;">
												</span>
											</div>
										</div>
										<div id="FacebookSendBox">
											<div class="fb-send fb_iframe_widget" data-href="https://www.facebook.com/<?PHP echo $nF['network_link']; ?>" data-width="50" data-height="20" fb-xfbml-state="rendered">
												<span style="vertical-align: bottom; width: 50px; height: 20px;">
												</span>
											</div>
										</div>
										<div id="FacebookLikes">
											<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="https://www.facebook.com/<?PHP echo $nF['network_link']; ?>" data-send="false" data-width="225" data-show-faces="false" fb-xfbml-state="rendered">
												<span style="height: 28px; width: 225px;">
												</span>
											</div>
										</div>
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
        	Copyright by CipSoft GmbH. All rights reserved.<br>
			Edited by <b>CnSoft</b> and <b>Pifafa</b>.
        </div>
		<div id="Footer">
<a href="https://chat.whatsapp.com/BI0BtqtXJ440Y4zJprH8mp" 
   style="background-color: #25d366; color: #fff; padding: 10px 20px; border-radius: 50px; text-decoration: none; box-shadow: 0 2px 5px rgba(0,0,0,.2); display: inline-block; animation: pulsar 1.5s ease-in-out infinite;">
   <i class="fab fa-whatsapp" style="margin-right: 10px;"></i>Entrar para Grupo Tibinha!
</a>

<style>
  @keyframes pulsar {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.1);
    }
    100% {
      transform: scale(1);
    }
  }
</style>
		</div>
		<div align=center><a href='https://contador.s12.com.br'><img src='https://contador.s12.com.br/img-Y0a5z26xZ35y7d0z-26.gif' border='0' alt='contador de acesso'></a><script type='text/javascript' src='https://contador.s12.com.br/ad.js?id=Y0a5z26xZ35y7d0z'></script><br><a href='https://meuip.page/qual-e-o-meu-ip/' target='_blank'><img src='https://img.meuip.page/selo-WxW3BczBx1ac4ZWd.gif' alt='IP' border='0'></a></div>
	</div>
</div>
</div>
</div>
</div>
  
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
