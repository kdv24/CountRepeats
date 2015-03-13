<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application;
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path'=>__DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->post('/result', function() use ($app) {
        $input_array = new RepeatCounter;
        $new_input_array = $input_array->countRepeats($_POST['word-entered'], $_POST['sentence_entered']);
        return $app['twig']->render('result.twig', array(input_array => $new_input_array)); 
    });

    return $app;

?>
