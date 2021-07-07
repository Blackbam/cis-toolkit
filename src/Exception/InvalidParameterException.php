<?php

namespace CisTools\Exception;

use CisTools\Attribute\Author;
use CisTools\Attribute\ClassInfo;
use Exception;
use JetBrains\PhpStorm\Pure;

/**
 * Class InvalidParameterException
 * @package CisTools\Exception
 */
#[ClassInfo(summary: "For issues with invalid parameters", description: "Often thrown in constructors of classes which can not be used without valid constructor parameters")]
#[Author(name: "David Stöckl", url: "https://www.blackbam.at")]
class InvalidParameterException extends Exception
{

    /**
     * NonSanitizeableException constructor.
     * @inheritdoc
     */
    #[Pure]
    public function __construct(
        $message,
        $code = 0,
        Exception $previous = null
    ) {
        $message = "Invalid parmeter: " . $message;
        parent::__construct($message, $code, $previous);
    }

    public function __toString(): string
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
