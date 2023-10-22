<?php

declare(strict_types=1);

namespace ExpertFramework\Http\Contract;

/**
 * interface ResponseInterface
 *
 * @package ExpertFramework\Http
 * @author jonas-elias
 */
interface ResponseInterface
{
    /**
     * Method to send json
     *
     * @param ?array $data
     * @param ?int statusCode
     * @return ResponseInterface
     */
    public function json(?array $data = [], ?int $statusCode = 200): ResponseInterface;

    /**
     * Method to send yaml
     *
     * @param ?string $data
     * @param ?int statusCode
     * @return ResponseInterface
     */
    public function yaml(?string $data = '', ?int $statusCode = 200): ResponseInterface;
}
