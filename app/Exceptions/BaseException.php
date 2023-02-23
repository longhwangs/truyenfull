<?php

namespace App\Exceptions;

use Exception;

class BaseException extends Exception
{
    protected $statusCode = 400;

    protected $message = null;

    public function getMessageCode()
    {
        return $this->message;
    }

    public function setMessageCode(string $message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Create new exception instance with code
     *
     * @return self
     */
    public static function code($message, $args = [], $statusCode = 400)
    {
        return (new statis(__('message.' . $message, $args), $statusCode))->setMessageCode($message);
    }
}