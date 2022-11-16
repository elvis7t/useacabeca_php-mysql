<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateMismatchCategoryTable extends AbstractMigration
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
        $table = $this->table('mismatch_category', ['id' => 'category_id']);
        $table->addColumn('name', 'string', ['limit' => 40])            
            ->create();
    }
    public function up()
    {
        $table = $this->table('mismatch_topic');
        $table->addColumn('category_id', 'int')            
            ->update();
    }
}
