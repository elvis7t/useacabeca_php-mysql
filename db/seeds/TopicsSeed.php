<?php


use Phinx\Seed\AbstractSeed;

class TopicsSeed extends AbstractSeed
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
                'name' => 'Tatoos',
                'category' => 'Appearance',
            ],[
                'name' => 'gold chains',
                'category' => 'Appearance',            
            ],[
                'name' => 'body piercings',
                'category' => 'Appearance',            
            ],[
                'name' => 'cowboy boots',
                'category' => 'Appearance',
            ]
        ];
        $table = $this->table('mismatch_topic');
        $table->insert($data)
              ->save();
        }
    }
