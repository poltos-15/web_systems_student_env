<?php

use Phinx\Migration\AbstractMigration;

class RoomName extends AbstractMigration
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
   * {
   * }
    */
    
    /**
     * Migrate Up.
     */
    public function up(){
        $scl = <<< SQL
    CREATE TABLE room_name (
    id integer NOT NULL,
    type_number character varying(20),
    type_id integer,
    price integer
);
CREATE SEQUENCE room_name_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
    ALTER SEQUENCE room_name_id_seq OWNED BY room_name.id;
    ALTER TABLE ONLY room_name ALTER COLUMN id SET DEFAULT nextval('room_name_id_seq'::regclass);
SQL;
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}