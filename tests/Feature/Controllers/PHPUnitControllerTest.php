<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PHPUnitControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample() {
        $this->assertTrue(true);
    }

    public function testStatus(){
		$response = $this->get('/test');
    	$response->assertStatus(200);
	}

	public function testExactJsonMatch(){
		$response = $this->json('POST', '/test', ['name' => 'Sally']);

		$response
			->assertStatus(201)
			->assertExactJson([
				'created' => true,
			]);
	}
}
