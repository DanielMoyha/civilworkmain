<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Notification;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class AllAreasTest extends TestCase
{
    use RefreshDatabase;

    public User $director_general, $construction;
    public User $study;
    public User $supervision;

    public function setUp(): void
    {
        parent::setUp();
        $this->roles_and_permissions();
        $this->director_general = User::factory()->make();
        $this->director_general->assignRole('Director General');
        $this->construction = User::factory()->make();
        $this->construction->assignRole('Construcción');
        $this->study = User::factory()->make();
        $this->study->assignRole('Estudios');
        $this->supervision = User::factory()->make();
        $this->supervision->assignRole('Supervisión');
    }

    public function roles_and_permissions() : void
    {
        $directorGeneral = Role::create([
            'name' => 'Director General',
            'description' => 'Todos los privilegios'
        ]);
        $construction = Role::create([
            'name' => 'Construcción',
            'description' => 'Solo el área de construcción'
        ]);
        $study = Role::create([
            'name' => 'Estudios',
            'description' => 'Solo el área de estudios'
        ]);
        $supervision = Role::create([
            'name' => 'Supervisión',
            'description' => 'Solo el área de supervisión'
        ]);
        Permission::create(['name' => 'all.managerial', 'description' => 'Área Gerencial'])->syncRoles([$directorGeneral]);
        Permission::create(['name' => 'all.construction', 'description' => 'Área de Construcción'])->syncRoles([$construction]);
        Permission::create(['name' => 'all.study', 'description' => 'Área de Estudio'])->syncRoles([$study]);
        Permission::create(['name' => 'all.supervision', 'description' => 'Área de Supervisión'])->syncRoles([$supervision]);
    }

    /*** START FIRST ITERATION  */
    public function test_login_screen_can_be_rendered() : void
    {
        $response = $this->get('/');
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_email_verification_screen_can_be_rendered() : void
    {
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);
        $response = $this->actingAs($user)->get('/verify-email');
        $response->assertStatus(200);
    }

    public function test_email_can_be_verified() : void
    {
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);
        Event::fake();
        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1($user->email)]
        );
        $response = $this->actingAs($user)->get($verificationUrl);
        Event::assertDispatched(Verified::class);
        $this->assertTrue($user->fresh()->hasVerifiedEmail());
        $response->assertRedirect(RouteServiceProvider::HOME.'?verified=1');
    }

    public function test_email_is_not_verified_with_invalid_hash() : void
    {
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1('wrong-email')]
        );

        $this->actingAs($user)->get($verificationUrl);
        $this->assertFalse($user->fresh()->hasVerifiedEmail());
    }

    public function test_users_can_authenticate_using_the_login_screen_with_account_enabled() : void
    {
        $user = User::factory()->create([
            'is_active' => 1
        ]);

        $response = $this->post('/login', [
            'username' => $user->username,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    //account disabled
    public function test_users_can_not_authenticate_using_the_login_screen_with_account_disabled() : void
    {
        $user = User::factory()->create([
            'is_active' => 0
        ]);
        $response = $this->post('/login', [
            'username' => $user->username,
            'password' => 'password',
        ]);
        $response->assertStatus(302);
    }

    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $user = User::factory()->create();
        $this->post('/login', [
            'username' => $user->username,
            'password' => 'wrong-password',
        ]);
        $this->assertGuest();
    }

    public function test_reset_password_link_screen_can_be_rendered() : void
    {
        $response = $this->get('/forgot-password');
        $response->assertStatus(200);
    }

    public function test_reset_password_link_can_be_requested() : void
    {
        Notification::fake();
        $user = User::factory()->create([
            'is_active' => 1
        ]);
        $this->post('/forgot-password', ['email' => $user->email]);
        Notification::assertSentTo($user, ResetPassword::class);
    }

    public function test_reset_password_screen_can_be_rendered() : void
    {
        Notification::fake();
        $user = User::factory()->create([
            'is_active' => 1
        ]);
        $this->post('/forgot-password', ['email' => $user->email]);

        Notification::assertSentTo($user, ResetPassword::class, function ($notification) {
            $response = $this->get('/reset-password/'.$notification->token);
            $response->assertStatus(200);
            return true;
        });
    }

    public function test_password_can_be_reset_with_valid_token() : void
    {
        Notification::fake();
        $user = User::factory()->create([
            'is_active' => 1
        ]);
        $this->post('/forgot-password', ['email' => $user->email]);
        Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user) {
            $response = $this->post('/reset-password', [
                'token' => $notification->token,
                'email' => $user->email,
                'password' => 'password',
                'password_confirmation' => 'password',
            ]);
            $response->assertSessionHasNoErrors();
            return true;
        });
    }
    /*** END FIRST ITERATION  */

    /*** START SECOND ITERATION  */
    /*** not */
    /* public function test_email_verification_status_is_unchanged_when_the_email_address_is_unchanged()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->patch('/profile', [
                'name' => 'Test User',
                'email' => $user->email,
            ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');

        $this->assertNotNull($user->refresh()->email_verified_at);
    } */

    public function test_user_can_update_his_personal_data() : void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->patch('/profile',
            [
                'phone' => '77777777',
                'address' => 'new address updated',
            ]);

        $response->assertSessionHasNoErrors()->assertRedirect('/profile');
        $user->refresh();
        $this->assertSame('77777777', $user->phone);
        $this->assertSame('new address updated', $user->address);
    }

    public function test_password_can_be_updated() : void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->from('/profile')
            ->put('/password', [
                'current_password' => 'password',
                'password' => 'new-password',
                'password_confirmation' => 'new-password',
            ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');

        $this->assertTrue(Hash::check('new-password', $user->refresh()->password));
    }

    public function test_correct_password_must_be_provided_to_update_password() : void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->from('/profile')
            ->put('/password', [
                'current_password' => 'wrong-password',
                'password' => 'new-password',
                'password_confirmation' => 'new-password',
            ]);

        $response
            ->assertSessionHasErrorsIn('updatePassword', 'current_password')
            ->assertRedirect('/profile');
    }

    /*** END SECOND ITERATION  */
}
