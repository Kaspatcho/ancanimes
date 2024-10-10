<?php

namespace App\Services\AnimesOnline\Exceptions;

/**
 * Exception for when an anime is not found
 */
class AnimeNotFound extends \Exception
{
    protected $message = "The anime you searched was not found";
}
