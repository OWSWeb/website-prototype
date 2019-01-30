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
            $lang = 'de';
        }

        switch ($lang) {

              case 'en':
              //Englisch
              $lang_file = 'lang.en.php';
              break;

              case 'de':
              //Deutsch
              $lang_file = 'lang.de.php';
              break;

              case 'ar':
              //Arabisch
              $lang_file = 'lang.ar.php';
              break;

              case 'ru':
              //Russisch
              $lang_file = 'lang.ru.php';
              break;

              case 'pl':
              //Polnisch
              $lang_file = 'lang.pl.php';
              break;

            // Default Deutsch
              default:
              $lang_file = 'lang.de.php';
        }
        include_once 'assets/language/'.$lang_file;
?>