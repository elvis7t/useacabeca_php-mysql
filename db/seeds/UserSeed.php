<?php


use Phinx\Seed\AbstractSeed;

class UserSeed extends AbstractSeed
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
                'user_name' => 'hannaa',
                'user_password' => '4297f44b13955235245b2497399d7a93',
                'user_joindate' => '2022-10-25 12:32:11',
                'user_firstname' => 'Hannah',
                'user_lastname' => 'Arendt',
                'user_gender' => 'f',
                'user_birdate' => '2022-10-05 00:00:00',
                'user_city' => ' Hanôver',
                'user_state' => 'Alemanha',
                'user_picture' => 'hanna_arendt.png',
               
            ],[
                'user_name' => 'jhonnn',
                'user_password' => '4297f44b13955235245b2497399d7a93',
                'user_joindate' => '2022-10-25 12:32:11',
                'user_firstname' => 'Jhonnn',
                'user_lastname' => 'Dewey',
                'user_gender' => 'm',
                'user_birdate' => '2022-10-05 00:00:00',
                'user_city' => 'Burlington, Vermont, ',
                'user_state' => 'EUA',
                'user_picture' => 'john _dewey.png',
            ],[
                'user_name' => 'Jeanpiage',
                'user_password' => '4297f44b13955235245b2497399d7a93',
                'user_joindate' => '2022-10-25 12:32:11',
                'user_firstname' => 'Jean',
                'user_lastname' => 'William Fritz Piaget',
                'user_gender' => 'm',
                'user_birdate' => '2022-10-05 00:00:00',
                'user_city' => ' Neuchâtel ',
                'user_state' => 'Suíça',
                'user_picture' => 'jean_piage.png',
                           
            ]
        ];
        $table = $this->table('mismatch_topic');
        $table->insert($data)
        ->save();
  }
}
