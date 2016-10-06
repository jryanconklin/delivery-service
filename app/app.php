<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__."/../inc/Connection.php";
    require_once __DIR__.'/../src/Address.php';
    require_once __DIR__."/../src/Rider.php";
    require_once __DIR__."/../src/Service.php";
    require_once __DIR__."/../src/Vendor.php";

//Setup
    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

//Home Path
    $app->get("/", function() use ($app) {
        $vendors = Vendor::getAll();
        $client = Client::find(1);
        return $app['twig']->render('index.html.twig', array ('vendors' => $vendors));
    });

    $app->get("/order/{vendor_name}/{client_id}", function($vendor_name, $client_id) use ($app){

        $client = Client::find($client_id);
        $vendor = Vendor::findByName($vendor_name);
        return $app['twig']->render("order_vendor_client.html.twig", array('client' => $client, 'vendor' => $vendor ));
    });


//End App
    return $app;
?>
