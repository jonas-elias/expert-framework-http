<?php

namespace Jonaselias\ExpertFramework\Lib\Exception;

/**
 * class HttpException
 *
 * @package ExpertFramework\Http
 * @author jonas-elias
 */
class HttpException extends \Exception
{
    /**
     * Method constructor
     *
     * @param int $statusCode
     * @param null|string $message
     * @param int $code
     * @return void
     */
    public function __construct(public int $statusCode, $message = '', $code = 0)
    {
        parent::__construct($message, $code);
    }

    /**
     * Method get status code
     *
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
