<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app->register( new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"));

    $app->get("/",function() use ($app) {
        return $app['twig']->render('anagram.html.twig');
    });

    $app->get("/results", function() use ($app) {
        $anagram = new Anagram;

        return $app['twig']->render('match.html.twig', array('matches'=> $anagram->findAnagram($_POST['test_case'], explode(", " , $_POST['control_list']))));
    });

    return $app;
?>
