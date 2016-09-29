<?php

namespace App;

use Dewdrop\View\View;
use Symfony\Component\HttpFoundation\Response;

class ExamplePage
{
    const INCLUDE_CSP = true;

    const OMIT_CSP = false;

    /**
     * @var UserData
     */
    private $userData;

    /**
     * @var string
     */
    private $cspHeader;

    /**
     * @var bool
     */
    private $includeInlineData = false;

    public function __construct(UserData $userData = null)
    {
        $this->userData = ($userData ?: new UserData());
    }

    public function setCspHeader($cspHeader)
    {
        $this->cspHeader = $cspHeader;

        return $this;
    }

    public function setIncludeInlineData($includeInlineData)
    {
        $this->includeInlineData = $includeInlineData;

        return $this;
    }

    public function respond()
    {
        $response = new Response();

        if ($this->cspHeader) {
            $response->headers->set('Content-Security-Policy', $this->cspHeader);
        }

        $view = new View();
        $view
            ->setScriptPath(__DIR__ . '/view-scripts')
            ->registerHelper('jsondata', '\App\View\Helper\JsonData')
            ->assign('cspHeader', $this->cspHeader)
            ->assign('userData', $this->userData->fetchAll())
            ->assign('includeInlineData', $this->includeInlineData);
        $response->setContent($view->render('example-page.phtml'));

        return $response;
    }
}
