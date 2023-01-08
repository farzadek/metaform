<?php
$lang = detectLang();
$sendMessage = '';
require('locale/'. $lang . '.php');

function detectLang(){
    if(isset($_COOKIE['mfc_lng'])) {
        return $_COOKIE['mfc_lng'];
    }
    return 'fr';
}

if (isset($_POST['toggleLang'])) {
    $lang = $lang==='fr' ? 'en' : 'fr';
    setcookie('mfc_lng', $lang, time() + (86400 * 30), "/");
    include('locale/'. $lang . '.php');
}
?>