<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="de-DE" dir="ltr">
	<head>
		<title>Suchen - TC Blau-Weiss Herxheim e.V.</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Bernd Gensheimer" />
		<meta name="generator" content="Incomedia WebSite X5 Evolution 17.1.2 - www.websitex5.com" />
		<meta name="viewport" content="width=1150" />
		
		<link rel="stylesheet" href="style/reset.css?17-1-2-0" media="screen,print" />
		<link rel="stylesheet" href="style/print.css?17-1-2-0" media="print" />
		<link rel="stylesheet" href="style/style.css?17-1-2-0" media="screen,print" />
		<link rel="stylesheet" href="style/template.css?17-1-2-0" media="screen" />
		<link rel="stylesheet" href="pcss/imsearch.css?17-1-2-0-637744769148691137" media="screen,print" />
		<script src="res/jquery.js?17-1-2-0"></script>
		<script src="res/x5engine.js?17-1-2-0" data-files-version="17-1-2-0"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('Der von Ihnen verwendete Browser unterstützt nicht die die Funktionen, die für die Anzeige dieser Website benötigt werden.','Der von Ihnen verwendete Browser unterstützt möglicherweise nicht die die Funktionen, die für die Anzeige dieser Website benötigt werden.','[1]Browser aktualisieren[/1] oder [2]Vorgang fortsetzen[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'imsearch.php';
			x5engine.boot.push(function () { x5engine.utils.imCodeProtection('Bernd Gensheimer'); });
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="favicon.png?17-1-2-0-637744769148534880" type="image/png" />
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						<h1 class="imHidden">Suchen - TC Blau-Weiss Herxheim e.V.</h1>
						<div id="imHeaderObjects"></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"><div id="imStickyBar_imObjectTitle_02_wrapper" class="template-object-wrapper"><div id="imStickyBar_imObjectTitle_02"><span id ="imStickyBar_imObjectTitle_02_text" >Title</span></div></div><div id="imStickyBar_imMenuObject_03_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imStickyBar_imMenuObject_03"><div id="imStickyBar_imMenuObject_03_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class=" imPage" data-link-paths=",/index.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="index.html">
Startseite		</a>
</div>
</div>
	</li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imStickyBar_imMenuObject_03_settings = {
	'menuId': 'imStickyBar_imMenuObject_03',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imStickyBar_imMenuObject_03_settings)});
$(function () {$('#imStickyBar_imMenuObject_03_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0, subtimeout = 0, width = 'none', height = 'none';        var submenu = $this.children('ul').add($this.find('.multiple-column > ul'));    $this.on('mouseenter', function () {        if($(this).parents('#imStickyBar_imMenuObject_03_container-menu-opened').length > 0) return;         clearTimeout(timeout);        clearTimeout(subtimeout);        $this.children('.multiple-column').show(0);        submenu.stop(false, false);        if (width == 'none') {             width = submenu.width();        }        if (height == 'none') {            height = submenu.height();            submenu.css({ overflow : 'hidden', height: 0});        }        setTimeout(function () {         submenu.css({ overflow : 'hidden'}).fadeIn(1).animate({ height: height }, 300, null, function() {$(this).css('overflow', 'visible'); });        }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imStickyBar_imMenuObject_03_container-menu-opened').length > 0) return;         timeout = setTimeout(function () {         submenu.stop(false, false);            submenu.css('overflow', 'hidden').animate({ height: 0 }, 300, null, function() {$(this).fadeOut(0); });            subtimeout = setTimeout(function () { $this.children('.multiple-column').hide(0); }, 300);        }, 250);    });});});

</script>
</div></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Überspringen Sie das Hauptmenü">Direkt zum Seiteninhalt</a>
					<div id="imSideBar">
						<div id="imSideBarObjects"><div id="imSideBar_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imSideBar_imObjectImage_01"><div id="imSideBar_imObjectImage_01_container"><img src="images/empty-GT_imagea-1-.png" title="" alt="" />
</div></div></div></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imSearchPage">
						<h2 id="imPgTitle">Suchergebnisse</h2>
						<?php
						$search = new imSearch();
						$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search']) : "";
						$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
						$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
						<div class="searchPageContainer">
						<?php echo $search->search($keys, $page, $type); ?>
						</div>
						</div>
						
					</main>
					<footer id="imFooter">
						<div id="imFooterObjects"></div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Lesen Sie den Inhalt der Seite noch einmal durch">Zurück zum Seiteninhalt</a></span>
			</div>
		</div>
		
		<noscript class="imNoScript"><div class="alert alert-red">Um diese Website nutzen zu können, aktivieren Sie bitte JavaScript.</div></noscript>
	</body>
</html>
