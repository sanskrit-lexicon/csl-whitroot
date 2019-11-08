<?php
// serveimg for Whitney Roots
// 04-06-2010, ejf. Revised 11-08-2019
$pagein=$_GET['page'];
if (!$pagein) {$pagein = $argv[1];}
if (!$pagein) {$pagein='-9';} // title page
if (preg_match('/^([0-9-]+)$/',$pagein,$matches)) {
    $page=$matches[1];
}else {
 $page='-9';
}
//echo "page = $page, pagein = $pagein\n";
list ($filename,$fileprev,$filenext)=getfiles($page);
//$width0 = 978;
//$height0 = 1450;
//$width = int ($width0 / 2);
//$height = int ($height0 / 2);
//675px × 900px
$width = 978;
$height = 1450;
$widthpx = "$width" . "px";
$heightpx = "$height" . "px";
print "<img src=\"$filename\" width=\"$width\" height=\"$height\" />";
print "<div id='pagenav'>\n";
genDisplayFile("&lt;",$fileprev);
genDisplayFile("&gt;",$filenext);
print "</div>\n";
echo "</body></html>";
exit;

function getfiles($pagein) {
    $page = $pagein;
     if ((-20 <= $page) && ($page <= -9)) {
	return key_from_page_preface(-$page);
    }else if ((211 <= $page) && ($page <= 250)) {
	return key_from_page_index($page);
    }
    $filelist="whitscans.txt";
    $fp = fopen($filelist,"r");
    if (!$fp) {
	return array(0,0,0);
    } 
    $fileprev=0;
    $filenext=0;
    $filename=0;
    $more = 1;
    $page1 = $pagein;
    $page = sprintf('%03d',$page1);
//    echo "chk: page=$page\n";
    $line = fgets($fp);
//    echo "line = $line\n";
    while (($line)&& ($more == 1)) {
	$line = chop($line);
        if (!preg_match('/whit-([0-9]+)-(.*?)[.]jpg$/',$line,$matches)) {
//            echo "skipping line $line\n";
	    $line=fgets($fp);
	    continue;
	}
	$p=$matches[1];
 	if ($p == $page){
	    $filename=$line;
	    $line=fgets($fp);
            if($line) {
	     $line = chop($line);
	     if (preg_match('/whit-([0-9]+)-(.*?)[.]jpg$/',$line,$matches)) {
                $p1 = $matches[1];
//                if ($p1 >= 368) {$p1 = ($p1 - (370 - 344));}
		$filenext="$p1";
	     }
	    $more = 0;
           }
	} else {
	    $fileprev="$p";
	    $line=fgets($fp);
	}
    }
    fclose($fp);
    if ($more == 1) {
	return array(0,0,0);
    }
    if ($filename) {
	$filename = "../jpg/$filename";
    }
    return array($filename,$fileprev,$filenext);
}
function key_from_page_preface($page) {
    list ($prev,$cur,$next) = array(0,0,0);
    if (9 < $page) {
	$prev = sprintf("%d",-($page-1));
    }
    if ($page < 20) {
	$next = sprintf("%d",-($page+1));
    }
    $cur = sprintf("../jpg/whit-pref-%02d.jpg",$page);
    return array($cur,$prev,$next);
}
function key_from_page_index($page) {
   list ($prev,$cur,$next) = array(0,0,0);
   if (211 < $page) {
	$prev = sprintf("%d",($page-1));
   }
   if ($page < 250) {
	$next = sprintf("%d",($page+1));
   }
  $cur = sprintf("../jpg/whit-indx-%03d.jpg",$page);
   return array($cur,$prev,$next);
}

function genDisplayFile($text,$file) {
    $href = $file;
    $a = "<a class=\"nppage\" onclick=\"displaylink('" . $href . "');\"><span class='nppage1'>$text</span></a>";
    print "$a\n";
}

?>

