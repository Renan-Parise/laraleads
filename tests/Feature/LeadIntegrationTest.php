<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LeadIntegrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_lead_can_be_created()
    {
        $leadData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'telephone' => '123456789',
        ];

        $response = $this->post(route('home.store'), $leadData);

        $response->assertRedirect(route('home.index'));
        $this->assertDatabaseHas('leads', $leadData);
    }

    public function test_lead_can_be_updated()
    {
        $lead = Lead::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'telephone' => '123456789',
        ]);

        $updatedData = [
            'name' => 'John Boe',
        ];

        $response = $this->put(route('home.update', $lead), $updatedData);

        $response->assertRedirect(route('home.index'));
        $this->assertDatabaseHas('leads', $updatedData);
    }

    public function test_lead_can_be_deleted()
    {
        $lead = Lead::create([
            'name' => 'Apague Isto',
            'email' => 'delete@example.com',
            'telephone' => '123456789',
        ]);

        $response = $this->delete(route('home.destroy', $lead));

        $response->assertRedirect(route('home.index'));
        $this->assertDatabaseMissing('leads', ['id' => $lead->id]);
    }
}
