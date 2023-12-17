<?php

namespace Tests\Feature;

use App\Models\RecordOfEmployee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RecordOfEmployeeTest extends TestCase
{
    public function test_addNewOrder(): void
    {
        $response = $this->post('api/addNewOrder', RecordOfEmployee::factory()->raw());
        $response->assertStatus(200);
    }

    public function test_fullPayment(): void
    {
        $response = $this->post('api/fullPayment', RecordOfEmployee::factory()->raw());
        $response->assertStatus(200);
    }
}
