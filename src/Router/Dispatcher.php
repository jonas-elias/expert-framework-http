<?php

declare(strict_types=1);

namespace ExpertFramework\Http\Router;

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

        $listUri = explode('/', $uri);
        $id = is_numeric(end($listUri)) ? (int) end($listUri) : null;
        $uri = preg_replace('/\d+/', '{id}', $uri);

        foreach ($routes as $pattern) {
            if ($pattern['route'] === $uri) {
                if ($pattern['method'] === $method) {
                    $pattern = explode('@', $pattern['handler']);
                    $controller = "Jonaselias\\ExpertFramework\\Controller\\" . $pattern[0];
                    $method = $pattern[1];

                    return (new $controller())->$method($id ?? null);
                }

                $notAllowed = true;
            }
        }

        if (isset($notAllowed)) {
            throw new MethodNotAllowedException();
        }

        throw new NotFoundException();
    }
}
