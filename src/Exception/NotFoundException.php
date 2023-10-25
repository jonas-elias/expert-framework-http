<?php

declare(strict_types=1);

namespace ExpertFramework\Http\Exception;

/**
 * class NotFoundException.
 *
 * @author jonas-elias
 */
class NotFoundException extends HttpException
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
        parent::__construct(404, $message, $code);
    }
}
