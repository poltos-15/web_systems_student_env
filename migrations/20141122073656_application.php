<?php

use Phinx\Migration\AbstractMigration;

class Application extends AbstractMigration
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
   * {
    *}
    */
    
    /**
     * Migrate Up.
     */
    public function up(){
        $sql = <<< SQL
        CREATE TABLE application (
    id integer PRIMARY KEY NOT NULL,
    id_pass integer NOT NULL,
    date_of_arrival date,
    date_of_eparture date,
    id_client integer,
    status integer
);

CREATE SEQUENCE application_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
    
ALTER SEQUENCE application_id_seq OWNED BY application.id;
ALTER TABLE ONLY application ALTER COLUMN id SET DEFAULT nextval('application_id_seq'::regclass);
ALTER TABLE application
  ADD CONSTRAINT chk_date CHECK (date_of_arrival <= date_of_eparture);

  

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