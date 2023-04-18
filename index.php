<?php
// This file is whats references by default and routes everything else.

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
if ($uri == '/' or $uri == '/index') {
    require('views/index.php');
}
else if ($uri == '/about') {
    require('views/about.php');
}
else if ($uri == '/catalog') {
    require('views/catalog.php');
}
else if ($uri == '/references') {
    require('views/references.php');
}
else if ($uri == '/sources') {
    require('views/sources.php');
}
else if ($uri == '/music') {
    require('views/music.php');
}
else {
    http_response_code(404);
    echo "404 Page not found";
}