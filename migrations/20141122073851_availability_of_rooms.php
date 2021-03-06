<?php

use Phinx\Migration\AbstractMigration;

class AvailabilityOfRooms extends AbstractMigration
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
    *}
    */
    
    /**
     * Migrate Up.
     */
    public function up(){
        $sql = <<< SQL
    CREATE TABLE availability_of_rooms (
    id integer PRIMARY KEY NOT NULL,
    room_number integer,
    type_id integer NOT NULL
);

CREATE SEQUENCE availability_of_rooms_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

ALTER SEQUENCE availability_of_rooms_id_seq OWNED BY availability_of_rooms.id;
ALTER TABLE ONLY availability_of_rooms ALTER COLUMN id SET DEFAULT nextval('availability_of_rooms_id_seq'::regclass);

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