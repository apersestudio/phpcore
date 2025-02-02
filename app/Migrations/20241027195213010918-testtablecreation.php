<?php

namespace PC\Databases;

use Exception;

use PC\Databases\DB;
use PC\Abstracts\AMigration;
use PC\Abstracts\ATableBuilder;

return new class extends AMigration {

    public function up(DB $db, array $params=[]):string {

        $messages = [];

        $db->schema("public")->createTable("my_table_one", function (ATableBuilder $table) {
            $table->addIncrements("id")->primary()->comment("Llave primaria");
        });
        $messages[] = "Master: Table my_table_one created successfully";

        $db->schema("public")->createTable("my_table_two", function (ATableBuilder $table) {
                
            $table->addIncrements("table_id")->primary()->comment("Llave primaria");
            $table->addSmallIncrements("table_smallid")->index()->comment("Llave secundaria");
            $table->addBigIncrements("table_bigid")->index();
            $table->addUlid("table_ulid")->index();
            $table->addUuid("table_uuid")->index();

            /* ------------------------------------------- */
            $table->addInteger("table_temperature");
            $table->addSmallInteger("table_balance");
            $table->addBigInteger("table_distance");
            $table->addUnsignedInteger("table_age");
            $table->addUnsignedSmallInteger("table_votes");
            $table->addUnsignedBigInteger("table_atoms")->unique();
            $table->addDecimal("table_price", 10, 2);

            /* ------------------------------------------- */
            $table->addBoolean("table_active");

            /* ------------------------------------------- */
            $table->addChar("table_flag", 1)->default("Y");
            $table->addString("table_name", 200);
            $table->addText("table_description");

            /* ------------------------------------------- */
            $table->addDate("table_createdat")->default("CURRENT_TIMESTAMP");
            $table->addTime("table_minimumtime");
            $table->addDatetime("table_delivery");
            $table->addTimestamp("table_deletedat");
            
            /* ------------------------------------------- */
            $table->addTimeTz("table_recordedat");
            $table->addDateTimeTz("table_editedat");
            $table->addTimestampTz("table_movedat")->comment("Fecha con zona horaria");
        });
        $messages[] = "Master: Table my_table_two created successfully";

        $db->schema("public")->createTable("my_table_three", function (ATableBuilder $table) {
            $table->addIncrements("id")->primary()->comment("Llave primaria");
        });
        $messages[] = "Master: Table my_table_three created successfully";

        return implode("\r\n", $messages);

    }

    public function down(DB $db, array $params=[]):string {

        $messages = [];

        $db->schema("public")->dropTable('my_table_one');
        $messages[] = "Master: Table my_table_one deleted successfully";

        $db->schema("public")->dropTable('my_table_two');
        $messages[] = "Master: Table my_table_two deleted successfully";

        $db->schema("public")->dropTable('my_table_three');
        $messages[] = "Master: Table my_table_three deleted successfully";

        return implode("\r\n", $messages);

    }

};

?>