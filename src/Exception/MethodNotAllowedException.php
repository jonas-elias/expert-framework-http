<?php

declare(strict_types=1);

namespace ExpertFramework\Http\Exception;

/**
 * class MethodNotAllowedException.
 *
 * @author jonas-elias
 */
class MethodNotAllowedException extends HttpException
{
    /**
     * Method constructor.
     *
     * @param ?string $message
     * @param ?int    $code
     *
     * @return void
     */
    public function __construct(?string $message = '', ?int $code = 0)
    {
        parent::__construct(405, $message, $code);
    }
}
