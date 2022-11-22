<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableRiskJobs extends AbstractMigration
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
        $table = $this->table('mismatch_riskyjobs',['id' => 'job_id']);
        $table->addColumn('title', 'string',['limit' => 20])
              ->addColumn('description','text')
              ->addColumn('city','string',['limit' => 30])
              ->addColumn('state','string',['limit' => 20])
              ->addColumn('zip','string',['limit' => 30])
              ->addColumn('company','string',['limit' => 40])
              ->addColumn('date_posted','timestamp',['default' => 'CURRENT_TIMESTAMP'])
              ->create();
    }
}
