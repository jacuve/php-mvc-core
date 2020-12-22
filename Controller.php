<?php

namespace jacuve\phpmvc;

use jacuve\phpmvc\middlewares\BaseMiddleware;

class Controller
{
    /**
     * @var \jacuve\phpmvc\middlewares\BaseMiddleware  []
     */
    protected array $middlewares = [];

    public string $layout = 'main';
    public string $action = '';
    public function render($view , $params= [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

}