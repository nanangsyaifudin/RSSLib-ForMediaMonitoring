
<?php
error_reporting(0);
?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Display feeds</title>
    <style type="text/css">
	body{
	font-family:"Trebuchet MS";
	font-size:12px;
	}
	a{
	color:#333333;
	text-decoration:none;
	}
	a:hover{ color:#0066CC; text-decoration:underline; font-weight:bold}
	hr{
	color: #dedede;
background-color: #dedede;
height: 1px;	}
       .vas{
	   float:left;
		width:270px;
		
		padding:10px;
	   }
	
      .title-head {
            
        font-size:18px;
        font-weight:bold;
        text-align:left;
        background-color:#006699;
		color:#FFFFFF;
	   
        padding:5px;
       
      }
      .feeds-links {
        
       
        text-align:left;
		
        padding:5px;
        border:1px solid #dedede;
      }
       
       .footer {
	   font-size:11px;
	   font-weight:bold;
	   font-family:Verdana, Arial, Helvetica, sans-serif;	  
        }
    </style>
  </head>
  <body>
 <table>
 <tr>
 <td>
  <?php
  include('rssclass.php');
  $feedlist = new rss('http://www.kompas.com/getrss/all');
  echo $feedlist->display(9,"Terserah Kita Bos! - KompaS");
  
	?>
	</td>
	</tr>
	</table>
	
	<table>
	<tr>
	<td> 
	
<?php
  $feedlist = new rss('http://rss.detik.com/');
  echo $feedlist->display(9,"Terserah Kita Bis! - DetiK");
  
	?> 
</td>
</tr>
</table>


    </div>
	
     
	
  </body>
</html>