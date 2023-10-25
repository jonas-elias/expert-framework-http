<?php

namespace ExpertFramework\Http;

/**
 * class ResponseEmmiter
 *
 * @package ExpertFramework\Http
 * @author jonas-elias
 */
class ResponseEmmiter
{
    /**
     * Method to send json echo
     *
     * @param Response $response
     * @return string
     */
    public function sendJson(Response $response): string
    {
        $this->sendHeaders($response->headers);
        $this->sendStatus($response->statusCode);

        echo $response->body;

        return $response->body;
    }

    /**
     * Method to send yaml echo
     *
     * @param Response $response
     * @return string
     */
    public function sendYaml(Response $response): string
    {
        $this->sendHeaders($response->headers);
        $this->sendStatus($response->statusCode);

        echo $response->body;

        return $response->body;
    }

    /**
     * Method to send headers request
     *
     * @param array $headers
     * @return void
     */
    private function sendHeaders(array $headers): void
    {
        foreach ($headers as $key => $header) {
            header("{$key} {$header}; charset=utf-8");
        }
    }

    /**
     * Method to send status header
     *
     * @param int $statusCode
     * @return void
     */
    private function sendStatus(int $statusCode): void
    {
        http_response_code($statusCode);
    }
}
