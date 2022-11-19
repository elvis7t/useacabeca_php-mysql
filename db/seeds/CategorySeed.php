<?php


use Phinx\Seed\AbstractSeed;

class CategorySeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function init()
    {
        $data = [
            [
                'name' => 'Aparence',
               
            ],[
                'name' => 'Entertaiment',
                           
            ],[
                'name' => 'Foods',
                           
            ],[
                'name' => 'People',               
            ],[
                'name' => 'Activities',
                           
            ]
        ];
        $table = $this->table('mismatch_category');
        $table->insert($data)
        ->save();
  }
}