<?php


use Phinx\Seed\AbstractSeed;

class TopicsFaker extends AbstractSeed
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
        $faker = \Faker\Factory::create("pt_BR");
        $users = $this->table("mismatch_topic");
        $data  = [];
        for ($i=0; $i < 20; $i++)
        { 
            $data[] = [
                "name" => $faker->name(),
                "category" => $faker->company() 
            ];
        }
        $users->insert($data)
              ->save();
    }
}
