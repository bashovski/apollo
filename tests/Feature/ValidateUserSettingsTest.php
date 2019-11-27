<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ValidateUserSettingsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {

        $testFunc =User::validateUserSettings([
            'email' => '',
            'password' => '',
            'location' => '',
            'language' => '',
            'dateOfBirth' => '',
            'accessProfilePermission' => '',
            'postalCode' => ''
        ]);
        $this->assertEquals($testFunc['errors'] , false);
    }
}
