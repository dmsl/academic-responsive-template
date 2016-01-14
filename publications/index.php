<!DOCTYPE html>
<html>

<head>
<title>[ Zeinalipour Publications ]</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">

<!-- Font Awesome Icons -->
<!--<link rel="stylesheet" href="css3/font-awesome.min.css">-->
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Bootstrap -->
<link rel="stylesheet" href="css3/bootstrap.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="js3/html5shiv.js"></script>
<script src="js3/respond.min.js"></script>
<![endif]-->

<script>
function backAway(){
    //if it was the first page
    if(history.length === 1){
        window.location = "../index.html"
    } else {
        window.history.back();
    }
}
</script>
<script src="js3/jquery.min.js"></script>
<script type="text/javascript" src="js3/arrow78.js"></script>
<script type="text/javascript" src="js3/arrow79.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>
<link rel="stylesheet" type="text/css" href="css/tipsy.css"/>
<link rel="stylesheet" type="text/css" href="css/fancybox.css"/>
</head>
<body>

<body style="padding: 20px">

<div class="container">
<div class="row">

<div id="publications">
<p>

<H2><a onClick="backAway();">Zeinalipour's</a> Publications</H2>

<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    /*
     Available Fields: 
     
     The field TYPE will be used for data-filtering. If it is not available then the item will be 
     marked as uncategorised.
     
     'note' 
     'abstract'
     'year'
     'group'
     'publisher'
     'location'
     'articleno'
     'numpages'
     'page-start'
     'page-end'
     'pages'
     'address'
     'url'
     'doi'
     'volume'
     'chapter'
     'journal'
     'author'
     'raw'
     'title'
     'booktitle'
     'folder'
     'type'
     'series'
     'linebegin'
     'lineend'
     'durl',
     'powerpoint',
     'infosite',
     'website'
     
     */
    
    /* 
     Define the format that will be used for printing each bibtex item.
     If a you desire to print a string infront of a field please use the following format:
     
     article = array("title", "author", "string", "bibtex field");
     
     eg.
     
     article = array("title", "author", "Num. Of pages", "pages");
     
     Please modify the example below as desired  is presented bellow. 
     */
    
    $article = array("title", "author", "journal", "series", "location", "publisher", "volume", "number", "pages", "address", "isbn", "year");
    $book = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $booklet = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $conference = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year", "award");
    $inbook = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $incollection = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "chapter", "pages", "address", "isbn", "year", "award");
    $inproceedings = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "chapter", "pages", "address", "isbn", "year", "award");
    $manual = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $mastersthesis = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $misc = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $phdthesis = array("title", "author", "journal", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $proceedings = array("booktitle", "series", "author", "location", "publisher", "volume", "pages", "address", "isbn", "year", "award");
    $techreport = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $unpublished = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $other = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    
    /* 
     Delimiter for Seperating each bibtex field
     */
    
    $delimiter = '.';
    
    /*
     
     Enter fields equivalent to type field in the BibTex file to sort the bibtex entries in categories. Bellow each type enter the title which will be presented as the category title.
     
     */
    
    $sortby = array('journal', 'conference', 'book', 'editorial', 'theses', 'gconferences');
    $sortbyTitle = array('Journal and Magazine Papers', 'Conference and Workshop Papers', 'Book Chapters', 'Editorials','Theses', 'Greek Conferences');
   
    $projects = array('all');
    include 'bibtex.php';				
   
   /* 
     Enter the location of your BibTex file
    */
    $bibTexFile = 'demo.bib';
    
    $bibTex = new BibTeX_Parser();
    $bibTex->parser($file = $bibTexFile); 
    ?>
</body>
</html>
