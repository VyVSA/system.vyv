<?php

declare(strict_types=1);

namespace Registrar Compras;

class Detalle_Compra_Boundary
{

	private Integer $id_compra;

	private Integer $item;

	private Integer $producto;

	private Integer $cantidad;

	private Decimal $precio_unitario;



	public function __construct()
	{
		// ...
	}

	public function registrar(Integer $id, Integer $item, Integer $producto, Integer $cantidad, Decimal $precio_unitario): void
	{
		// TODO implement here
		return null;
	}

}
