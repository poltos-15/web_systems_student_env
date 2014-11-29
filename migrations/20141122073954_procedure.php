<?php

use Phinx\Migration\AbstractMigration;

class Procedure extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
   * public function change()
   **{
   *}
    */
    
    /**
     * Migrate Up.
     */
    public function up(){
        $sql = <<< SQL
    CREATE TABLE procedure (
    id integer PRIMARY KEY NOT NULL,
    name character varying(20),
    price integer
);
CREATE SEQUENCE procedure_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER SEQUENCE procedure_id_seq OWNED BY procedure.id;
ALTER TABLE ONLY procedure ALTER COLUMN id SET DEFAULT nextval('procedure_id_seq'::regclass);

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