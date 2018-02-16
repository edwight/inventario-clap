<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function loadUsersList()
    {
    	$this->get('/users')
    		->assertStatus(200)
    		->assertSee('usuarios');
        //$this->assertTrue(true);
    }
    public function loadUsersDetailsList(){
    	$this->get('/users/5')
    		->assertStatus(200)
    		->assertSee('usuarios/5');
    }
}
