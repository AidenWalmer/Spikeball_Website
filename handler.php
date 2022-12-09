<?php
// ini_set('allow_url_fopen');

switch(@parse_url($_SERVER['REQUEST_URI'])['path']){
    case '/':
        require 'mainPage/index.php';
        break;
    case '/index':
        require 'mainPage/index.php';
        break;
    case '/index.html':
        require 'mainPage/index.php';
        break;
    case '/photoAPI.php':
        require 'mainPage/photoAPI.php';
        break;
    case '/membersPage/members.php':
        require 'membersPage/members.php';
        break; 
    case '/membersPage/search.php':
        require 'membersPage/search.php';
        break;
    case '/loginPage/login.php':
        require 'loginPage/login.php';
        break;
    case '/membersAdminPage/membersAdmin.php':
        require 'membersAdminPage/membersAdmin.php';
        break;
    case '/membersAdminPage/search.php':
        require 'membersAdminPage/search.php';
        break;
    case '/calender/calender.php':
        require 'calender/calender.php';
        break;
    default:
        http_response_code(404);
}
?>
