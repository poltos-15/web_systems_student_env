<?php

use Phinx\Migration\AbstractMigration;

class OccupiedRooms extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
  *  public function change()
   * {
    *}
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $sql= <<<SQL
    CREATE TABLE occupied_rooms (
    "id_room-book" integer,
    date date,
    id_zajav integer
);



ALTER TABLE public.occupied_rooms OWNER TO postgres;
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