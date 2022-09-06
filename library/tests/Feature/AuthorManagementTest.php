<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthorManagementTest extends TestCase
{
    /** @test */
    public function an_author_can_be_created()
    {
        $response = $this->post('/author',[
            'name' => 'Autor Name',
            'dob' => '05/14/1998'
        ]);

        $response->assertCount(1, Author::all());
    }
}
