<?php

namespace Tests\Unit;

use App\Http\Livewire\TypesStudiesExtra;
use App\Models\Study;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class StudiesAreaTest extends TestCase
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
    public function test_graphical_reports_studies_screen_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $user->assignRole('Estudios');
        $response = $this->actingAs($user)->get(route('dashboard'));
        $response->assertStatus(200);
    }
    /*** END FOURTH ITERATION  */

    /*** START SECOND ITERATION  */
    public function test_list_studies_area_assignments_screen_can_be_rendered() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Estudios');
        $response = $this->actingAs($user)->get(route('study.assignments'));
        $response->assertSessionHasNoErrors()->assertStatus(200);
    }
    /*** END SECOND ITERATION  */

    /*** no */
    /* public function test_can_see_details_assignments() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Estudios');
        $study = Study::factory()->create();
        $response = $this->actingAs($user)->get(route('study.assignments.show', $study));
        $response->assertSessionHasNoErrors()->assertStatus(200);
    } */

    /*** START THIRD ITERATION  */
    public function test_list_studies_screen_can_be_rendered() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Estudios');
        $response = $this->actingAs($user)->get(route('study.type.studies'));
        $response->assertSessionHasNoErrors()->assertStatus(200);
    }

    public function test_can_register_new_type_studies() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Estudios');
        Livewire::test(TypesStudiesExtra::class)
            ->set('name', 'Nuevo estudio extra test')
            ->set('description', 'alguna descripción')
            ->call('store')
            ->assertStatus(200);
    }
    /*** END THIRD ITERATION  */

    /* public function test_list_documents_screen_can_be_rendered()
    {
        $user = User::factory()->create();
        $user->assignRole('Estudios');
        $response = $this->actingAs($user)->get(route('study.studies.documents'));
        $response->assertSessionHasNoErrors()->assertStatus(200);
    } */
}
