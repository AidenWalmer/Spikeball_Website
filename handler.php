<?php
// ini_set('allow_url_fopen');

switch(@parse_url($_SERVER['REQUEST_URI'])['path']){
    case '/':
        require 'index.html';
        break;
    case '/index':
        require 'index.html';
        break;
    case '/index.html':
        require 'index.html';
        break;
    case '/qq-insert.php':
        require 'api/qq-insert.php';
        break;
    case '/qq-select.php':
        require 'api/qq-select.php';
        break;
    default:
        http_response_code(404);
}
?>
