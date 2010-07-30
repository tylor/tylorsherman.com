<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="en-us" />
  <title>The LeBlade YouTube player</title>
  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2211282-2']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  </script>
</head>
<body>
<?php
$rss = new SimpleXMLElement('http://twitter.com/status/user_timeline/leblade.rss?count=5&page=' . ($_GET['page'] + 1), NULL, TRUE);
$result = $rss->xpath('//item');
foreach($result as $tweet) {
  $song = substr($tweet->description, 8, strpos($tweet->description, '(') - 8);
  $song = explode('-', $song);
  $artist = trim($song['0']); // Remove whitespace
  $title = trim($song['1']);
  $recompiled_song = $artist . ' - ' . $title;
  $video_rss = new SimpleXMLElement('http://gdata.youtube.com/feeds/base/videos?q=' . urlencode($recompiled_song) . '&max-results=1&amp;alt=rss&amp;v=2', NULL, TRUE);
  // Make sure there are actually results.
  if ($link = $video_rss->entry->link) {
    $attributes = $link->attributes();
    $youtube_v = substr($attributes['href'], 31, strpos($attributes['href'], '&') - 31);
    print '<div style="margin: 10px 5px; clear: both;">';
    print '<object style="float: left;" type="application/x-shockwave-flash" data="http://www.youtube.com/v/' . $youtube_v . '&amp;hl=en_US&amp;fs=1" width="250" height="100"><param name="movie" value="http://www.youtube.com/v/' . $youtube_v . '&amp;hl=en_US&amp;fs=1" /><param name="FlashVars" value="playerMode=embedded" /></object>';
    // height 212 is recommended by YouTube embedder.
    print '<div style="float: left">';
    print '<h2 style="font-family: Helvetica, Arial; margin: 0 0 0 10px; height: 35px;">' . $recompiled_song . '</h2>';
    print '<p style="margin: 0 0 0 10px; width: 500px">' . $tweet->description . ' <a style="" href="' . $tweet->link . '">#</a></p>';
    print '</div>';
    print '</div>';
  }
}
print '<p style="clear: both; margin-left: 5px; padding-top: 10px; font-family: Helvetica, Arial;"><a style="color: #000; text-decoration: none;" href="leblade.php?page=' . ($_GET['page'] + 1) . '">next &gt;</a></p>';
?>
</body>
</html>