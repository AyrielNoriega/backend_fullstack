<?php

namespace Tests\Feature\Http\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Contact;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_contact()
    {


        $data = [
            'names' => 'Mr. Keagan Wiegand',
            'company' => 'Legros, Harris and Kunze',
            'phone_number' => '731.267.8901',
        ];

       $response = $this->postJson('/api/v1/contacts', $data);

        $response->assertStatus(201);
        // $response->assertHeader('content-type', 'application/json');
        $this->assertDatabaseHas('contacts', $data);
    }
}
