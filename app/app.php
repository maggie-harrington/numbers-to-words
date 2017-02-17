<?php
    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/NumbersToWords.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app ['debug'] = true;

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post("/results", function() use ($app) {
        $newNumber = new NumbersToWords($_POST['input-number']);
        $newConversion = $newNumber->convertToWords($_POST['input-number']);
        return $app['twig']->render('results.html.twig', array('new_array' => $newConversion));
    });

    return $app;
?>
