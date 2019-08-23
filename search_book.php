<?php 
 $inp = $_POST["search"];

$url = 'https://www.goodreads.com/search.xml?key=rHxqJqCCMLYijFXlpPiuA&q='.$inp;
  $xml = simplexml_load_file($url) or die("feed not loading");
  
  
   $count=(int)$xml->search->{'total-results'};
   
 $url='https://www.goodreads.com/api/author_url/Orson%20Scott%20Card?key=rHxqJqCCMLYijFXlpPiuA';
 $aut_xml=simplexml_load_file($url) or die("feed not loading");
 $aut_link=$aut_xml->author->{'link'};
if ($count<=0) {
    echo "No Results";
}
else{
	echo "<h3 class=\"searchSubNavContainer\"></h3><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" class=\"tableList\">
      <tbody>";
  for($i=0;$i<20;$i++){
  $rate=$xml->search->results->work[$i]->best_book;
  $aut=$rate->author->name;
  $tit=$rate->title;
  $img=$rate->image_url;
  $tiny=$rate->small_img_url;
  
  echo "
  <tr><td width=\"5%\" valign=\"top\"><div id=\"12893680\" class=\"u-anchorTarget\"></div><a href=\"index.html\"><img src=$img alt=$tiny></a></td>
			
			
     <td>$tit <br>
        <span class=\"by\">by</span>
			
	<a href=$aut_link>$aut</a></td></tr>";
	
	
			
		
  
  
  }
echo "</tbody>
	</table>";  
}
?>
