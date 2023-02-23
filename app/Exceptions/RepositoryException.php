<?php

namespace App\Exceptions;

use App\Exceptions\BaseException;

class RepositoryException extends BaseException
{
    public static function invalidMethod()
    {
        return self::code('repository.invalid_model');
    }

    public static function invalidModel()
    {
        return self::code('repository.invalid_model');
    }
}
