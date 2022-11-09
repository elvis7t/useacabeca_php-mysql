<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableMismatchResponse extends AbstractMigration
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

        $table = $this->table('mismatch_response', ['id' => 'response_id']);
        $table->addColumn('category', 'string', ['limit' => 40])
            ->addColumn('topic_id', 'integer')
            ->addColumn('response', 'string', ['limit' => 40])
            ->addColumn('user_id', 'integer')
            ->create();
    }


    public function up()
    {
        $exists = $this->hasTable('mismatch_response');
        if ($exists) {
            // do something
            $this->table('mismatch_response')->drop()->save();
        }
    }
    
    public function down()
    {
        $table = $this->table('mismatch_response', ['id' => 'response_id']);
        $table->addColumn('category', 'string', ['limit' => 40])
            ->addColumn('topic_id', 'integer')
            ->addColumn('response', 'string', ['limit' => 40])
            ->addColumn('user_id', 'integer')
            ->save();
    }
}
