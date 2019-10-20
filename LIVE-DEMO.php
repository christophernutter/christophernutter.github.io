<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Demo of introduction to Ajax by w3resource</title>
    <link href="https://www.w3resource.com/includes/bootstrap.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="well">
<input type="text" class="span3" id="search" data-provide="typeahead" data-items="4" tabindex="1" onblur="select_topic()" />
</div>
<p id="found" tabindex="2"></p>
<script src="LSjs.js"></script>

<script>
 var subjects = ['PHP', 'MySQL', 'SQL', 'PostgreSQL', 'HTML', 'CSS', 'HTML5', 'CSS3', 'JSON']; 
$('#search').typeahead({source: subjects})
</script>
<script>
	function select_topic(){
	 var search_term = document.getElementById("search").value;
	 var xhr;
	 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}
	 var data = "search_string=" + search_term;
	 xhr.open("POST", "introductory-demo", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
	 xhr.onreadystatechange = return_data;
	function return_data() {
	 if (xhr.readyState === 4) {
      if (xhr.status === 200) {
       //alert(xhr.responseText);	   
	   document.getElementById("found").innerHTML = xhr.responseText;
      } else {
        alert('There was a problem with the request.');
      }
     }
	}
	}
 </script>
 
 https://www.w3resource.com/ajax/introduction.php
</body>
</html>