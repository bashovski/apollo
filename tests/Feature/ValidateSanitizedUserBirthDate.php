<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class ValidateSanitizedUserBirthDate extends TestCase
{
    /**
     * Test for validating sanitized user birth data input.
     *
     * @return void
     */
    public function testExample() {

        $this->assertTrue((new User)->sanitizeDate('99-99-9999')['success'] === false);
        $this->assertTrue((new User)->sanitizeDate('12-12-1999')['success']);
        $this->assertTrue((new User)->sanitizeDate('31-2-1991')['success'] === false);
        $this->assertTrue((new User)->sanitizeDate('29-19-1')['success'] === false);
    }
}
