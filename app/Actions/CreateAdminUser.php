<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Str;

class CreateAdminUser
{
    public function __invoke()
    {
        User::updateOrCreate([
            'email' => 'deisi.bonilla@gmail.com',
        ], [
            'name' => 'Deisi Bonilla',
            'email_verified_at' => now()->subYear(),
//            'password' => '$2y$10$dAJ2kuwgIYE8yteX/jYlgOujx/lulYDFdOgeQzGWnsSGip8lLX2oe', // google
            'password' => '$2y$10$7UNiuVXq75MkkKbkbnIDL.pxdiVWZ6HtQ0nWgvknCMJSCi3fatiYi', // asddsa
            'remember_token' => Str::random(10),
        ]);
    }
}
