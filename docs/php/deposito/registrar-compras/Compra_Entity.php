<?php

declare(strict_types=1);

namespace Registrar Compras;

class Compra_Entity
{

	private Integer $id;

	private date $fecha;

	private Integer $id_proveedor;

	private Integer $id_usuario;

	private Integer $condicion;

	private Integer $forma_pago;

	private Decimal $total_exentas;

	private Decimal $total_iva5;

	private Decimal $total_iva10;





	public function __construct()
	{
		// ...
	}

	public function Compra_Entity(Integer $id, date $fecha, Integer $id_proveedor, Integer $id_usurio, Integer $condicion, Integer $forma_pago, Decimal $total_exentas, Decimal $total_iva5, Decimal $total_iva10): void
	{
		// TODO implement here
		return null;
	}

}
