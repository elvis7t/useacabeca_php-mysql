<?php


use Phinx\Seed\AbstractSeed;

class JobsFaker extends AbstractSeed
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
        $faker = \Faker\Factory::create("en_US");
        $table = $this->table('mismatch_riskyjobs');
        $data = [];
        for($i=0; $i<20; $i++){
            $data[]=[
                "title"=>$faker->title(),
                "description"=>$faker->realText($maxNbChars = 200, $indexSize = 2),
                "city"=>$faker->city(),
                "state"=>$faker->state(),
                "zip"=>$faker->postcode(),
                "company"=>$faker->company(),
            ];

        }
        $table->insert($data)
              ->save();  
    }
}
