<?php

declare(strict_types=1);

namespace ExpertFramework\Http\Contract;

/**
 * interface RequestInterface.
 *
 * @author jonas-lias
 */
interface RequestInterface
{
    /**
     * Method to get method request.
     *
     * @return string
     */
    public function getMethod(): string;

    /**
     * Method to get path request.
     *
     * @return string
     */
    public function path(): string;

    /**
     * Method to get query param by key.
     *
     * @param string $key
     *
     * @return string|null
     */
    public function query(string $key): string|null;

    /**
     * Method to get body param by key.
     *
     * @return array|null
     */
    public function body(): array|null;

    /**
     * Method to get header param by key.
     *
     * @param string $key
     *
     * @return string|null
     */
    public function header(string $key): string|null;
}
