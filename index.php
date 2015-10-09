<?php

//require_once 'models/timezone.php';
include 'models/functions.php';
// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Maak de database connectie
require_once 'includes/database.php' ;

// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;

// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'Aero News');
// Toon de template: output html
$templateParser->display('head.tpl');

$page = (empty($_GET['page'])) ? '' : $_GET['page'];
$templateParser->assign('curr_page', $page);

$templateParser->display('header.tpl');

// Haal de nieuws artikelen op

// Toon de nieuwsberichten. Oude stijl:
// Bouw dit om naar een template systeem
//include 'views/newsarticles.php' ;





switch ($page){
    default:
        //Lees page nr uit
        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;
        require 'models/select_newsarticles.php';
        $templateParser->assign('data', $result);
        $templateParser->display('newsarticles.tpl');
        require "models/search.php";
        break;
    case 'news':
        break;

    case 'search':
        //Lees searchfield uit
        $searchString = isset($_POST['searchString']) ? $_POST['searchString'] : "";
        //Searh database for search(model)
        require 'models/search_articles.php';
        $templateParser->assign('result', $search_result);
        $templateParser->display('search_result.tpl');
        break;
    case 'about':
        $templateParser->display('about.tpl');
        break;
    case 'contact':
        $templateParser->display('contact.tpl');
        break;
    case 'tourdates':
//        $templateParser->assign();
        $templateParser->display('tourdates.tpl');
        break;
}


$templateParser->display('footer.tpl');

