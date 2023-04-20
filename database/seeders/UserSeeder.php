<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder{
    public function run(){
        $data = [
            ['name' => 'Super Admin', 'phone' => '9879879870', 'email' => 'superadmin@mail.com', 'status' => 'active'],
            ['name' => 'Admin', 'phone' => '9879879871', 'email' => 'admin@mail.com', 'status' => 'active'],
            ['name' => 'Mitul Gajjar', 'phone' => '9879879872', 'email' => 'mitul@yopmail.com', 'status' => 'active'],
            ['name' => 'HardIk Patel', 'phone' => '9879879873', 'email' => 'hardik@yopmail.com', 'status' => 'active'],
            ['name' => 'Dhrumil Patel', 'phone' => '9879879874', 'email' => 'dhrumil@yopmail.com', 'status' => 'active'],
            ['name' => 'Sani Patel', 'phone' => '9879879875', 'email' => 'sani@yopmail.com', 'status' => 'active']
        ];

        foreach($data as $key => $val){
            $user = User::create([
                'name' => $val['name'],
                'phone' => $val['phone'],
                'email' => $val['email'],
                'password' => bcrypt('Admin@123'),
                'status' => $val['status'],
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => 1
            ]);
        }
    }
}
