<?php

namespace Tests\Feature;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {   
        $response = $this->post('api/createNewEmployee', Employee::factory()->raw());
        $response->assertStatus(200);
    }
}
