<?php

declare(strict_types=1);

namespace Jonaselias\ExpertFramework\Lib;

use Jonaselias\ExpertFramework\Lib\Contract\RequestInterface;

/**
 * class Request
 *
 * @package ExpertFramework\Http
 * @author jonas-elias
 */
class Request
{
    /**
     * Method to get method request
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Method to get path request
     *
     * @return string
     */
    public function path(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    /**
     * Method to get query param by key
     *
     * @param string $key
     * @return string|null
     */
    public function query(string $key): string|null
    {
        return $_GET[$key] ?? null;
    }

    /**
     * Method to get body param by key
     *
     * @param string $key
     * @return string|null
     */
    public function body(string $key): string|null
    {
        return $_POST[$key] ?? null;
    }

    /**
     * Method to get header param by key
     *
     * @param string $key
     * @return string|null
     */
    public function header(string $key): string|null
    {
        return $_SERVER[$key] ?? null;
    }
}
