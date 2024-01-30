<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\LeadController;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LeadControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_method_without_login()
    {
        $controller = new LeadController();
        $view = $controller->index();

        $this->assertEquals('welcome', $view->name());
    }
}
