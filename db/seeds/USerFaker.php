<?php


use Phinx\Seed\AbstractSeed;

class USerFaker extends AbstractSeed
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
        $table = $this->table('mismatch_user');
        $data = [];
        for ($i = 0; $i <5; $i++) {
            $data[] = [
                'user_name' => $faker->userName(),
                'user_password' => '4297f44b13955235245b2497399d7a93',
                'user_joindate' => '2022-10-05 00:00:00',
                'user_firstname' => $faker->firstName(),
                'user_lastname' => $faker->lastName(),
                'user_gender' => $faker->randomLetter('f','m'),
                'user_birdate' => '2022-10-05 00:00:00',
                'user_city' => $faker->city(),
                'user_state' => $faker->country(),
                'user_picture' => 'hanna_arendt.png',
            ];
            $table->insert($data)
                ->save();
        }
    }
}
