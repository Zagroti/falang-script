<?php

namespace App\Exceptions;

class ApiException extends \Exception
{

    const EXCEPTION_BAD_REQUEST_400 = 1;
    const EXCEPTION_UNAUTHORIZED_401 = 2;
    const EXCEPTION_PAYMENT_REQUIRED_402 = 3;
    const EXCEPTION_NOT_FOUND_404 = 4;
    const EXCEPTION_CONFLICT_409 = 5;
    const EXCEPTION_INTERNAL_500 = 0;

    /**
     * ApiException constructor.
     *
     * @param int $code
     * @param string $message
     * @param null $previous
     */
    public function __construct($code = 0, $message = null, $previous = null)
    {
        switch ($code) {
            case self::EXCEPTION_BAD_REQUEST_400:
                $message = (is_null($message)) ? 'The request could not be understood by the server due to malformed syntax' : $message;
                $code = 400;
                break;
            case self::EXCEPTION_UNAUTHORIZED_401:
                $message = (is_null($message)) ? 'The request requires user authentication.' : $message;
                $code = 401;
                break;
            case self::EXCEPTION_PAYMENT_REQUIRED_402:
                $message = (is_null($message)) ? 'to access this content, payment is required' : $message;
                $code = 402;
                break;
            case self::EXCEPTION_NOT_FOUND_404:
                $message = (is_null($message)) ? 'The server has not found anything matching the Request-URI. No indication is given of whether the condition is temporary or permanent.' : $message;
                $code = 404;
                break;
            case self::EXCEPTION_CONFLICT_409:
                $message = (is_null($message)) ? 'The request could not be completed due to a conflict with the current state of the resource' : $message;
                $code = 409;
                break;
            case self::EXCEPTION_INTERNAL_500:
            default:
                $message = (is_null($message)) ? 'The server encountered an unexpected condition which prevented it from fulfilling the request.' : $message;
                $code = 500;
                break;

        }
        parent::__construct($message, $code, $previous);
    }

}
