<?php

namespace App\Models;

use PC\Databases\Model;

class ProductosModel extends Model {

	protected $connection = 'company';
	protected $schema = 'test';
	protected $table = 'productos';
	protected $primaryKey = 'productos_id';

	protected $definition = [
		"productos_id"=>["type"=>"int"],
		"productos_idusuario"=>["type"=>"int"],
		"productos_nombre"=>["type"=>"string"],
		"productos_precio"=>["type"=>"float"]
	];

	protected $fillable = [
		"productos_idusuario",
		"productos_nombre",
		"productos_precio"
	];
}

?>