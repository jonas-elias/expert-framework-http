<?php

namespace Jonaselias\ExpertFramework\Lib\Router;

use Jonaselias\ExpertFramework\Lib\Exception\MethodNotAllowedException;
use Jonaselias\ExpertFramework\Lib\Exception\NotFoundException;
use Jonaselias\ExpertFramework\Lib\Request;

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

        var_dump($_GET);

        foreach ($routes as $pattern) {
            if ($pattern['route'] === $uri) {
                if ($pattern['method'] === $method) {

                    var_dump($routes);
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
