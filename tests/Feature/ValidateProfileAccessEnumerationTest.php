<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class ValidateProfileAccessEnumerationTest extends TestCase
{
    /**
     * Test for validating inserted profile access type
     * if it matches declared enumeration keys.
     * @return void
     */
    public function testExample() {

        $this->assertTrue((new User)->isValidAccessType('everyone'));
        $this->assertTrue((new User)->isValidAccessType('onlyMe'));
        $this->assertTrue((new User)->isValidAccessType('onlyRegistered'));
        $this->assertTrue((new User)->isValidAccessType('onlyAgent'));

        $this->assertTrue((new User)->convertAccessToEnum('Everyone') === 'everyone');

        // Asserting random (10 characters long) string if it matches default enumeration value in case invalid one is inserted.
        $this->assertTrue((new User)->convertAccessToEnum(substr(uniqid('', true), -10)) === 'everyone');

    }
}
