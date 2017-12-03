<!DOCTYPE HTML>
<!--
	Lens by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Tyler Wilcox Photo Album</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading-0 is-loading-1 is-loading-2">

		<!-- Main -->
			<div id="main">

				 
					<header id="header">
                        <!-- Header
						<h1>Lens</h1>
						<p>Just another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul> -->
                        
                        <h1>Photos by Tyler Wilcox</h1>
                        
                        <a href="http://tywilly.com">Back to home</a>
                        
					</header>
                
                
				<!-- Thumbnail -->
				<section id="thumbnails">
						<!-- <article>
							<a class="thumbnail" href="images/fulls/01.jpg" data-position="left center"><img src="images/thumbs/01.jpg" alt="" /></a>
							<h2>Diam tempus accumsan</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</article> -->
                    
                        <?php
                            //Grab the photos and echo them to the page.
                    
                            // Connecting, selecting database
                            $link = mysql_connect('127.0.0.1', 'root', 'root')
                                or die('Could not connect: ' . mysql_error());
                            //echo 'Connected successfully';
                            mysql_select_db('PhotoAlbum') or die('Could not select database');

                            // Performing SQL query
                            
                            $result = mysql_query("SELECT * FROM PhotoList") or die('Query failed: ' . mysql_error());

                            // Printing results in HTML
                            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                                
                                $AbsPath = "images/fulls/" . $row['Path'];
                                $ThumbPath = "images/thumbs/" . $row['ThumbPath'];
                                
                                echo "<article>";
                                echo "<a class='thumbnail' href='" . $AbsPath . "' data-position=''><img src='" . $AbsPath . "' alt='' /></a>";
                                echo "<h2>". $row['Title'] . "</h2>";
                                echo "<p>". $row['Desc'] ."</p>";
                                echo "</article>";
                            }

                            // Free resultset
                            mysql_free_result($result);

                            // Closing connection
                            mysql_close($link);
                    
                        ?>
                    
				</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Tyler Wilcox.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a>.</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>