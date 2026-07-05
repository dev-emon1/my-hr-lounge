<?php

namespace App\Exceptions\Authentication;

use Exception;

class InvalidCredentialsException extends Exception
{
    protected $message = 'Invalid email or password.';
}