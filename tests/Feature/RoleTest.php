<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RoleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testCanShowRolePage()
    {
        $user = User::role('admin')->get()->random();
        $this->actingAs($user);
        $this->get('/roles')
        ->assertOk();
    }

    public function testCannotShowRolePage()
    {
        $user = User::role('petugas')->get()->random();
        $this->actingAs($user)
        ->get('/roles')
        ->assertStatus(403);
    }

    public function testCannotShowRoleNotLogin()
    {
        $this->get('roles')
        ->assertRedirect('login')
        ->assertStatus(302);
    }

    public function testCanCreateRole()
    {
        $user = User::role('admin')->get()->random();
        $this->actingAs($user);
        $this->get('/roles/create')
        ->assertOk();
    }

    public function testCannotCreateRole()
    {
        $user = User::role('petugas')->get()->random();
        $this->actingAs($user)
        ->get('/roles')
        ->assertStatus(403);
    }

    public function testCannotCreateRoleNotLogin()
    {
        $this->get('roles/create')
        ->assertRedirect('login')
        ->assertStatus(302);
    }
}
