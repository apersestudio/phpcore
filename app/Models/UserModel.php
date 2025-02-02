<?php

namespace App\Models;

use PC\Databases\Model;

class UserModel extends Model {

    protected $connection = 'company';
    protected $schema = 'public';
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $sequence = "user_user_id_seq";

    /** Definition as */
    protected $definition = [
        "user_id"=>"string",
        "user_name"=>"string",
        "user_email"=>"string",
        "user_password"=>"string",
        "created_at"=>"timestamp",
        "updated_at"=>"timestamp"
    ];

    protected $fillable = [
        "user_id",
        "user_name",
        "user_email",
        "user_password",
        "created_at",
        "updated_at"
    ];

    protected $relations = [
        "productos"=>[
            "foreignKey"=>"productos_idusuario",
            "localKey"=>"user_id",
            "model"=>"App\Models\ProductosModel"
        ],
        "empresas"=>[
            "foreignKey"=>"empresa_id",
            "localKey"=>"user_empresa_id",
            "model"=>"App\Models\EmpresasModel"
        ]
    ];

}
?>