<?php
// we can specify a localy version or a remote xml as in example
$xml = simplexml_load_file("http://distrowatch.com/news/podcast.xml");
// if I use a local file saved in /tmp directory: $xml = simplexml_load_file("/tmp/podcast.xml");
 
// now make a XPath selection: select all <item> tag.
$items = $xml->xpath("/rss/channel/item");
 
// Now, $items contains a class version of a <item> tag.
// So, if I'd like to print only the title of news item:
foreach($items as $item){
   echo $item->title.'\n';
}
?>
