<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableMismatuser extends AbstractMigration
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
        $table = $this->table('mismatch_user', ['id' => 'user_id']);
        $table->addColumn('user_name', 'string', ['limit' => 40])
            ->addColumn('user_password', 'string', ['limit' => 40])
            ->addColumn('user_joindate', 'timestamp')
            ->addColumn('user_firstname', 'string', ['limit' => 40])
            ->addColumn('user_lastname', 'string', ['limit' => 40])
            ->addColumn('user_gender', 'string', ['limit' => 40])
            ->addColumn('user_birdate', 'timestamp')
            ->addColumn('user_city', 'string', ['limit' => 40]) 
            ->addColumn('user_state', 'string', ['limit' => 40])             
            ->addColumn('user_picture', 'string', ['limit' => 40])             
            ->create();
    }
}
