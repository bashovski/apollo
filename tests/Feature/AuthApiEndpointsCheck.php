<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthApiEndpointsCheck extends TestCase
{

    private $endpoints = [
        'login' => ['/api/auth/login', 405],
        'register' => ['/api/auth/register', 405],
        'authorize' => ['/api/auth/user', 302],
        'logout' => ['/api/auth/logout', 302]
    ];
    public function testExample() {

        foreach($this->endpoints as $endpoint) {
            $response = $this->get($endpoint[0]);
            $response->assertStatus($endpoint[1]);
        }
    }
}
