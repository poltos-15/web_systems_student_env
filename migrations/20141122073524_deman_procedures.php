<?php

use Phinx\Migration\AbstractMigration;

class DemanProcedures extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    *public function change()
    *{
    *}
    */
    
    /**
     * Migrate Up.
     */
    public function up(){ 
        $sql = <<<SQL
        CREATE TABLE "Demand_procedures" (
    "id_demand" integer,
    "id_procedures" integer
    );
SQL;
$this->execute($sql); 
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}