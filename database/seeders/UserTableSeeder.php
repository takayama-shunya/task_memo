<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->truncate(); //2回目実行の際にシーダー情報をクリア　一括削除
        DB::table('users')->insert([
            'name' => 'test_1',
            'email' => 'test_1@icloud.com',
            'password' => bcrypt('password'),            
        ]);
        DB::table('users')->insert([
            'name' => 'test_2',
            'email' => 'test_2@icloud.com',
            'password' => bcrypt('password'),
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Model::reguard();

    }
}
