<?php

namespace Jonaselias\ExpertFramework\Lib\Router;

use Jonaselias\ExpertFramework\Lib\Contract\RouterInterface;

/**
 * class Router
 *
 * @package ExpertFramework\Http
 * @author jonas-elias
 */
class Router
{
    /**
     * Armazena todas as rotas registradas.
     *
     * @var array
     */
    protected $routes = [];

    /**
     * Add a get route
     *
     * @param string $route
     * @param string $handler
     *
     * @return void
     */
    public static function get(string $route, string $handler)
    {
        self::getInstance()->addRoute('GET', $route, $handler);
    }

    /**
     * Add a post route
     *
     * @param string $route   O URI da rota.
     * @param string $handler O manipulador da rota.
     *
     * @return void
     */
    public static function post(string $route, string $handler)
    {
        self::getInstance()->addRoute('POST', $route, $handler);
    }

    /**
     * Add a post put
     *
     * @param string $route   O URI da rota.
     * @param string $handler O manipulador da rota.
     *
     * @return void
     */
    public static function put(string $route, string $handler)
    {
        self::getInstance()->addRoute('PUT', $route, $handler);
    }

    /**
     * Add a post delete
     *
     * @param string $route   O URI da rota.
     * @param string $handler O manipulador da rota.
     *
     * @return void
     */
    public static function delete(string $route, string $handler)
    {
        self::getInstance()->addRoute('DELETE', $route, $handler);
    }

    /**
     * Method to get all routes class
     *
     * @return array
     */
    public static function getAllRoutes()
    {
        return self::getInstance()->routes;
    }

    private static $instance;

    private function __construct()
    {
        // Inicialização do objeto Router (apenas uma vez)
    }

    /**
     * Adiciona uma rota à lista de rotas registradas.
     *
     * @param string $method  O método HTTP da rota.
     * @param string $route   O URI da rota.
     * @param string $handler O manipulador da rota.
     *
     * @return void
     */
    protected function addRoute(string $method, string $route, string $handler)
    {
        $this->routes[] = ['method' => $method, 'route' => $route, 'handler' => $handler];
    }

    /**
     * Obtém uma instância única do Router.
     *
     * @return self
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
