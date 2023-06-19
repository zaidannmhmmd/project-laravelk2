<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usedata = [[
            'name' => 'Muhammad Zaidan Nibroos',
            'level' => '1',
            'email' => 'zaidannmhmmd@gmail.com',
            'password' => bcrypt('zai12345'),
            'remember_token' => Str::random(60),
            'dosen_id' => '1',
        ],
        [
            'name' => 'Syalika Ayu Wulandari',
            'level' => '1',
            'email' => 'syalikaaw27@gmail.com',
            'password' => bcrypt('sya12345'),
            'remember_token' => Str::random(60),
            'dosen_id' => '2',
        ],
        [
            'name' => 'Hardheana Eka Rahma',
            'level' => '1',
            'email' => 'hardheanaeka@gmail.com',
            'password' => bcrypt('dea12345'),
            'remember_token' => Str::random(60),
            'dosen_id' => '2',
        ]
        ];

        foreach($usedata as $key => $val) {
            User::create($val);
        }
    }
}
