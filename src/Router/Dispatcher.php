<?php

namespace ExpertFramework\Http\Router\Router;

use ExpertFramework\Http\Exception\MethodNotAllowedException;
use ExpertFramework\Http\Exception\NotFoundException;
use ExpertFramework\Http\Request;

/**
 * class Dispatcher
 *
 * @package ExpertFramework\Http
 * @author jonas-elias
 */
class Dispatcher
{
    /**
     * Method to dispatch handler
     */
    public function handle(Request $request, array $routes)
    {
        $method = $request->getMethod();
        $uri = $request->path();

        foreach ($routes as $pattern) {
            if ($pattern['route'] === $uri) {
                if ($pattern['method'] === $method) {
                    $pattern = explode('@', $pattern['handler']);
                    $controller = "Jonaselias\\ExpertFramework\\Controller\\".$pattern[0];
                    $method = $pattern[1];

                    return (new $controller())->$method();
                }

                throw new MethodNotAllowedException();
            }
        }

        throw new NotFoundException();
    }
}
