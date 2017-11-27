<?php

namespace Tajawal\Codecept;

/**
 * Class User
 *
 * @package Tajawal\Codecept
 */
class User
{
    // minimum password length
    const MIN_PASSWORD_LENGTH = 5;

    /**
     * @param string $password
     *
     * @return bool
     */
    public function isValidPassword(string $password): bool
    {
        if (strlen($password) < static::MIN_PASSWORD_LENGTH) {
            return false;
        }

        return true;
    }
}

