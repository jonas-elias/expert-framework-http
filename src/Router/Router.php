<?php

declare(strict_types=1);

namespace ExpertFramework\Http\Router;

/**
 * class Router
 *
 * @package ExpertFramework\Http
 * @author jonas-elias
 */
class Router
{
    /**
     * @var object $instance
     */
    protected static object|null $instance = null;

    /**
     * Armazena todas as rotas registradas.
     *
     * @var array $routes
     */
    protected array $routes = [];

    /**
     * Add a get route
     *
     * @param string $route
     * @param string $handler
     *
     * @return void
     */
    public static function get(string $route, string $handler): void
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
    public static function post(string $route, string $handler): void
    {
        self::getInstance()->addRoute('POST', $route, $handler);
    }

    /**
     * Add a post put
     *
     * @param string $route
     * @param string $handler
     * @return void
     */
    public static function put(string $route, string $handler): void
    {
        self::getInstance()->addRoute('PUT', $route, $handler);
    }

    /**
     * Add a post delete
     *
     * @param string $route
     * @param string $handler
     * @return void
     */
    public static function delete(string $route, string $handler): void
    {
        self::getInstance()->addRoute('DELETE', $route, $handler);
    }

    /**
     * Method to get all routes class
     *
     * @return array
     */
    public static function getAllRoutes(): array
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
    protected function addRoute(string $method, string $route, string $handler): void
    {
        $this->routes[] = ['method' => $method, 'route' => $route, 'handler' => $handler];
    }

    /**
     * Get unique instance Router
     *
     * @return self
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
