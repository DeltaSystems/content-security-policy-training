<?php

// On prod, most code is tucked into zend outside the doc root
if (file_exists(__DIR__ . '/../zend/')) {
    define('APPLICATION_PATH', realpath(__DIR__ . '/../zend/'));
} else {
    define('APPLICATION_PATH', realpath(__DIR__ . '/../'));
}

require_once APPLICATION_PATH . '/vendor/autoload.php';

use App\ExamplePage;
use App\Home;
use Dewdrop\Paths;
use Dewdrop\Pimple;
use Symfony\Component\HttpFoundation\Request;

/* @var $silex \Silex\Application */
$silex = Pimple::getInstance();

$silex->get(
    '/',
    function () {
        $home = new Home();
        return $home->respond();
    }
);

$silex->get(
    '/no-csp',
    function () {
        $page = new ExamplePage();
        return $page->respond();
    }
);

$silex->get(
    '/basic-csp',
    function () {
        $page = new ExamplePage();
        $page->setCspHeader("script-src 'self'");
        return $page->respond();
    }
);

$silex->get(
    '/including-some-external-resources',
    function () {
        $page = new ExamplePage();
        $page->setCspHeader("script-src 'self' https://code.jquery.com");
        return $page->respond();
    }
);

$silex->get(
    '/with-nonce-for-inline-resource',
    function () {
        $page = new ExamplePage();
        $page->setCspHeader("script-src 'self' https://code.jquery.com 'nonce-5415f15a14cb3901'");
        return $page->respond();
    }
);

$silex->get(
    '/inline-script-tags-for-data',
    function () {
        $page = new ExamplePage();
        $page
            ->setCspHeader("script-src 'self' https://code.jquery.com 'nonce-5415f15a14cb3901'")
            ->setIncludeInlineData(true);
        return $page->respond();
    }
);

$silex->get(
    '/with-reporting',
    function () {
        $page = new ExamplePage();
        $page
            ->setCspHeader("script-src 'self' https://code.jquery.com 'nonce-5415f15a14cb3901'; report-uri /report-csp-violation")
            ->setIncludeInlineData(true);
        return $page->respond();
    }
);

$silex->post(
    '/report-csp-violation',
    function (Request $request) {
        file_put_contents(
            (new Paths)->getAppRoot() . '/csp-violations.log',
            $request->getContent() . PHP_EOL,
            LOCK_EX | FILE_APPEND
        );

        exit;
    }
);

Pimple::getResource('admin')->registerComponentsInPath();

$silex->run();
