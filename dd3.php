<?php
require "config.php"; // Your Database details 
?>

<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Demo of Three Multiple drop down list box from plus2net</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value; 
self.location='dd3.php?cat=' + val ;
}
function reload3(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value; 
var val2=form.subcat.options[form.subcat.options.selectedIndex].value; 

self.location='dd3.php?cat=' + val + '&cat3=' + val2 ;
}

</script>
</head>

<body>
<?Php


///////// Getting the data from Mysql table for first list box//////////
$quer="SELECT DISTINCT merekmobil FROM mobil"; 
///////////// End of query for first list box////////////

/////// for second drop down list we will check if category is selected else we will display all the subcategory///// 
///$cat=$_GET['cat']; // This line is added to take care if your global variable is off
if(isset($cat) and strlen($cat) > 0){
$quer2="SELECT DISTINCT tahun FROM mobil where cat_id=$cat"; 
}else{$quer2="SELECT DISTINCT tahun FROM mobil"; } 
////////// end of query for second subcategory drop down list box ///////////////////////////


/////// for Third drop down list we will check if sub category is selected else we will display all the subcategory3///// 
///$cat3=$_GET['cat3']; // This line is added to take care if your global variable is off
if(isset($cat3) and strlen($cat3) > 0){
$quer3="SELECT DISTINCT model FROM mobil where subcat_id=$cat3"; 
}else{$quer3="SELECT DISTINCT model FROM mobil"; } 
////////// end of query for third subcategory drop down list box ///////////////////////////


echo "<form method=post name=f1 action='dd3ck.php'>";
//////////        Starting of first drop downlist /////////
echo "<select name='cat' onchange=\"reload(this.form)\"><option value=''>Select one</option>";
foreach ($dbo->query($quer) as $noticia2) {
if($noticia2['cat_id']==@$cat){echo "<option selected value='$noticia2[cat_id]'>$noticia2[category]</option>"."<BR>";}
else{echo  "<option value='$noticia2[cat_id]'>$noticia2[category]</option>";}
}
echo "</select>";
//////////////////  This will end the first drop down list ///////////

//////////        Starting of second drop downlist /////////
echo "<select name='subcat' onchange=\"reload3(this.form)\"><option value=''>Select one</option>";
foreach ($dbo->query($quer2) as $noticia) {
if($noticia['subcat_id']==@$cat3){echo "<option selected value='$noticia[subcat_id]'>$noticia[subcategory]</option>"."<BR>";}
else{echo  "<option value='$noticia[subcat_id]'>$noticia[subcategory]</option>";}
}
echo "</select>";
//////////////////  This will end the second drop down list ///////////


//////////        Starting of third drop downlist /////////
echo "<select name='subcat3' ><option value=''>Select one</option>";
foreach ($dbo->query($quer3) as $noticia) {
echo  "<option value='$noticia[subcat2]'>$noticia[subcat2]</option>";
}
echo "</select>";
//////////////////  This will end the third drop down list ///////////


echo "<input type=submit value='Submit the form data'></form>";
?>
<br><br>
<a href=dd3.php>Reset and Try again</a>
<br><br>
</body>
</html>
