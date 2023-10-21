<?php

namespace ExpertFramework\Http\Exception;

/**
 * class MethodNotAllowedException
 *
 * @package ExpertFramework\Http
 * @author jonas-elias
 */
class MethodNotAllowedException extends HttpException
{
    public function __construct($message = null, $code = 0)
    {
        parent::__construct(405, $message, $code);
    }
}
