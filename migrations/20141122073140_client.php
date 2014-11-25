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
    public function up()
    {$sql = <<<SQL
    CREATE TABLE client (
    id integer NOT NULL,
    surname character(50),
    name character(50),
    patronomic_name character(50),
    date_of_birtudey date,
    sex character(10),
    "phone number" character varying(20),
    passport character varying(20),
    demand_procedures character(50),
    login character varying(20),
    password character varying(20)
);

    CREATE SEQUENCE klient_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

    ALTER SEQUENCE klient_id_seq OWNED BY client.id;
    ALTER TABLE ONLY client ALTER COLUMN id SET DEFAULT nextval('klient_id_seq'::regclass);
    
   SQL;
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}