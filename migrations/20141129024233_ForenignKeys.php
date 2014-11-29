<?php

use Phinx\Migration\AbstractMigration;

class ForenignKeys extends AbstractMigration
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
    {
    $sql = <<< SQL
    ALTER TABLE ONLY "Demand _procedures"
    ADD CONSTRAINT "Demand _procedures_Id_demand_fkey" FOREIGN KEY ("Id_demand") REFERENCES application(id);


ALTER TABLE ONLY "Demand _procedures"
    ADD CONSTRAINT "Demand _procedures_Id_procedures_fkey" FOREIGN KEY ("Id_procedures") REFERENCES procedure(id);

ALTER TABLE ONLY application
    ADD CONSTRAINT fk_application2 FOREIGN KEY (id_pass) REFERENCES permit(id);
ALTER TABLE ONLY application
    ADD CONSTRAINT pf_application FOREIGN KEY (id_client) REFERENCES client(id);

ALTER TABLE ONLY availability_of_rooms
    ADD CONSTRAINT availability_of_rooms_type_id_fkey FOREIGN KEY (type_id) REFERENCES room_name(id);
LTER TABLE ONLY occupied_rooms
    ADD CONSTRAINT "occupied_rooms_id_room-book_fkey" FOREIGN KEY ("id_room-book") REFERENCES availability_of_rooms(id);
ALTER TABLE ONLY occupied_rooms
    ADD CONSTRAINT occupied_rooms_id_zajav_fkey FOREIGN KEY (id_zajav) REFERENCES application(id);

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