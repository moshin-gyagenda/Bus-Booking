<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('users')->insert(array (
            0=> array(
                'id'=>1,
                'first_name'=>'cossy',
                'last_name'=>'namwanje',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('admin123'),
                'role'=>'admin',
                'contact'=>'07898222922',
                'image'=>'cossy.jpg'
                
            )
            
            
            
        ));
    
    }
}
