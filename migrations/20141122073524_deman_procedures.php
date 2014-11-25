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
    public function up()
    { $scl = <<< SQL 
        CREATE TABLE "Demand _procedures" (
    "Id_demand" integer,
    "Id_procedures" integer
    );

    ALTER TABLE public."Demand _procedures" OWNER TO postgres;
SQL;
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}