<?php


class DocsTableSeeder extends Seeder {
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // 强制解除 Eloquent::create() 批量赋值限制
        Eloquent::unguard();

        foreach(range(1, 3) as $index)
        // for ($index = 1; $index < 10; $index++)
        {
            Doc::create(array(
                'user_id'   => '1',
                'title'     => 'test docs '.$index,
                'content'   => 'doc content '.$index
            ));
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}