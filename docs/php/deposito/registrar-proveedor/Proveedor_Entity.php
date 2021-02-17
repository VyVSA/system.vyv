<?php

declare(strict_types=1);

namespace Registrar Proveedor;

class Proveedor_Entity
{

	private Integer $id;

	private String $ruc;

	private String $razon_social;

	private array $direcciones;

	private array $telefonos;



	public function __construct()
	{
		// ...
	}

	public function Proveedor_Entity( $id,  $ruc,  $razon_social, String $direcciones, String $telefonos)
	{
		// TODO implement here
	}

}
