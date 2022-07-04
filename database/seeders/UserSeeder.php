<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'idpegawai'=>'02345431',
                'name' => 'Admin Kimka',
                'level' => 'admin',
                'phone_number'=>'0812314242',
                'gender'=>'1',
                'email' => 'admin@admin.com',
                'address'=>'Jl. Raya Apel no. 256, Pulau NTT',
                'password' => bcrypt('admkimka'),
                'remember_token' => Str::random(60),

            ],
            [
                'idpegawai'=>'02345432',
                'name'=> 'Admin Amelia',
                'level' => 'admin',
                'phone_number'=>'0812314241',
                'gender'=>'1',
                'email'=>'admamel@admin.com',
                'address'=>'Jl. Raya Lavender no. 256, Pulau NTT',
                'password'=> bcrypt('admamel'),
                'remember_token' => Str::random(60),
                
            ],
            [
                'idpegawai'=> null,
                'name' => 'Imamel',
                'level' =>'customer',
                'phone_number'=>'0812314223',
                'gender'=>'1',
                'email' => 'imamel@gmail.com',
                'address'=>'Jl. Raya Puri no. 256, Pulau NTT',
                'password' => bcrypt('imamel'),
                'remember_token' => Str::random(60),
            ],
        ];

        DB::table('users')->insert($user);
    }
}
