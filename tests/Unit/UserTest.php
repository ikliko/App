<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase {

    /**
     * Login with authorization header
     *
     * @return void
     */
    public function testMustReturnTokensWithAuthorizationHeader() {
        $data = [
            'grant_type' => 'password',
            'password' => 'secret',
            'username' => 'bauch.samir@example.net',
        ];

        $headers = [
            'Authorization' => 'Basic MzpadGVWNVVXRGo3elh5SGNMT0RUdExtWXVuaWZ0b1d4eUI3QVFCZEZS'
        ];

        $response = $this->json('post', $this->getBaseUrl(), $data, $headers);

        $response->assertJson([
            'token_type' => 'Bearer'
        ]);

        $response->assertStatus(config('httpStatus.success'));
    }

    protected function getBaseUrl() {
        return config('app.url') . '/oauth/token';
    }

    public function testAuthorizationWithoutHeaders() {
        $data = [
            'client_id' => 3,
            'secret' => 'ZteV5UWDj7zXyHcLODTtLmYuniftoWxyB7AQBdFR',
            'grant_type' => 'password',
            'password' => 'secret',
            'username' => 'bauch.samir@example.net',
        ];

        $headers = [];

        $response = $this->json('post', $this->getBaseUrl(), $data, $headers);

        $response->assertJson([
            'token_type' => 'Bearer'
        ]);

        $response->assertStatus(config('httpStatus.success'));
    }
}
