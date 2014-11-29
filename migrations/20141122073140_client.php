<?php

use Phinx\Migration\AbstractMigration;

class Client extends AbstractMigration
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
    *{
    *}
    */
    
    /**
     * Migrate Up.
     */
    public function up(){
        $sql = <<<SQL
    CREATE TABLE client (
    id integer PRIMARY KEY NOT NULL,
    surname varchar(50),
    name varchar(50),
    patronomic varchar(50),
    date_of_birtudey date,
    sex boolean,
    phone_number varchar(20),
    passport varchar(20),
    demand_procedures varchar(50),
    login varchar(20),
    password varchar(20)
);

    CREATE SEQUENCE client_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

    ALTER SEQUENCE client_id_seq OWNED BY client.id;
    ALTER TABLE ONLY client ALTER COLUMN id SET DEFAULT nextval('client_id_seq'::regclass);
    
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