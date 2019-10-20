<?php
$search_value = $_POST['search_string'];
$languages = array(
    "PHP" => "<a href='http://clch.rf.gd'>PHP, an acronym for Hypertext Preprocessor</a>, is a widely-used open source general-purpose scripting language.",
    "MySQL" => "MySQL is a open source Relational Database Management System developed by Michael Widenius and David Axmark in 1994",
	"SQL" => "SQL stands for Structured Query Language. It is used for managing data in relational database management system which stores data in the form of tables and relationship between data is also stored in the form of tables.",
	"PostgreSQL" => "PostgreSQL is claimed to be the most advanced open source database solution. PostgreSQL is an object-relational database management system (ORDBMS).",
	"HTML" => "HTML, stands for Hyper Text Markup Language is used to create web pages as well as other types of documents viewable in a web browser.",
	"HTML5" => "HTML5 is the fifth revision of HTML, a markup language to present and structure web document.",
	"CSS" => "CSS, stands for Cascading Style Sheet is a computer language to describe presentation (for example width, height, color, background color, alignment etc.) of HTML and XML (and XML based languages like XHTML, SVG) web documents.",
	"CSS3" => "Third version of CSS. Introduced many new concepts and commands which enhanced the web design landscape.",
	"JSON" => "JSON is a lightweight text-based open standard data-interchange format.",
);
if (array_key_exists($search_value, $languages)) {
   $found = $languages[$search_value];
   echo $found;
}
?>