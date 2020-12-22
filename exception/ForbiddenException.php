<?php

namespace app\core\exception;

class ForbiddenException extends \Exception
{

    protected $message = 'You don\'t have permission to this page';
    protected $code = 403;
}