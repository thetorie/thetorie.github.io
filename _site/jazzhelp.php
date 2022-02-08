<!DOCTYPE html>
<html lang="en-US">
<?php error_reporting(0); ?>
<head>
	<meta charset="UTF-8">
	<title>Jazz Help Menu</title>

<style>

body{
	background-color:#ffffff;
	color:#000000;
	line-height: 1.4;
}

a {
	color: #7f5b5e;
	text-decoration: none;
}

a:visited {
	color: #0a0a0a;
}

a:hover,
a:focus,
a:active {
	color: #cccbcd;

}

body, button, input, select, textarea {
	font-family: "Open Sans", sans-serif;
	font-weight: 400;
	font-size: 14px;
}

h1 {
	font-weight: 500;
	font-size: 20px;
}

.site-header {
	background-color: #5e5960;
	color: #3a3a3a;
}

@media (max-width: 0px) {
	.main-navigation {
		display: block;
	}
	body {
		margin-left: 200px;
	}
}

@media (max-width: 3000px) {
.header-aligned-right .site-header, .site-header {
    text-align: left;
    width: 10%;
}
	.site-header {
		position: fixed;
		left: 0;
		top: 0;
		width: 200px;
		z-index: 300;
		height: 100%;
		-webkit-backface-visibility: hidden;
		-webkit-overflow-scrolling: touch;
		transition: .1s ease;
	}
	
	.admin-bar .site-header {
		top: 32px;
	}
	
	.site-header .main-navigation li {
		float: none;
	}
}

ul, li {
	list-style:  none;
}

ul {
	line-height:  1.5;
}

.iframecontainer {
  position: relative;
  width: 100%;
  max-width:  700px;
  overflow: hidden;
  padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #5E5960;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
    margin-left:  198.5px;
    margin-top:  -30px;
    text-align: left;


}

.dropdown-content a {
 /* padding: 12px 16px;*/
  text-decoration: none;
  display: block;
      font-size:  14px;
      color:  #ffffff;
}

.dropdown-content li {
	margin-left: -30px;
}

.dropbtn {
  background-color: #5E5960;
 border: none;
 width:  200px;
 display: grid;
text-align: left;
line-height:  2;
}
.dropbtn a {
	  color: white;
}

.dropdown-content a:hover {background-color: #7F5B5E;}

.dropdown:hover .dropdown-content {display: block;}

textarea {
	width:  50%;
}

.body 
{
	margin-left:  200px;
	overflow: hidden;
}

img {
	max-width: 700px;
	max-height: 100%;
}
</style>

<link rel="icon" href="https://ripmjazz.org/wp-content/uploads/2019/06/cropped-RIPM_Jazz_ID-192x192.jpg" sizes="192x192" />

<link rel="apple-touch-icon" href="https://ripmjazz.org/wp-content/uploads/2019/06/cropped-RIPM_Jazz_ID-180x180.jpg" />

<meta name="msapplication-TileImage" content="https://ripmjazz.org/wp-content/uploads/2019/06/cropped-RIPM_Jazz_ID-270x270.jpg" />

		</head>


<body>
	<?php
      if(isset($_POST['submit'])){
        $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
        $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
        $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
        $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
        if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
          $name_error = 'Invalid name';
        }
        if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
          $subject_error = 'Invalid subject';
        }
        if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
          $email_error = 'Invalid email';
        }
        if(strlen($message) === 0){
          $message_error = 'Your message should not be empty';
        }
      }
    ?>

	<header class="site-header">
<li><div class="dropdown"><button class="dropbtn"><a href="#intro">Introduction</a></button></div></li>
<li><div class="dropdown"><button class="dropbtn"><a href="#fulltext">Full-Text Search</a></button>
	<div class="dropdown-content">
		<ul>
		<li><a href="#howtosearch">How to Search</a></li>
   		 <li><a href="#morefields">More Search Fields</a></li>
   		<li> <a href="#sorting">Sorting and Interpreting Results</a></li>
   		 <li><a href="#fullpage">Viewing Full-Text Pages</a></li>
   		<li> <a href="#navanddisplay">Navigation and Display</a></li>
   		 <li><a href="#citation">Citation Bar</a></li>
   		<li> <a href="#saveandprint">Save and Print</a></li>
   		 <li><a href="#about">About the Journal</a></li></ul>
  </div></li>
<li><div class="dropdown"><button class="dropbtn"><a href="#citationsearch">Citation Search</a></button>
<div class="dropdown-content">
		<ul>
		<li><a href="#howtosearch2">How to Search</a></li>
   		 <li><a href="#morefields2">More Search Fields</a></li>
   		<li> <a href="#sorting2">Sorting and Interpreting Results</a></li>
   		<li><a href="#viewing2">Viewing Full-Text Pages</a></li>
   		 <li><a href="#navanddisplaycite">Navigation and Display</a></li>
   		 <li><a href="#citation2">Citation Bar</a></li>
   		 <li><a href="#saveandprint2">Save and Print</a></li>
   		 <li><a href="#about2">About the Journal</a></li></ul>
  </div></div></li>
<li><div class="dropdown"><button class="dropbtn"><a href="#browsemode">Browse Mode</a></button>
	<div class="dropdown-content">
		<ul>
		<li><a href="#selecting">Selecting Issues</a></li>
   		 <li><a href="#navanddisplay2">Navigation and Display</a></li>
   		<li> <a href="#citation3">Citation Bar</a></li>
   		 <li><a href="#saveandprint3">Save and Print</a></li>
   		<li><a href="#about3">About the Journal</a></li></ul>
  </div></div></li>
<li><div class="dropdown"><button class="dropbtn"><a href="#browsetoc">Browse Tables of Contents</a></button>
	<div class="dropdown-content">
		 <ul>
		 <li><a href="#selecting2">Selecting Issues</a></li>
   		 <li><a href="#navanddisplay3">Navigation and Display</a></li>
   		<li> <a href="#citation4">Citation Bar</a></li>
   		<li><a href="#saveandprint4">Save and Print</a></li>
   		 <li><a href="#about4">About the Journal</a></li></ul>
  </div></div></li>
<li><div class="dropdown"><button class="dropbtn"><a href="#searchoptions">Search Options</a></button>
	<div class="dropdown-content">
		<ul>
			<li><a href="#options">Full-Text Search</a></li>
   		 <li><a href="#options2">Citation Search</a></li></ul>
  </div></div></li>
  <li><div class="dropdown"><button class="dropbtn"><a href="#saveandprintmain">Save and Print</a></button>
	<div class="dropdown-content">
		<ul>
		<li><a href="#savefull">Saving/Printing Full-Text Pages</a></li>
   		 <li><a href="#savecite">Saving/Printing Citations in Citation Search</a></li></ul>
  </div></div></li>
<li><div class="dropdown"><button class="dropbtn"><a href="#searchtipsandtricks">Search Tips and Tools</a></button>
	<div class="dropdown-content">
		<ul>
		<li><a href="#searchingfull">Searching in Full-Text</a></li>
   		 <li><a href="#abbrvs">Abbreviated Names, Nicknames, and Jazz Vernacular</a></li>
   		 <li><a href="#reviews">Record Reviews in Citation Search</a></li>
   		<li> <a href="#expand">A Tool for Jazz Vernacular: Search Expanders in Citation Search</a></li></ul>
  </div></div></li>
<li><div class="dropdown"><button class="dropbtn"><a href="#reporterror">Report an Error</a></li></button>
<li><div class="dropdown"><button class="dropbtn"><a href="#termsandconditions">Terms and Conditions</a></li></button>
</ul></div></div></div></header>

	<div class="body">
		<div id="intro">
			<img src="images/helpmenu.png" title="RIPM Jazz Logo" alt="RIPM Jazz Logo">									
				<p>
				<h1>Introduction</h1></p>
				<p>RIPM Jazz Periodicals is a unique, full-text database of jazz journals and magazines, of great importance to any lover of jazz and its history, and a primary source reference and research tool for all libraries.</p>

				<p>There are four ways of accessing journal content in RIPM Jazz: Full-Text Search, Citation Search, Browse Mode, and Browse Tables of Content.</p>

				<p><b>Full-Text Search</b> accesses all journal content via keyword(s) found in the original journal text. You may also limit searches to only illustrations or discography lists found in the collection by clicking the “More Search Fields” button. Illustrations are not listed in Browse Tables of Contents. In a forthcoming update, these will be included. However, one can search illustrations in Full-Text Search. Consult the 'Full-Text Search' tab of the Help Menu for video tutorials.</p>

				<p><b>Citation Search</b> searches author and article title records. RIPM has created citation records for titled journal content, including articles, news items, columns, and sheet music. Names of authors are recorded, when given in the journal.</p>

				<p>By selecting “More Search Fields,” you may limit searches to record reviews. Consult the 'Citation Search' tab of the Help Menu for video tutorials.</p>

				<p>Concerning record reviews:
					<ul>
						<li>• For 45s and 78s reviewed, we have recorded the primary musician(s) name(s), record label, and matrix number(s). We have not recorded all musicians performing on the record (if given in the journal) nor a complete listing of all recorded works. </li>
						<li>• Album titles, which become a feature of the LP era, are included when given, though only if present within the journal itself.</li>
						<li>• Advertising content is not captured or indexed.  However, all full-text content can be searched via Full-Text Search.</li></ul></p>

				<p><b>Browse Mode</b> permits users to view journal content page by page. Consult the 'Browse Mode' tab of the Help Menu for video tutorials.</p>

				<p><b>Browse Tables of Content</b> permits users to view each journal issue's author-title records. Each citation record is linked to the corresponding full-text journal page(s). Consult the 'Browse Tables of Content' tab of the Help Menu for video tutorials.</p>



</p></div>
<!-- copy and paste. Modify height and width if desired. -->

<div id="fulltext"><p>
	<h1>Full-Text</h1></p>
				<div id="howtosearch"><p><b><i>How to Search</i></b></p></div>
				<p>Enter your keyword(s) in the <b>Search Full Text</b> field, such as 'Dizzy Gillespie.' Then, click the magnifying glass icon, or press ENTER on your keyboard. This generates a search results page.
					<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/d0a189cd-3092-4686-b274-0c8c0d2128a7/embed?source=153" height="200" width="600" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>

				<div id="morefields"><p><b><i>More Search Fields</i></b></p></div>
				<p>To refine your search, click the <b>More Search Fields</b> button. This transforms the single keyword field into four, and adds fields for <b>Periodical</b> and <b>Year.</b>
					<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/a314cb1c-ee2a-47b6-b7f1-cea3634c7376/embed?source=153" height="480" width="852" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>

				<p>To limit search results to illustrations only, check the <b>Illustrations</b> box. To limit search results to discography lists only, check the <b>Discography</b> box. Note: Illustrations are not listed in Browse Tables of Contents. In a forthcoming update, these will be included.
					<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/86fab6d5-72fa-482f-973a-be4dfee10b48/embed?source=153" height="480" width="852" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>
				<p>Click the <b>Search Options</b> button for additional user-selected options. For a detailed description, see the 'Search Options' tab of the Help Menu.
					<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/31f706ac-6cc0-48c1-8501-fa3168b3aca2/embed?source=153" height="480" width="852" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>

				<div id="sorting"><p><b><i>Sorting and Interpreting Results</i></b></p></div>
				<p><img src="images/fulltextimg10.png"></p>
				<p>In Full-Text Search, a search results page contains three columns:
					<ul>
						<li>(i) thumbnail journal covers of the issues in which the keywords appear;</li>
						<li>(ii) bibliographic references of the journal issues in which the keywords appear;</li>
						<li>(iii) specific page number(s) within each issue where the keyword is found.</li>
					</ul></p>
					<P>Click the highlighted page number to display the corresponding full-text page on which the search term is found.</P>
						<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/bb411bac-b4d7-4a8d-91d0-f35be9b8cf54/embed?source=153" height="480" width="852" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>
					<p>When one's search term appears numerous times in a single issue, an ellipsis displays in the page number column. Hover over the ellipsis to view and select the additional page numbers.
					<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/087e684a-a953-41d7-89e6-605cbd16732e/embed?source=153" height="480" width="852" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>

					<p>Of particular importance is the information contained in the lower band on the results page.
						<br><img src="images/fulltextimg14.png">
						<br>Within the bar, reading from left to right, one can view:
						<ul>
							<li>(i) the number of pages containing the search term(s) found in the entire collection;</li>
							<li>(ii) three sorting options (described below);</li>
							<li>(iii) the number of search results pages.</li>
						</ul></p>
					<p>Sorting Display Options:
						<ul><li><b>Chronological</b>: Orders results from the earliest to the latest</li>
						<li><b>Density</b>: Orders results by the number of times one's search term(s) appears in an issue from most to least. Density sort facilitates access to those issues and pages that <i>may</i> be the most relevant.</li>
						<li><b>Journal Title</b>: Orders results alphabetically by journal title.</li></ul></p>
					<div id="fullpage"><p><b><i>Viewing Full-Text Pages</i></b></p></div>
					<p>After completing a keyword search, clicking a highlighted page number displays the corresponding full-text page on which the search term is found. Keywords on full-text pages are highlighted in blue. Relevant illustrations are surrounded by an orange box.
<!-- copy and paste. Modify height and width if desired. -->

<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/075ac9e5-361d-47e7-b14b-bfdf450adc95/embed?source=153" height="480" width="852" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>

					<div id="navanddisplay"><p><b><i>Navigation and Display in Full-Text Search</i></b></div>
						<br><img src="images/fulltextimg16.png" height="75%" width="75%"></p>
					<div id="citation"><p><b><i>Citation Bar</i></b></div>
						<br><img src="images/fulltextimg17.png"></p>
					<p>The citation bar appears directly above the displayed full-text page. It contains, reading from left to right:
						<ul>
							<li>(i) a bibliographic reference for the displayed page (the journal title, volume and issue number, date, and page number);</li>
							<li>(ii) a tracker indicating the number of pages on which the search term(s) appears and the number of the citation currently being viewed.</li>
						</ul></p>
					<div id="saveandprint"><p><b><i>Save and Print</i></b></p></div>
					<p>To Save/Print portions of the selected issue, click the <b>Save/Print</b> button. For a detailed description, see the 'Save/Print' tab of the Help Menu.
						<br><img src="images/fulltextimg18.png"></p>
					<div id="about"><p><b><i>About the Journal</i></b></p></div>
					<p>Click the <b>About the Journal</b> button to learn about the current journal being searched. Information includes publication details, lacunae, quotes about the journal, and a broad overview of the kinds of content one is likely to find therein. All journal information, and more, can be found at <a href="https://www.ripmjazz.org" target="_blank">ripmjazz.org</a>.
						<br><img src="images/fulltextimg19.png"></p>
</div>
<br><br><br><br>
	<div id="citationsearch"><p>
		<h1>Citation Search</h1></p>
		<div id="howtosearch2"><p><b><i>How to Search</i></b></p></div>
		<p>Enter your keyword(s) in the <b>Author</b> and/or <b>Title</b> fields. Then, click the magnifying glass icon, or press ENTER on your keyboard. This generates a search results page.
			<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/6dd8265a-1195-4d42-a363-643092821ad9/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>
		<div id="morefields2"><p><b><i>More Search Fields</i></b></p></div>
		<p>To refine your search, click the <b>More Search Fields</b> button. This transforms the single <b>Title</b> keyword field into four and adds fields for <b>Periodical</b> and <b>Year</b>.
       	<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/79346e1c-c94b-4114-a1ac-4e788980e192/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
		</p>
	<p>To limit search results to record reviews only, check the <b>Reviews</b> box.

<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
        src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/31b662d2-de63-4ef6-80f1-82ff44aa5573/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>
	<p>Click the <b>Search Options</b> button for additional user-selected options. For a detailed description, see the 'Search Options' tab of the Help Menu.
		<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/d7987359-9d2d-4293-ba01-82e0000603eb/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>

     <div id="sorting2"> <p><b><i>Sorting and Interpreting Results</i></b></p></div>
      <p><img src="images/citationimg9.png"></p>
      <p>In Citation Search, the search results page contains three columns:
      	<ul>
      		<li>(i)	a numerical ordering of results with checkboxes;</li>
      		<li>(ii) thumbnail journal covers of the corresponding issues in which the citations appear;</li>
      		<li>(iii) citations, including the specific page numbers within each issue where the record is found.</li></ul>
      	<br><img src="images/citationimg10.png"></p>

<p>Click the highlighted page number(s) to display the corresponding full-text page on which the article title is found.</p>

<p>Of particular importance is the information contained in the lower band on the results page.
						<br><img src="images/citationimg11.png">
						<br>Within the bar, reading from left to right, one can view: 
						<ul>
							<li>(i)	the number of articles containing the search term(s) found in the entire collection;</li>
							<li>(ii)<b> Mark All</b> and <b>Unmark All</b> checkboxes, to facilitate easier selection of citation records for the purpose of saving and printing. For a detailed description, see the ‘Save/Print’ tab of the Help Menu;</li>
							<li>(iii) two sorting options (described below);</li>
							<li>(iv) the number of search results pages. </li></ul></p>

<p>Sorting Display Options: 

<ul><li><b>Chronological:</b> Orders results from the earliest to the latest</li>
	<li><b>Journal Title:</b> Orders results alphabetically by journal title</li></ul></p>
	<div id="viewing2"> <p><b><i>Viewing Citations in Full-Text</i></b></p></div>
	<p>After completing a citation search, clicking a highlighted page number displays the corresponding full-text page on which the article title is found. Article titles are surrounded by an orange box.
	<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/6eef0389-98e6-487a-99ac-324a27f4ecb3/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>
     		
<div id="navanddisplaycite"><p><b><i>Navigation and Display</i></b></p></div>
<p><img src="images/citationimreplace.png"></p>
     		<div id="citation2"><p><b><i>Citation Bar</i></b></p></div>
     <p><img src="images/citationimg14.png"></p>
     <p>The citation bar appears directly above the displayed full-text page. It contains, reading from left to right:
     	<ul>
     		<li>(i) a bibliographic reference for the displayed page (the journal title, volume and issue number, date, and page number);</li>
     		<li>(ii) a tracker indicating the number of the citation currently being viewed compared to the total number of results.</li></ul></p>
     <div id="saveandprint2"><p><b><i>Save and Print</i></b></p></div>
     <p>To Save/Print portions of the selected issue, click the <b>Save/Print</b> button. For a detailed description, see the 'Save/Print' tab of the Help Menu.
     	<br><img src="images/citationimg15.png"></p>
     <div id="about2"><p><b><i>About the Journal</i></b></p></div>
     <p>Click the <b>About the Journal</b> button to learn about the current journal being searched. Information includes publication details, lacunae, quotes about the journal, and a broad overview of the kinds of content one is likely to find therein. All journal information, and more, can be found at <a href="https://www.ripmjazz.org" target="_blank">ripmjazz.org</a>.
     	<br><img src="images/citationimg16.png"></p>

	</div>
<br><br><br><br>
	<div id="browsemode"><p>
		<h1>Browse Mode</h1></p>
		<div id="selecting"><p><b><i>Selecting Issues</i></b></p></div>
		<p>Select a journal title from the <b>Periodical</b> drop down list, a <b>Year</b> of publication, and a <b>Volume</b> number (where applicable). This generates a list of issues.
			<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/530687b9-96de-49f7-8325-0a55cd15918a/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>
        <p>Clicking on a selected issue displays its first page.
        	<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/8b4eacb2-82a9-4bd7-8136-91bf616bdd95/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>
        <div id="navanddisplay2"><p><b><i>Navigation and Display in Browse Mode</i></b></p></div>
        	<br><img src="images/browseimg6.png" height="75%" width="75%"></p>
        <div id="citation3"><p><b><i>Citation Bar</i></b></p></div>
        	<p><img src="images/browseimg7.png">
        		<br>On the top left-hand corner above each displayed journal page, a citation appears containing the journal title, volume and issue numbers, date, and number of the page being viewed.</p>
        <div id="saveandprint3"><p><b><i>Save and Print</i></b></p></div>
        <p>To Save/Print portions of the selected issue, click the <b>Save/Print</b> button. For a detailed description, see the 'Save/Print' tab of the Help Menu.
        	<br><img src="images/browseimg8.png"></p>
        <div id="about3"><p><b><i>About the Journal</i></b></p></div>
        <p>Click the <b>About the Journal</b> button to learn about the current journal being searched. Information includes publication details, lacunae, quotes about the journal, and a broad overview of the kinds of content one is likely to find therein. All journal information, and more, can be found at <a href="https://www.ripmjazz.org" target="_blank">ripmjazz.org</a>.
        	<br><img src="images/browseimg9.png"></p>
	</div>
<br><br><br><br>
		<div id="browsetoc"><p>
		<h1>Browse Tables of Contents</h1></p>
		<div id="selecting2"><p><b><i>Selecting Issues</i></b></p></div>
		<p>Select a journal title from the <b>Periodical</b> drop down list, a <b>Year</b> of publication, and an <b>Issue</b> number (where applicable).
<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/211d9271-ce0a-426d-b916-31a2c7fe3842/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>

		<p>This generates a numerical list of that issue's article records. It includes, reading from left to right:
			<ul>
				<li>(i) the numerical ordering of the records, organized by that which appears first in the journal issue to the last;</li>
				<li>(ii) the title of each article;</li>
				<li>(iii) the name of the corresponding author when given;</li>
				<li>(iv) the page(s) on which the article appears.</li></ul>
			<br><img src="images/browsetocimg4.png"></p>
			<p>Click the <b>Previous Issue / Next Issue</b> buttons to navigate to the next or previous journal issue's article records.
				<br><img src="images/browsetocimg5.png"></p>
			<p>Clicking an article title displays that specific content within the journal issue. Article titles are surrounded by an orange box.

				<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/34c5cbc1-a20a-4586-9aff-da7392be1c81/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>

			<div id="navanddisplay3"><p><b><i>Navigation and Display in Browse Tables of Content</i></b></p>
			<p><img src="images/TOC_navNEW.png" height="75%" width="75%"></p>

			<div id="citation4"><p><b><i>Citation Bar</i></b></p></div>
			<p><img src="images/browsetocimg8.png"></p>
			<p>On the top left-hand corner above each displayed journal page, a citation appears containing the journal title, volume and issue numbers, date, and number of the page being viewed.</p>
			<div id="saveandprint4"><p><b><i>Save and Print</i></b></p></div>
			<p>To Save/Print portions of the selected issue, click the <b>Save/Print</b> button. For a detailed description, see the 'Save/Print' tab of the Help Menu.
				<br><img src="images/browsetocimg9.png"></p>
			<div id="about4"><p><b><i>About the Journal</i></b></p></div>
			<p>Click the <b>About the Journal</b> button to learn about the current journal being researched. Information includes publication details, lacunae, quotes about the journal, and a broad overview of the kinds of content one is likely to find therein. All journal information, and more, can be found at <a href="https://www.ripmjazz.org" target="_blank">ripmjazz.org</a>.
				<br><img src="images/browsetocimg10.png"></p>

	</div>
<br><br><br><br>
	<div id="searchoptions"><p>
		<h1>Search Options</h1></p>
		<p>The Search Options function is found in Full-Text Search and Citation Search.</p>
		<div id="options"><p><b><i>Search Options in Full-Text Search</i></b></p></div>
		<p>To access, click on the <b>More Search Fields</b> button. Then, click the <b>Search Options</b> button.
<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/da68bf81-52e6-403d-8657-00e674e9e63f/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
		</p>
		<p>Clicking the <b>Search Options</b> button offers a number of user-selected options.

		<br><img src="images/searchoptionsimg3.png" height="75%" width="75%"></p>

		<p>Mode
			<ul>
				<li><b>Basic</b>: If selected, the single keyword field is set as default.</li>
				<li><b>Advanced</b>: If selected, the default search interface includes four fields rather than the single keyword field, and includes fields for Periodical and Year as well as the ability to limit searches to Illustrations or Discography lists.</li></ul></p>
		<p>Full-Text Search Options
			<ul>
				<li><b>Proximity</b>: When searching multiple keywords, the proximity value sets the number of characters (not words) that separate the two or more terms searched. The lower the number the less distance between search terms. For example, if one searches for "Bird Dizzy" and places '50' in the proximity field, the search results lists all pages on which the terms Bird and Dizzy appear within 50 characters of each other. The proximity number can be adjusted as desired.</li>
				<li><b>Wildcard</b>: Includes all letters that follow a given search term. A wildcard search for "Diz" would include Diz's, Dizzy, Dizzy's, Dizzy-led, Dizzyphiles, Dizzy-influenced, Dizzy-Rollins-Stitt, etc.</li></ul>

			<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/2458a572-6faf-4774-a0e2-f70a2c692158/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>
		<p>Sort
			<ul>
				<li><b>Chronological</b>: Orders results from the earliest to the latest by default.</li>
				<li><b>Density</b>: Orders results by the number of times one's search term(s) appears in an issue from most to least by default. Density sort facilitates access to those issues and pages that <i>may</i> be the most relevant.</li>
				<li><b>Journal Title</b>: Orders results alphabetically by journal title by default.</li></ul></p>
		<div id="options2"><p><b><i>Search Expanders in Citation Search</i></b></p></div>
		<p>Navigation to, and the user-selection of, <b>Search Options</b> in Citation Search is similar to Full-Text Search, with one significant addition.
			<br><img src="images/searchoptionsimg5.png" height="75%" width="75%"></p>
		<P><B>Search Expanders</B>: Jazz culture is known for its colorful vocabulary, and many article titles found in the collection make use of jazz's terminologies, nicknames, stage names, and abbreviations.</P>
		<p>To account for this unique feature of the jazz press, RIPM developed a dictionary of jazz terms and names. Then, equivalences were created, matching the 'jazzologies' with their more-standard usages.</p>
		<p>For example:
			<br>Bean / Hawk = Coleman Hawkins
			<br>gitbox = guitar
			<br>H'wood = Hollywood
			<br>moochy = borrow
			<br>ork = orchestra
			<br>Satchmo = Louis Armstrong
			<br>trad = traditional</p>
		<p>By default, Search Expanders are <b><u>OFF</u></b>. When they are <b><u>OFF</u></b>, citation search results contain only the exact keyword(s) queried.</p>
		<p>For example:
			<br>Searching 'Coleman Hawkins' in the <b>Title</b> field results in articles only in which the term 'Coleman Hawkins' is present. Note on the left of the lower band that there are 27 articles that contain 'Coleman Hawkins' in the title.

			<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/c5f6eadb-8786-4eea-8af7-ad82df1cab8c/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
    </p>
		 <p>When Search Expanders are <b><u>ON</u></b>, citation seach results include relevant equivalences.</p>
		 <p>For example:
		 	<br>Searching 'Coleman Hawkins' in the <b>Title</b> field results in articles in which the term 'Coleman Hawkins' is present in the title, and now also include titles in which his well-known nicknames—'Bean' and 'Hawk'—were used. Note on the left of the lower band that the results page now contains 245 articles.

		 <!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/c212189d-79d9-4adb-8eec-7938e64bdac6/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>
		 <p>Search Expanders ON can yield many more results relevant to one's research interest(s). However, note that results may also include citations outside the scope of one's query.</p>
	</div>
	<br><br><br><br>
	<div id="saveandprintmain"><p>
		<h1>Save and Print</h1></p>
		<P>There are two kinds of content which can be saved and printed in the RIPM Jazz Periodicals database:
			<ul>
				<li>(i) any full-text page displayed via Full-Text Search, Citation Search, Browse Mode, and Browse Tables of Content;</li>
				<li>(ii) Citations via the search results page in Citation Search.</li></ul></P>
		<div id="savefull"><p><b><i>Saving/Printing Full-Text Pages</i></b></p></div>
		<p>To Save/Print when viewing a full-text page, click the <b>Save/Print</b> button. The first time one clicks on the <b>Save/Print</b> button, a Terms and Conditions box appears. To Save/Print, one must accept RIPM's Terms and Conditions of Use.

		<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/1712327d-4de7-49f1-ba26-453465654d94/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>

		<p>After agreeing to RIPM's Terms and Conditions of Use, a Save/Print window appears.
			<br><img src="images/saveandprintimg3.png" height="75%" width="75%"></p>
		<p>The Save / Print window contains five sections:
			<ul>
				<li>(i) <b>Author / Title Display</b>: Automatically displays the pertinent journal title, volume and issue number, and date. All fields are modifiable by the user, including the option to include the author's name and article title. Any displayed and inserted information will appear on the downloaded PDF file.
					<li><img src="images/saveandprintimg4.png" height="75%" width="75%"></li></li>
				<li>(ii) <b>Pages</b>: There are three choices; one may select the current page being viewed, or manually add consecutive pages, or select a series of individual pages for downloading.
					<li><img src="images/saveandprintimg5.png" height="75%" width="75%"></li></li>
				<li>(iii) <b>Notes</b>: Self-explanatory.
					<li><img src="images/saveandprintimg6.png" height="75%" width="75%"></li></li>
				<li>(iv) <b>File Size</b>: An estimate of the file size will be generated automatically once pages have been selected.
					<li><img src="images/saveandprintimg7.png" height="75%" width="75%"></li></li>
				<li>(v) <b>Save</b>: Users may opt to download either the citation and image URL only. Ten pages may be saved per download. An additional checkbox allows users to keep or remove highlighted content.
					<li><img src="images/saveandprintimg8.png" height="75%" width="75%"></li></li></ul></p>
		<p>After clicking the Save / Print button, a PDF file is downloaded.
<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/4686ce4f-f898-4aa9-8ac0-6b4b2e5de428/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>

		<div id="savecite"><p><b><i>Saving/Printing Citations in Citation Search</i></b></p></div>
		<p>To Save/Print citations in Citation Search, enter a keyword in the <b>Author</b> and/or <b>Title</b> fields. Then click the magnifying glass icon, or press ENTER on your keyboard. This generates a search results page. Then, select citations by clicking the corresponding checkboxes.

		<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/aa1dddf6-e07f-4a29-b47b-78f98e2f37c5/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>

		<p>If a list of all citations for a given search is desired, click the <b>Mark All</b> checkbox on the lower band. Click the <b>Unmark All</b> checkbox to unselect all citations.
			<br><img src="images/saveandprintimg12.png"></p>

		<p>Once citation check boxes have been selected, click the Save/Print button. A PDF file of the selected citations is then automatically downloaded to your computer.
			<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/b43ee46e-b416-474b-a375-b8ca9ca6bcfa/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>
	</div>
	<br><br><br><br>	
	<div id="searchtipsandtricks"><p>
		<h1>Search Tips and Tools</h1></p>
		<p>Note: Both (i) the list of 500 jazz musician nicknames and abbreviations, and (ii) the transcription of Cab Calloway's <i>Hepster's Dictionary</i> appear only on <a href="https://www.ripmjazz.org" target="_blank">ripmjazz.org</a> but are hyperlinked below.</p>
		<div id="searchingfull"><p><b><i>Searching in Full-Text Search</i></b></p></div>
		<ul>
			<li>• Full-Text Search accesses all journal content via keyword(s) found in the original journal text. Names of individuals, institutions, geographic locations, and titles of works will generate excellent results.</li>
			<li>• The results of queries focusing on concepts (i.e. racism, politics, etc.) may be less successful as we are searching the printed text and not an analytical index.</li>
			<li>• The underlying OCR engine is quite good, though not perfect. Therefore, we suggest searching for string text without the use of quotes, which may somewhat limit results.</li></ul>
		<div id="abbrvs"><p><b><i>Abbreviated Names, Nicknames, and Jazz Vernacular</b></i></p></div>
		<ul>
			<li>• Note that individuals may be referred to by their first name only. For example, Ella Fitzgerald is often referred to as “Ella”; and Benny Goodman as “Benny”.</li> 
			<li>• A nickname may also be employed in place of a proper name. For example, “Satchmo” or “Pops” for Louis Armstrong, “Trane” for John Coltrane, and “Bu” for Art Blakey.</li> 
			<li>• Be aware of the fact that searching a first name or a nickname may generate a bit larger results list than one might desire. For example, a search for the name “Benny” might include results for Jack Benny; about twenty individuals are referred to as “Sonny”; and “zoot” may refer to either saxophonist “Zoot” Sims, or, “zoot” suit.</li> 
			<li>• Jazz vernacular may also present a challenge. For example, the terms “clambake”, “gravy”, and “zoot” may not be clear.</li></ul>
		<div id="help"><p><i>Where to Turn for Help</i></p></div>
		<ul>
			<li>Click <a href="https://ripmjazz.org/nicknames-and-pseudonyms-of-selected-jazz-musicians/" target="_blank">here</a> for a list of 500 jazz nicknames.</li>
			<li>Click <a href="https://ripmjazz.org/cab-calloways-hepsters-dictionary/" target="_blank">here</a> for a transcription of Cab Calloway's <i>Hepster's Dictionary</i></li></ul>
		<div id="reviews"><p><b><i>Record Reviews in Citation Search</i></b></p></div>
		<p>In Citation Search, by selecting <b>More Search Fields</b>, you may limit searches to record reviews.</p>
		<p>Concerning record reviews:</p>
		<ul>
			<li>• For 45s and 78s reviewed, we have recorded the primary musician(s) name(s), record label, and matrix number(s). We have not recorded all musicians performing on the record (if given in the journal) nor a complete listing of all recorded works.</li>
			<li>• Album titles, which become a feature of the LP era, are included when given, though only if present within the journal itself.</li>
			<li>• Advertising content is not captured or indexed.  However, all full-text content can be searched via Full-Text Search.</li></ul>
		<div id="expand"><p><b><i>A Tool for Jazz Vernacular: Search Expanders in Citation Search</i></b></p></div>

			<p>Search Expanders is a user-selected option unique to Citation Search. To access, navigate to <b>Citation Search</b>, select <b>More Search Fields</b>, then click the <b>Search Options</b> button.
<br><img src="images/searchoptionsimg5.png" height="75%" width="75%"></p>
			<p>To account for the numerous abbreviations, nicknames, and jazz vernacular present in article titles found in the jazz press, RIPM developed a dictionary of jazz terms and names. Then, equivalences were created, matching the 'jazzologies' with their more-standard usages.</p>
		<p>For example:
			<br>Bean / Hawk = Coleman Hawkins
			<br>gitbox = guitar
			<br>H'wood = Hollywood
			<br>moochy = borrow
			<br>ork = orchestra
			<br>Satchmo = Louis Armstrong
			<br>trad = traditional</p>
		<p>By default, Search Expanders are <b><u>OFF</u></b>. When they are <b><u>OFF</u></b>, citation search results contain only the exact keyword(s) queried.</p>
		<p>For example:
			<br>Searching 'Coleman Hawkins' in the <b>Title</b> field results in articles only in which the term 'Coleman Hawkins' is present. Note on the left of the lower band that there are 27 articles that contain 'Coleman Hawkins' in the title.

			<!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/c5f6eadb-8786-4eea-8af7-ad82df1cab8c/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
    </p>
		 <p>When Search Expanders are <b><u>ON</u></b>, citation seach results include relevant equivalences.</p>
		 <p>For example:
		 	<br>Searching 'Coleman Hawkins' in the <b>Title</b> field results in articles in which the term 'Coleman Hawkins' is present in the title, and now also include titles in which his well-known nicknames—'Bean' and 'Hawk'—were used. Note on the left of the lower band that the results page now contains 245 articles.

		 <!-- copy and paste. Modify height and width if desired. -->
<div class="iframecontainer"> 
  <iframe class="responsive-iframe" name="embedded_content" scrolling="no" frameborder="0" type="text/html" 
         src="https://www.screencast.com/users/vclark6520/folders/Snagit/media/c212189d-79d9-4adb-8eec-7938e64bdac6/embed?source=153" height="480" width="850" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></p>
		 <p>Search Expanders ON can yield many more results relevant to one's research interest(s). However, note that results may also include citations outside the scope of one's query.</p>


	</div>
	
<br><br><br><br>
	<div id="reporterror"><p>
		<h1>Report an Error</h1></p>
		<p>Please fill out this form to report any errors you encounter while using RIPM Jazz Periodicals.</p>
		<p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      <label for="name">Name:</label><br>
      <input type="text" name="name">
      <p><?php if(isset($name_error)) echo $name_error; ?></p>
      <label for="subject">Subject:</label><br>
      <input type="text" name="subject">
      <p><?php if(isset($subject_error)) echo $subject_error; ?></p>
      <label for="email">Email:</label><br>
      <input type="text" name="email">
      <p><?php if(isset($email_error)) echo $email_error; ?></p>
      <label for="message">Message:</label><br>
      <textarea name="message"></textarea>
      <p><?php if(isset($message_error)) echo $message_error; ?></p>
      <input type="submit" name="submit" value="Submit">
      <?php 
        if(isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
          $to = 'vclark@ripm.org'; // edit here
          $body = " Name: $name\n E-mail: $email\n Message:\n $message";
          if(mail($to, $subject, $body)){
            echo '<p style="color: green">Message sent</p>';
          }else{
            echo '<p>Error occurred, please try again later</p>';
          }
        }
      ?>
    </form>




<!-- 			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

First Name: <br><input type="text" name="first_name"><br>
Last Name: <br><input type="text" name="last_name"><br>
Email: <br><input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
  </form> --></p>
	</div>
<br><br><br><br>
	<div id="termsandconditions"><p>
		<h1>Terms and Conditions</h1></p>
<center><img src="images/RIPM-logo-alone-large-transparent-background.gif" height="30%" width="30%"></center>
<p>Your right to access and to use RIPM Databases is subject to your acceptance of RIPM’s Terms and Conditions of Use. Available at <a href="https://www.ripm.org/TermsandConditionsUser" target="_blank">www.ripm.org/TermsandConditionsUser</a> these state, in part, (i) that the use of content in any of RIPM’s Databases for commercial purposes is strictly forbidden; and (ii) the specific restrictions regarding the downloading and use of the content in RIPM’s Databases.</p>
</div>
</div>
</div>
</body>
</html>