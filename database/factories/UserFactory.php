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
        //generowanie polskich imion i nazwisk dla tych samych płci dla imion i nazwisk
        $plec = fake()->randomElement(['male','female']);
        $imie = fake('pl_PL')->firstName($plec);
        $nazwisko = fake('pl_PL')->lastName($plec);
        $name = $imie.' '.$nazwisko;
        // 1. Tworzymy bazowy e-mail: małe litery i usunięte polskie znaki (ł -> l, ę -> e)
        $login = Str::lower(Str::ascii($imie)) . '.' . Str::lower(Str::ascii($nazwisko));
        $domena = fake('pl_PL')->freeEmailDomain();
        $pelnyEmail = $login . '@' . $domena;
        // 2. Wymuszamy unikalność na CAŁYM adresie e-mail
        // Jeśli taki mail już się istnieje, Faker doda unikalny numer przed znakiem @
        $unikalnyEmail = fake()->unique()->numerify($pelnyEmail);
    return [
            'name' => $name,
            'email' => $unikalnyEmail,
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('zaq1@WSX'),
            'remember_token' => Str::random(10),
        ];
    }
}
