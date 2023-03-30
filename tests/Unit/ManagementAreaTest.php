<?php

namespace Tests\Unit;

use App\Http\Livewire\Services;
use App\Models\City;
use App\Models\State;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class ManagementAreaTest extends TestCase
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
    /*** START FIRST ITERATION  */
    public function test_list_users_screen_can_be_rendered()
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->get('/users');
        $response->assertSessionHasNoErrors()->assertStatus(200);
    }

    public function test_users_registration_screen_can_be_rendered() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->get('/users/create');
        $response->assertSessionHasNoErrors()->assertStatus(200);
    }

    public function test_general_manager_can_register_new_users() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $state = State::factory()->create();
        $city = City::factory()->create(['state_id' => $state->id]);

        $response = $this
            ->actingAs($user)
            ->from('/users/create')
            ->post('/users', [
                'id' => $user->id,
                'name' => 'Test User',
                'username' => 'testuser',
                'email' => 'test@example.com',
                'phone' => '77777777',
                'address' => 'test street',
                'city_id' => $city->id,
                'password' => 'password123',
            ]);
        $response->assertSessionHasNoErrors()->assertRedirect(route('admin.users.editRole', $user->id+1));
        $this->assertTrue(true);
    }

    public function test_list_roles_screen_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->get(route('admin.roles.index'));
        $response->assertStatus(200);
    }

    public function test_roles_registration_screen_can_be_rendered() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->get(route('admin.roles.create'));
        $response->assertSessionHasNoErrors()->assertStatus(200);
    }

    public function test_general_manager_can_register_new_roles() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)
                    ->from(route('admin.roles.create'))
                    ->post(route('admin.roles.store'), [
                        'name' => 'New Role',
                        'description' => 'Roles description'
                    ]);

        $response->assertSessionHasNoErrors()->assertRedirect(route('admin.roles.index'));
        $this->assertTrue(true);
    }
    /*** END FIRST ITERATION  */

    /*** START SECOND ITERATION  */
    public function test_list_civil_works_screen_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->get(route('admin.works.index'));
        $response->assertStatus(200);
    }

    public function test_civil_works_registration_screen_can_be_rendered() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->get(route('admin.works.create'));
        $response->assertSessionHasNoErrors()->assertStatus(200);
    }

    public function test_general_manager_can_export_list_civil_work_to_excel() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->post(route('admin.works.download.excel'));
        $response->assertSessionHasNoErrors()->assertStatus(200);
    }

    // public function test_general_manager_can_register_new_civil_works() : void
    // {
    //     $user = User::factory()->create();
    //     $user->assignRole('Director General');
    //     $state = State::factory()->create();
    //     $city = City::factory()->create(['state_id' => $state->id]);
    //     $response = $this->actingAs($user)
    //                 ->from(route('admin.works.create'))
    //                 ->post(route('admin.works.store'), [
    //                     'name' => 'Nueva Obra civil test',
    //                     'user_id' => $user->id,
    //                     'city_id' => $city->id,
    //                     'type_work_id' => 1,
    //                     'name_contractor' => 'Empresa contratante test',
    //                     'address_contractor' => 'dirección contratante test',
    //                     'work_duration' => '15',
    //                     'start_date' => '2022-09-01',
    //                     'completion_date' => '2023-01-01',
    //                     'value_approximate_services' => '12000',
    //                     'description' => 'Descripción de la obra',
    //                 ]);

    //     $response->assertSessionHasNoErrors()->assertRedirect(route('admin.works.index'));
    //     $this->assertTrue(true);
    // }

    public function test_list_services_screen_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->get(route('admin.services.index'));
        $response->assertStatus(200);
    }

    public function test_general_manager_can_register_new_services(): void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        Livewire::test(Services::class)->set('name', 'Servicio Test')->call('store')->assertStatus(200);
    }
    /*** END SECOND ITERATION  */

    /*** START FOURTH ITERATION  */
    public function test_dashboard_main_graphical_reports_screen_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->get(route('dashboard'));
        $response->assertStatus(200);
    }

    public function test_dashboard_works_graphical_reports_screen_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->get(route('dashboard.works'));
        $response->assertStatus(200);
    }

    /* public function test_general_manager_can_export_list_civil_work_to_excel() : void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->post(route('admin.works.download.excel'));
        $response->assertSessionHasNoErrors()->assertStatus(200);
    } */

    public function test_general_control_construction_area_screen_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->get(route('admin.construction.index'));
        $response->assertStatus(200);
    }

    public function test_general_control_studies_construction_area_screen_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->get(route('admin.study.index'));
        $response->assertStatus(200);
    }

    public function test_general_control_supervision_area_screen_can_be_rendered(): void
    {
        $user = User::factory()->create();
        $user->assignRole('Director General');
        $response = $this->actingAs($user)->get(route('admin.supervision.index'));
        $response->assertStatus(200);
    }
    /*** END FOURTH ITERATION  */
}
