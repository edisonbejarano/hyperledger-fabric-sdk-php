<?php
declare(strict_types=1);

namespace AmericanExpress\HyperledgerFabricClient\Exception;

class InvalidArgumentException extends \InvalidArgumentException implements ExceptionInterface
{
    /**
     * @param \Exception $exception
     * @return InvalidArgumentException
     */
    public static function fromException(\Exception $exception)
    {
        return new self($exception->getMessage(), $exception->getCode(), $exception);
    }
}
