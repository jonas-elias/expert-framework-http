<?php

namespace ExpertFramework\Http\Exception;

/**
 * class NotFoundException
 *
 * @package ExpertFramework\Http
 * @author jonas-elias
 */
class NotFoundException extends HttpException
{
    public function __construct($message = null, $code = 0)
    {
        parent::__construct(404, $message, $code);
    }
}
