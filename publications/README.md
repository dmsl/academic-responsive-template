SmartBIB
=================================

The SmartBIB Project allows you to present a BIB database on the web. It is ideal for personal and project websites.

Demo
====

http://dmsl.github.com/smartbib/

Installation Instructions:
=====

1. Insert the following code in the `<head>` element of your php file:

```php
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.tipsy.js"></script> 
    <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>   
    <script type="text/javascript" src="js/custom.js"></script>
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="css/tipsy.css"/>
    <link rel="stylesheet" type="text/css" href="css/fancybox.css"/>
```

2. Insert the following code:

```php
	<php
			        
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
            
            $article = array("title", "author", "journal", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
            $book = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
            $booklet = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
            $conference = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
            $inbook = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
            $incollection = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "chapter", "pages", "address", "isbn", "year");
            $inproceedings = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "chapter", "pages", "address", "isbn", "year");
            $manual = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
            $mastersthesis = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
            $misc = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
            $phdthesis = array("title", "author", "journal", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
            $proceedings = array("booktitle", "series", "author", "location", "publisher", "volume", "pages", "address", "isbn", "year");
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
			
			$sortby = array('editorial','book', 'journal', 'conference','theses', 'gconferences');
			$sortbyTitle = array('Editorials','Book Chapters', 'Journals and magazine papers', 'Conference and Workshop Papers', 'Theses', 'Greek Conferences');
                            
            include './bibtex/BibTex.php';				
            /* 
            
			Enter the location of your BibTex file
            
			*/
            $bibTexFile = './bibtex/demo.bib';
            
            $bibTex = new BibTeX_Parser();
            $bibTex->parser($file = $bibTexFile); 
        ?>
```

Available BibTex Fields:
=======================

	'note' 
	'abstract'
	'year' // Required field 
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
	'type' // Required field representing the type of the publication entry
	'series'
	'linebegin'
	'lineend'
	'durl',  // A download URL for your publication entry
	'powerpoint', // A relevant Powerpoint URL for your publication entry
	'infosite', // An info site regarding the conference where the paper, demo was published
	'website' // A relevant entry to your publication
    
Beautification configuration:
======================

1. Define the format that will be used for printing each bibtex item.
   
   If a you desire to print a string infront of a field please use the following format:
                
     ```php
     article = array("title", "author", "string", "bibtex field");
     ```
  eg.

    ```php
    article = array("title", "author", "Num. Of pages", "pages");
    ```

  Full Example:
    
    ```php
    $inproceedings = array("title", "author", "year", "In ", "booktitle", "series", "pages" , "location", "publisher", "address","url");
    ```

2.	Please insert a type, durl, infosite, website or powerpoint field for each item in your BibTex file as desired.

3.	The types will be automatically filtered and sorted according the following arrays

		$sortby = array('editorial','book', 'journal', 'conference','theses', 'gconferences');
		$sortbyTitle = array('Editorials','Book Chapters', 'Journals and magazine papers', 'Conference and Workshop Papers', 'Theses', 'Greek Conferences');
                
4.	For example an item with type = { journal } in your BibTex will be added to the Journals category.


Credits:
========

+ Data Management Systems Laboratory, University of Cyprus
+ Georgios Larkou (http://www.cs.ucy.ac.cy/~glarko01/ - https://github.com/ntenisOT)
+ Isotope jQuery (http://isotope.metafizzy.co/)
+ (Modified) BuddyPress BibTex Parser (https://github.com/scholarpress/buddypress-courseware/blob/master/bibliography/bibtex-parser.class.php)
+ Fancybox (http://fancybox.net/) 
+ Tipsy (http://onehackoranother.com/projects/jquery/tipsy/)

