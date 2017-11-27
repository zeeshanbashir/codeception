<?php

namespace Tajawal\Test;

use Tajawal\Codecept\User;

class UserTest extends \Codeception\Test\Unit
{
    /**
     * @var User
     */
    protected $user;

    protected function _before()
    {
        $this->user = new User();
    }

    /**
     * This test to check invalid password
     *
     * @return void
     */
    public function testInvalidLengthPassword()
    {
        $password = "23d3";
        $response = $this->user->isValidPassword($password);

        $this->assertFalse($response);
    }

    /**
     * This test to verify password is valid
     *
     * @return void
     */
    public function testValidLengthPassword()
    {
        $password = "accepted";

        $response = $this->user->isValidPassword($password);

        $this->assertTrue($response);
    }
}