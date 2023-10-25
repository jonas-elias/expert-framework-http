<?php

declare(strict_types=1);

namespace ExpertFramework\Http\Exception;

/**
 * class HttpException.
 *
 * @author jonas-elias
 */
class HttpException extends \Exception
{
    /**
     * Method constructor.
     *
     * @param int    $statusCode
     * @param string $message
     * @param int    $code
     *
     * @return void
     */
    public function __construct(public int $statusCode, ?string $message = '', ?int $code = 0)
    {
        parent::__construct($message, $code);
    }

    /**
     * Method get status code.
     *
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
