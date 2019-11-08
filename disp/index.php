<!-- Dec 8, 2008  Apr 6, 2010  Nov 8, 2019
  Whitney Roots scanned images display
-->
<!DOCTYPE html>
<html>
  <head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
    <title>Whitney Roots Scan</title>
    <link rel="stylesheet" href="main0.css">
    <link rel="stylesheet" href="main1.css">
  <script type="text/javascript" src="ajax.js"> </script>
  <script type="text/javascript" src="main.js"> </script>
<style type="text/css">
/*margin and padding on body element
  can introduce errors in determining
  element position and are not recommended;
  we turn them off as a foundation for YUI
  CSS treatments. */
body {
	margin:0;
	padding:0;
}
</style>
<!-- Required CSS -->
<link type="text/css" rel="stylesheet" href="yui_2.6.0/build/fonts/fonts-min.css">
<link type="text/css" rel="stylesheet" href="yui_2.6.0/build/treeview/assets/skins/sam/treeview.css">

<!-- Dependency source file --> 
<script src = "yui_2.6.0/build/yahoo-dom-event/yahoo-dom-event.js" ></script>
<!--
<script type="text/javascript" src="yui_2.6.0/build/connection/connection-min.js"></script>
-->
<!-- TreeView source file --> 
<script src = "yui_2.6.0/build/treeview/treeview-min.js" ></script>

<!--begin custom header content for this example-->
<!--end custom header content for this example-->
<!-- end <head> and start <body> -->
<?php
 if (isset($_GET['page'])) {
  $page = $_GET['page']; 
 }else {
  $page = -9; // title page
 }
// echo "page = $page\n";
 if ($page) {
  $src = $page;
  $src = "'" . $src . "'";
  echo '<script type="text/javascript">' . "\n";
  echo 'function loadOnePage() {' . "\n";
  echo ' displaylink(' . $src . ");\n";
  echo "}\n";
  echo '</script>' . "\n";
  echo "</head>\n";
  echo '<body onload = "loadOnePage();">'  . "\n";
 } else {
  echo "</head>\n";
  echo "<body>\n";
 }
?>

<div id="titlediv">
<table width="100%"><tr>
<td>
  <img id="unilogo" src="unilogo.gif"
   alt="University of Cologne" width="52" height="52" />
</td>
<td align="center">
<span class="titlediv">Whitney Roots <a href="help.html">Help</a> </span>
</td>
</tr></table>
</div>

<div id="botleftdiv"> <!--class="yui-skin-sam"> -->
 <ul>
  <li>Preface</li>
 <ul>
<?php
output_item("Title","-9");
output_item("Preface","-11");
output_item("Abbreviations","-20");
?>
 </ul>
  <li>Roots</li>
<ul>
<li>a</li>
<ul>
<?php
function output_item1($pagenum,$word) {
 output_item($word,$pagenum);
}

function output_item ($word,$pagenum) {
   $ref = $pagenum;
    echo "<li><span class='leaf'>";
    if ($pagenum < 0) {
     $temp = 0 - $pagenum;
     echo "<span class='pagenum'>($temp)</span>";
    }else {
     echo "<span class='pagenum'>$pagenum</span>";
    }
    echo "&nbsp;&nbsp;";
    echo "<a class=\"lplink\" onclick=\"displaylink('" . $ref .
         "');\"><span class=\"linkword\">$word</span></a>";
          
    echo "</span></li>";
    echo "\n";
 }
?>

<?php
output_item1("001","aNh");
output_item1("002","aj");
output_item1("003","aRW");
output_item1("004","aNS");
output_item1("005","aS2");
output_item1("006","ah");
output_item1("007","i1");
output_item1("008","iNg");
output_item1("009","il");
output_item1("010","Irzy");
output_item1("011","IS");
output_item1("012","ukz2");
output_item1("013","uB");
output_item1("014","f");
output_item1("015","ard");
output_item1("016","fz");
?>
</ul>
<li>k</li>
<ul>
<?php
output_item1("017","kan");
output_item1("018","kas");
output_item1("019","kAs");
output_item1("020","kup");
output_item1("021","kUR");
output_item1("022","kir");
output_item1("023","kft2");
output_item1("024","kxp");
output_item1("025","kram");
output_item1("026","kru");
output_item1("027","klav");
output_item1("028","kzan");
output_item1("029","kzA");
output_item1("030","kzu");
output_item1("031","kzRu");
output_item1("032","Kan");
output_item1("033","Kud");
?>
</ul>
<li>g</li>
<ul>
<?php
output_item1("034","gaD");
output_item1("035","gard");
output_item1("036","gAh");
output_item1("037","guRW");
output_item1("038","guh");
output_item1("039","gf3");
output_item1("040","graB");
output_item1("041","glap");
output_item1("042","Gas");
output_item1("043","Gf");
output_item1("044","cakz");
output_item1("045","car");
output_item1("046","cAy");
?>
</ul>
<li>c</li>
<ul>
<?php
output_item1("047","cit");
output_item1("048","cud");
output_item1("049","cezw");
output_item1("050","Cand");
output_item1("051","Cur");
output_item1("052","jan");
output_item1("053","jaB");
output_item1("054","ji2");
output_item1("055","jU");
output_item1("056","jYA2");
output_item1("057","jyut");
output_item1("058","JaR");
output_item1("059","qval");
?>
</ul>
<li>t</li>
<ul>
<?php
output_item1("060","tac");
output_item1("061","tan2");
output_item1("062","tarj");
output_item1("063","tir");
output_item1("064","turv");
output_item1("065","tfd");
output_item1("066","tfz");
output_item1("067","trap");
output_item1("068","tvakz");
output_item1("069","Turv");
?>
</ul>
<li>d</li>
<ul>
<?php
output_item1("070","daB");
output_item1("071","das");
output_item1("072","dA4");
output_item1("073","dAS");
output_item1("074","dI1");
output_item1("075","dIv1");
output_item1("076","duz");
output_item1("077","df2");
output_item1("078","dfNh");
output_item1("079","dyu");
output_item1("080","drAq");
output_item1("081","dviz");
output_item1("082","DA");
output_item1("083","Dukz");
output_item1("084","Du");
output_item1("085","Dfz");
output_item1("086","Dur");
?>
</ul>
<li>n</li>
<ul>
<?php
output_item1("087","nakz");
output_item1("088","naB");
output_item1("089","naS1");
output_item1("090","nikz");
output_item1("091","nIq");
output_item1("092","nf");
?>
</ul>
<li>p</li>
<ul>
<?php
output_item1("093","paj");
output_item1("094","pat1");
output_item1("095","pA1");
output_item1("096","pA2");
output_item1("097","pinv");
output_item1("098","pis");
output_item1("099","pU");
output_item1("100","pUr");
output_item1("101","pfc");
output_item1("102","praC");
output_item1("103","pru");
output_item1("104","pluz");
output_item1("105","Pal1");
?>
</ul>
<li>b</li>
<ul>
<?php
output_item1("106","bal");
output_item1("107","bul");
output_item1("108","Baj");
output_item1("109","Ban");
output_item1("110","BA");
output_item1("111","Bikz");
output_item1("112","Buj1");
output_item1("113","Bur");
output_item1("114","Bf");
output_item1("115","Byas");
output_item1("116","BrI");
?>
</ul>
<li>m</li>
<ul>
<?php
output_item1("117","maYc");
output_item1("118","mad");
output_item1("119","mah");
output_item1("120","mArg");
output_item1("121","mid");
output_item1("122","mIl");
output_item1("123","muw");
output_item1("124","mUr");
output_item1("125","mfc");
output_item1("126","mfR");
output_item1("127","med");
output_item1("128","mruc");
?>
</ul>
<li>y</li>
<ul>
<?php
output_item1("129","yaj");
output_item1("130","yam");
output_item1("131","yA");
output_item1("132","yu2");
output_item1("133","yuD");
?>
</ul>
<li>r</li>
<ul>
<?php
output_item1("134","rakz");
output_item1("135","raYC");
output_item1("136","ran2");
output_item1("137","ram");
output_item1("138","rah");
output_item1("139","rAs1");
output_item1("140","rip");
output_item1("141","rih");
output_item1("142","ruj");
output_item1("143","ruD2");
output_item1("144","rUz");
?>
</ul>
<li>l</li>
<ul>
<?php
output_item1("145","laNG");
output_item1("146","lam");
output_item1("147","las");
output_item1("148","liS");
output_item1("149","lI2");
output_item1("150","luB");
output_item1("151","loc");
?>
</ul>
<li>v</li>
<ul>
<?php
output_item1("152","vaj");
output_item1("153","vaD");
output_item1("154","vap1");
output_item1("155","val");
output_item1("156","vas2");
output_item1("157","vah");
output_item1("158","vA3");
output_item1("159","vic2");
output_item1("160","viD2");
output_item1("161","viz");
output_item1("162","vIj");
output_item1("163","vf2");
output_item1("164","vft");
output_item1("165","vfz");
output_item1("166","vell");
output_item1("167","vyay");
output_item1("168","vraSc");
?>
</ul>
<li>S</li>
<ul>
<?php
output_item1("169","Sak");
output_item1("170","SaNk");
output_item1("171","Sam1");
output_item1("172","Sas");
output_item1("173","SAs2");
output_item1("174","SI2");
output_item1("175","SuB");
output_item1("176","Sf1");
output_item1("177","SI");
output_item1("178","Sran");
output_item1("179","Sf");
output_item1("180","Sruz");
output_item1("181","Suz");
?>
</ul>
<li>s</li>
<ul>
<?php
output_item1("182","sakz");
output_item1("183","sad");
output_item1("184","sap");
output_item1("185","sA2");
output_item1("186","si");
output_item1("187","sI");
output_item1("188","suB");
output_item1("189","sUrkz");
output_item1("190","sfp");
output_item1("191","skaB");
output_item1("192","staB");
output_item1("193","stu1");
output_item1("194","sTA");
output_item1("195","snA");
output_item1("196","spand");
output_item1("197","spfh");
output_item1("198","sPur");
output_item1("199","smf");
output_item1("200","sriD");
output_item1("201","svad");
output_item1("202","svAd");
?>
</ul>
<li>h</li>
<ul>
<?php
output_item1("203","har");
output_item1("204","hA1");
output_item1("205","hi");
output_item1("206","hIq");
output_item1("207","hUrC");
output_item1("208","hfz");
output_item1("209","hrAd");
output_item1("210","hvf");
?>
</ul>
</ul>
  <li>Index</li>
<ul>
<li>Present</li>
<ul>
<?php
output_item("cl. 2","211");
output_item("cl. 3","212");
output_item("cl. 7,5","213");
output_item("cl. 9,1","214");
output_item("cl. 1","214");
output_item("cl. 6","217");
output_item("cl. 4","218");
?>
</ul>
<?php
output_item("Perfect","219");
?>
<li>Aorist</li>
<ul>
<?php
 
output_item("root","222");
output_item("a","223");
output_item("redup.","224");
output_item("s","225");
output_item("iz","226");
output_item("siz, sa","227");
?>
</ul>
<li>Future</li>
<ul>
<?php
output_item("w/o i","228");
output_item("with i","229");
output_item("periphrastic","230");
?>
</ul>
<li>SECONDARY</li>
<ul>
<?php
output_item("passive","231");
output_item("intensive","232");
output_item("desiderative","233");
output_item("causative","235");
?>
</ul>
<?php
output_item("TERTIARY","238");
?>
<li>SUNDRIES</li>
<ul>
<?php
output_item("pass. aor.","240");
output_item("aor. optative","241");
output_item("periph. perf.","242");
?>
</ul>
<?php
output_item("Index of Roots","243");
output_item("ADDITIONS","248");
?>
</ul>
</ul>
<script type="text/javascript">

//global variable to allow console inspection of tree:
var tree;
tree = new YAHOO.widget.TreeView("botleftdiv");
tree.render(); 
</script>

</div> <!--botleftdiv-->
<div id="rightpane"></div>
</body>
</html>
