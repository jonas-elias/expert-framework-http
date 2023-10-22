<?php

declare(strict_types=1);

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
     * Add a get route
     *
     * @param string $route
     * @param string $handler
     * @return void
     */
    public static function get(string $route, string $handler): void;

    /**
     * Add a post route
     *
     * @param string $route
     * @param string $handler
     * @return void
     */
    public static function post(string $route, string $handler): void;

    /**
     * Add a post put
     *
     * @param string $route
     * @param string $handler
     * @return void
     */
    public static function put(string $route, string $handler): void;

    /**
     * Add a post delete
     *
     * @param string $route
     * @param string $handler
     * @return void
     */
    public static function delete(string $route, string $handler): void;

    /**
     * Method to get all routes class
     *
     * @return array
     */
    public static function getAllRoutes(): array;

    /**
     * Get unique instance Router
     *
     * @return self
     */
    public static function getInstance(): self;
}
