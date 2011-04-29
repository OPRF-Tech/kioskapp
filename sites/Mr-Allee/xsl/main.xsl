<?xml version="1.0"?>  

<!DOCTYPE xsl:stylesheet [
<!ENTITY nbsp "&#160;">
]> 

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html"/>
	<xsl:template match="/">
		<html>
		<head>
		<title>Mr Allee</title> 
		<link href="/mrallee/css/main.css" rel="stylesheet" type="text/css" />
		
		<!--[if IE]><link rel="stylesheet" type="text/css" href="/mrallee/css/ie.css" /><![endif]-->
		
		<script type="text/javascript" src="/mrallee/js/main.js"></script>
	</head>
	<body onLoad="preLoadImages()">
		<div id="wrapper">
			<div id="header">
				<div id="logo"><a href="/mrallee/index.xml"><img src="/mrallee/images/mrallee.png" alt="Mr Allee" /></a></div>
			</div>
			
			<div id="content">
				<div id="nav">
					<ul>
						<li><a href="/mrallee/index.xml">Home</a></li>
						<li><a href="/mrallee/apcs.xml">AP Comp Sci</a></li>
						<li><a href="/mrallee/pg.xml">Plane Geometry</a></li>
						<li><a href="/mrallee/ics.xml">Intro to Comp Sci</a></li>
						<li><a href="/mrallee/atcs.xml">Adv Topics in Comp Sci</a></li>
						<li><a href="/mrallee/sch.xml">My Schedule</a></li>
						<li><a href="/mrallee/contact.xml">My Contact Info</a></li>
					</ul>
				</div>
				
				<div id="text">
					<!-- this is where the fun stuff happens, aka don't delete this -->
					<xsl:copy-of select="page"/>
					<xsl:apply-templates select="inner"/>
					<!-- you can delete after this -->
				</div>
				
			</div>
		</div>
	
	</body>
</html>
	</xsl:template>
</xsl:stylesheet>

