<?php

use App\AdminUser;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::create([
           'name' => 'admin',
            'email' => 'akaamil@outlook.com',
            'password' => '$2y$10$RuOLzG6G9A/13SYDobYTB.ahKh9emm/RHdk7GKC3/wXgUZJBk9ZP6', // secret
        ]);
    }
}
