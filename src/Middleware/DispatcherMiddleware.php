<?php

declare(strict_types=1);

namespace ExpertFramework\Http\Middleware;

/**
 * class DispatcherMiddleware
 *
 * @package ExpertFramework\Http\Middleware
 * @author jonas-elias
 */
class DispatcherMiddleware
{
    /**
     * Method handle middleware
     *
     * @return void
     */
    public function handle(): void
    {
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Credentials: true');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) {
                header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
            }
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
                header("Access-Control-Allow-Headers: Accept, Content-Type,
                    Content-Length, Accept-Encoding, X-CSRF-Token, Authorization");
            }
            exit(0);
        }
    }
}
