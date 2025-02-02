<?php

namespace PC\Databases;

use Exception;

use PC\Databases\DB;
use PC\Abstracts\AMigration;
use PC\Abstracts\ATableBuilder;

return new class extends AMigration {

    public function up(DB $db, array $params=[]):string {

        $db->schema('public')->createTable('master_tokens', function (ATableBuilder $table) {

            $table->addUlid('token_id')->primary();
            $table->addString("token_type", 100);
            $table->addUlid("token_type_id")->index();

            $table->addString('token_device', 255);
            $table->addString('token_ip', 39);

            $table->addString('token_name', 100);
            $table->addString('token_data', 255)->unique();
            $table->addText('token_abilities')->nullable();
            
            $table->addTimestamp('last_used_at')->nullable();
            $table->addTimestamp('expired_at')->nullable();
            $table->addTimestamp('created_at')->nullable();
            $table->addTimestamp('updated_at')->nullable();
            
        });

        return "Master: tokens table was created successfully";

    }

    public function down(DB $db, array $params=[]):string {

        $db->schema("public")->dropTable('master_tokens');

        return "Master: Table tokens was deleted successfully";

    }

};

?>