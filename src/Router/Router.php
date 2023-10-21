<?php

namespace ExpertFramework\Http\Router;

use ExpertFramework\Http\Contract\RouterInterface;

/**
 * class Router
 *
 * @package ExpertFramework\Http
 * @author jonas-elias
 */
class Router
{
    /**
     * @var object|null $instance
     */
    protected static object|null $instance = null;

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
     * @param string $route
     * @param string $handler
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
     * @param string $route
     * @param string $handler
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
     * @param string $route
     * @param string $handler
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

    /**
     * Add list routes in array var
     *
     * @param string $method
     * @param string $route
     * @param string $handler
     * @return void
     */
    protected function addRoute(string $method, string $route, string $handler)
    {
        $this->routes[] = ['method' => $method, 'route' => $route, 'handler' => $handler];
    }

    /**
     * Get unique instance Router
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
