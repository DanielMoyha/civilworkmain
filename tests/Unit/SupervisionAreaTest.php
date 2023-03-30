<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class SupervisionAreaTest extends TestCase
{
    use RefreshDatabase;
    public User $director_general, $construction, $study, $supervision;

    public function setUp(): void
    {
        parent::setUp();
        $this->roles_and_permissions();
        $this->director_general = User::factory()->create();
        $this->director_general->assignRole('Director General');
        $this->construction = User::factory()->create();
        $this->construction->assignRole('Construcción');
        $this->study = User::factory()->create();
        $this->study->assignRole('Estudios');
        $this->supervision = User::factory()->create();
        $this->supervision->assignRole('Supervisión');
    }

    public function roles_and_permissions() : void
    {
        $directorGeneral = Role::firstOrCreate([
            'name' => 'Director General',
            'description' => 'Todos los privilegios'
        ]);
        $construction = Role::firstOrCreate([
            'name' => 'Construcción',
            'description' => 'Solo el área de construcción'
        ]);
        $study = Role::firstOrCreate([
            'name' => 'Estudios',
            'description' => 'Solo el área de estudios'
        ]);
        $supervision = Role::firstOrCreate([
            'name' => 'Supervisión',
            'description' => 'Solo el área de supervisión'
        ]);
        Permission::firstOrCreate(['name' => 'all.managerial', 'description' => 'Área Gerencial'])->syncRoles([$directorGeneral]);
        Permission::firstOrCreate(['name' => 'all.construction', 'description' => 'Área de Construcción'])->syncRoles([$construction]);
        Permission::firstOrCreate(['name' => 'all.study', 'description' => 'Área de Estudio'])->syncRoles([$study]);
        Permission::firstOrCreate(['name' => 'all.supervision', 'description' => 'Área de Supervisión'])->syncRoles([$supervision]);
    }

    /*** START FOURTH ITERATION  */
    public function test_graphical_reports_supervision_screen_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $user->assignRole('Supervisión');
        $response = $this->actingAs($user)->get(route('dashboard'));
        $response->assertStatus(200);
    }
    /*** END FOURTH ITERATION  */

    /*** START SECOND ITERATION  */
    public function test_list_supervision_area_assignments_screen_can_be_rendered() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Supervisión');
        $response = $this->actingAs($user)->get(route('supervision.assignments'));
        $response->assertSessionHasNoErrors()->assertStatus(200);
    }
    /*** END SECOND ITERATION  */

    /*** START THIRD ITERATION  */
    public function test_list_follow_ups_screen_can_be_rendered() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Supervisión');
        $response = $this->actingAs($user)->get(route('supervision.followups'));
        $response->assertSessionHasNoErrors()->assertStatus(200);
    }

    public function test_list_task_supervision_screen_can_be_rendered()
    {
        $user = User::factory()->create();
        $user->assignRole('Supervisión');
        $response = $this->actingAs($user)->get(route('supervision.tasks'));
        $response->assertSessionHasNoErrors()->assertStatus(200);
    }
    /*** END THIRD ITERATION  */
}
