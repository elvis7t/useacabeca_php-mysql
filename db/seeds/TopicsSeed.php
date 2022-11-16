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
                'category_id' => '1',
            ],[
                'name' => 'Gold chains',
                'category_id' => '1',            
            ],[
                'name' => 'Body piercing',
                'category_id' => '1',            
            ],[
                'name' => 'Cowboy boots',
                'category_id' => '1',
            ],[
                'name' => 'Long hair',
                'category_id' => '1',
            ],[
                'name' => 'Reality TV',
                'category_id' => '2',            
            ],[
                'name' => 'Professional wresling',
                'category_id' => '2',            
            ],[
                'name' => 'Horror movies',
                'category_id' => '2',
            ],[
                'name' => 'Sush',
                'category_id' => '3',
            ],[
                'name' => 'Spam',
                'category_id' => '3',            
            ],[
                'name' => 'Spiey food',
                'category_id' => '3',            
            ],[
                'name' => ' Banana sandwiches',
                'category_id' => '3',
            ],[
                'name' => 'Martinis',
                'category_id' => '3',
            ],[
                'name' => 'Howard stens',
                'category_id' => '4',            
            ],[
                'name' => 'Bill Gates',
                'category_id' => '4',            
            ],[
                'name' => 'Barbara Streisand',
                'category_id' => '4',
            ],[
                'name' => 'Hugh Hefner',
                'category_id' => '4',            
            ],[
                'name' => 'Martha Stewart',
                'category_id' => '4',
            ],[
                'name' => 'Karaoke',
                'category_id' => '5',            
            ],[
                'name' => 'Karaoke',
                'category_id' => '5',
            ]
        ];
        $table = $this->table('mismatch_topic');
        $table->insert($data)
              ->save();
        }
    }
