<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->data();

        foreach ($data as $value) {
            User::create([
            'first_name'        =>'ameer',
            'last_name'         =>'ameer',
            'email'             => $value['name'] . '@demo.com',
            'password'          => Hash::make('demo'),
            'email_verified_at' => now(),
        ]);

        }
    }

    public function data()
    {
        return [
            ['name' => 'admin'],
            ['name' => 'editor'],
        ];
    }
}
