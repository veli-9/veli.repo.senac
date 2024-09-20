<?php

namespace app\controllers;

class ControllerHome extends Base
{
    public function home($request, $response)
    {
        $TempleteData = [
            'titulo' => 'Você esta no inicio'
        ];
        return $this->getTwig()
            ->render($response, $this->setView('pagina-inicial'), $TempleteData)
            ->withHeader('Content-Type', 'text/html')
            ->withStatus(200);
    }
}
