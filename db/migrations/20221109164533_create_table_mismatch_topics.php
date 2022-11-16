<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableMismatchTopics extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {

        $table = $this->table('mismatch_topic', ['id' => 'topic_id']);
        $table->addColumn('name', 'string', ['limit' => 40])
            ->addColumn('category_id', 'integer')
            ->create();
    }


    public function up()
    {
        $exists = $this->hasTable('mismatch_topic');
        if ($exists) {
            // do something
            $this->table('mismatch_topic')->drop()->save();
        }
    }
    
    public function down()
    {
        $table = $this->table('mismatch_topic', ['id' => 'topic_id']);
        $table->addColumn('name', 'string', ['limit' => 40])
            ->addColumn('category', 'string', ['limit' => 40])
            ->save();
    }
}
