<?php

namespace Tests\Unit;

use App\Http\Livewire\Materials;
use App\Models\Material;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ConstructionAreaTest extends TestCase
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
    public function test_graphical_reports_construction_screen_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $user->assignRole('Construcción');
        $response = $this->actingAs($user)->get(route('dashboard'));
        $response->assertStatus(200);
    }
    /*** END FOURTH ITERATION  */

    /*** START SECOND ITERATION  */
    public function test_list_construction_area_assignments_screen_can_be_rendered() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Construcción');
        $response = $this->actingAs($user)->get(route('construction.assignments'));
        $response->assertSessionHasNoErrors()->assertStatus(200);
    }
    /*** END SECOND ITERATION  */

    /*** START THIRD ITERATION  */
    public function test_list_materials_screen_can_be_rendered() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Construcción');
        $response = $this->actingAs($user)->get(route('construction.materials.list'));
        $response->assertSessionHasNoErrors()->assertStatus(200);
    }

    public function test_can_register_new_materials() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Construcción');
        Livewire::test(Materials::class)
            ->set('name', 'Nuevo material test')
            ->set('quantity', 25)
            ->set('remarks', 'Sin observaciones test')
            ->call('store')
            ->assertStatus(200);
    }
    /*** END THIRD ITERATION  */
}
