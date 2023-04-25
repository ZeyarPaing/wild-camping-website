<?php
require_once '../utils.php';
//confirm_logout();

run_js("
var confirmLogout = confirm('Are you sure you want to logout?');
if(confirmLogout){
    window.location.href = 'confirm.php';
}else{
    window.history.back();
}
");
