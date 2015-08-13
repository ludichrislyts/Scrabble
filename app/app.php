<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get("/score_results", function() use ($app){
        $scrabbler = new Scrabble;
        $scrabble_score = $scrabbler->getScore($_GET['word']);
        if (is_int($scrabble_score)){
            return $app['twig']->render('score_results.html.twig', array('score' => $scrabble_score));
        } else{
            return $app['twig']->render('score_results.html.twig', array('error_message' => $scrabble_score));    
        }
    });

    return $app;

 ?>
