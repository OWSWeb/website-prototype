<?php
        session_start();
        header('Cache-control: private'); // IE 6 FIX
        if(isSet($_GET['lang'])) {
            $lang = $_GET['lang'];
            // register the session and set the cookie
            $_SESSION['lang'] = $lang;
            setcookie("lang", $lang, time() + (3600 * 24 * 30));
        } else if(isSet($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        } else if(isSet($_COOKIE['lang'])) {
            $lang = $_COOKIE['lang'];
        } else {
            $lang = 'de_DE';
        }

        switch ($lang) {
              case 'en_UK':
              //English
              $lang_file = 'lang.en.php';
              break;
              case 'de_DE':
              //German
              $lang_file = 'lang.de.php';
              break;
              case 'ar_AR':
              //Spanish
              $lang_file = 'lang.ar.php';
              break;
              
              case 'hi':
              //Hindi
              $lang_file = 'lang.hi.php';
              break;
              
              case 'fr':
              //Franch
              $lang_file = 'lang.fr.php';
              break;
            // Default English
              default:
              $lang_file = 'lang.de.php';
        }
        include_once 'assets/language/'.$lang_file;
?>