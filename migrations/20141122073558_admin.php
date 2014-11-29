<?php

use Phinx\Migration\AbstractMigration;

class Admin extends AbstractMigration
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
        $scl = <<< SQL
        CREATE TABLE admin (
    id integer NOT NULL,
    login character varying(50),
    password character varying(20)
    );
    CREATE SEQUENCE admin_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
    ALTER SEQUENCE admin_id_seq OWNED BY admin.id;
    ALTER TABLE ONLY admin ALTER COLUMN id SET DEFAULT nextval('admin_id_seq'::regclass);
    ALTER TABLE ONLY admin
    ADD CONSTRAINT pk_admin PRIMARY KEY (id);
SQL;
}

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}