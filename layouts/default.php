<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?= $title ?></title> 
<link rel="stylesheet" href="/tpl/my_grid.css">
	</head>
	<body>
		<header id="pageHeader"></header>	
        		<article id="mainArticle"><?= $content ?></article>
                <span  id="mainNav"><? include 'tpl/menu.php'; ?></span>
			<aside id="siteAds"></aside>	
		<footer id="pageFooter"></footer>
	</body>
</html>
