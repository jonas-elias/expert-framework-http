<?php

declare(strict_types=1);

namespace ExpertFramework\Http\Exception;

/**
 * class NotFoundException
 *
 * @package ExpertFramework\Http
 * @author jonas-elias
 */
class NotFoundException extends HttpException
{
    public function __construct($message = '', $code = 0)
    {
        parent::__construct(404, $message, $code);
    }
}
