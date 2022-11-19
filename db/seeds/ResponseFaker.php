<?php


use Phinx\Seed\AbstractSeed;

class ResponseFaker extends AbstractSeed
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
        $faker = \Faker\Factory::create("pt_br");
        $table = $this->table('mismatch_response');
        $data =[];
        for($i = 0; $i < 100; $i++){
            $data[]=[
                "topic_id"=> $faker->numberBetween(1, 20),
                "response"=> $faker->numberBetween(1, 2),
                "user_id"=> $faker->numberBetween(1, 18),
            ];

        }
        $table->insert($data)
              ->save();
    }
}
