<?php


class UsersTableSeeder extends Seeder {
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // 强制解除 Eloquent::create() 批量赋值限制
        Eloquent::unguard();

        foreach(range(1, 10) as $index)
        // for ($index = 1; $index < 10; $index++)
        {
            User::create(array(
                'username'   => 'User_' . $index,
                'password'   => 'password',
                'email'      => 'test@anvo.com'
            ));
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}