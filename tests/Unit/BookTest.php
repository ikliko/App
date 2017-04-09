<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BookTest extends TestCase {
    /**
     * testListingAllBooks.
     *
     * @return void
     */
    public function testListingAllBooks() {
        $data = [];

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImRhN2Y0Nzk3N2U1YWM1NDdjYTEyMWRkMTFiNzk4NDExODJjMzM2NTNkOWUwMjllM2FmODAyZmU0ZDBjYmNkNTBlODY0ZmZlNjIxMDA2NzJhIn0.eyJhdWQiOiIzIiwianRpIjoiZGE3ZjQ3OTc3ZTVhYzU0N2NhMTIxZGQxMWI3OTg0MTE4MmMzMzY1M2Q5ZTAyOWUzYWY4MDJmZTRkMGNiY2Q1MGU4NjRmZmU2MjEwMDY3MmEiLCJpYXQiOjE0OTE3NzM2NDUsIm5iZiI6MTQ5MTc3MzY0NSwiZXhwIjoxNTIzMzA5NjQ1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.bTf4USehp2yumzTr-_OJQS7INgCSfJoJSnhUHPi9qGCWc1gI6s1bQYuySxxyZOL54cMcpx6oxS0GHgBSMiX4haNgHOy8YIy6AGy3gp7jDhys074MNsu4pufie7gBP4Jmka_aIIcofT3PjLmVFuP-etKm26WBP_K_i3arpRCzlc7MJl_mG1XY7_eIKtJ_EGryeoE0upJ7_tRsG07xRoNiv7_ojX9JC7SwUoEDR1bWSIitzvM1-FHdkSsIYlMqD061JhPjKFnR6FEEyvHu_O_7PtTh5MtCB8fk6PJRzzUFBWILgyVBcBVFs5fmHn7yw11CvYebyeUt8M5B1BKvpY36fBl3mvFOZipINyiUB950kt64CBsHO5AMIaodPibpIT33BPTeZFa9JdmxYN-Q6nOLJYBB0kq8zSpXtVvzO7cvzUE3pRNtIiFi4PpwCGwl8xY_x1fma15GMxn75l0mtkZZZ_OnaVQmQPOv3VkuGnA75W4HmrIbVUiVA-q5g6PYfRozvsCWIqTl0z0gs5to6LTuVxwQ9xiNR07DXZGmp_E_HbiS_hqUoYHz81o9OvaRNHeQHi3fKfMmF9zYFZZDorq2Ogc4QhTBEL3pXhalgNBmXRulBxfdIAqBkFNVWoKF1j543FYmj7CPkQ4762A50xHDUGK-smAtS9T0_QH7ZkG6qa8'
        ];

        $response = $this->json('get', $this->getBaseUrl(), $data, $headers);

        $response->assertStatus(config('httpStatus.success'));
    }

    protected function getBaseUrl() {
        return config('app.url') . '/api/books/';
    }
}
