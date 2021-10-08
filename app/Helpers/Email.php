<?php
declare(strict_types=1);

namespace App\Helpers;

final class Email
{

    public static function validate ($email)
    {
      return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
