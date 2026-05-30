<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $plec = fake()->randomElement(['male','female']);
        $imie = fake('pl_PL')->firstName($plec);
        $nazwisko = fake('pl_PL')->lastName($plec);
        $name = $imie.' '.$nazwisko;
        $login = Str::lower(Str::ascii($imie).'.'.Str::ascii($nazwisko));
        $pelnyEmail = $login.'@'.fake('pl_PL')->freeEmailDomain();
        $unikalnyEmail = fake()->unique()->numerify($pelnyEmail);
        return [
            //generowanie polskich imion i nazwisk dla tych samych płci dla imion i nazwisk
            
            'name' => $name,
            'email' => $unikalnyEmail,
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
