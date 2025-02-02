<?php

namespace App\Models;

use PC\Databases\Model;

class EmpresasModel extends Model {

	protected $connection = 'company';
	protected $schema = 'test';
	protected $table = 'empresas';
	protected $primaryKey = 'id';

	protected $definition = [
		"id"=>["type"=>"int"],
		"idusuario"=>["type"=>"int"],
		"nombre"=>["type"=>"string"],
		"precio"=>["type"=>"float"]
	];

	protected $fillable = [
		"idusuario",
		"nombre",
		"precio"
	];
}

?>