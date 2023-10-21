<?php

namespace ExpertFramework\Http\Contract;

/**
 * interface RouterInterface
 *
 * @package ExpertFramework\Http
 * @author jonas-elias
 */
interface RouterInterface
{
    /**
     * Method call static added
     *
     * @param string $name
     * @param mixed $args
     * @return void
     */
    public static function __callStatic(string $name, mixed $args): void;

    /**
     * Add a GET route
     *
     * @param string $route
     * @param string $handler
     * @return void
     */
    protected function get(string $route, string $handler): void;

    /**
     * Add a POST route
     *
     * @param string $route
     * @param string $handler
     * @return void
     */
    protected function post(string $route, string $handler): void;

    /**
     * Add a PUT route
     *
     * @param string $route
     * @param string $handler
     * @return void
     */
    protected function put(string $route, string $handler): void;

    /**
     * Add a DELETE route
     *
     * @param string $route
     * @param string $handler
     * @return void
     */
    protected function delete(string $route, string $handler): void;

    /**
     * Get all routes
     *
     * @return array
     */
    public function getAllRoutes() : array;
}
