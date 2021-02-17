<?php

declare(strict_types=1);

namespace Registrar Compras;

class Compra_Control
{










	public function __construct()
	{
		// ...
	}

	public function registrar_compra(Integer $id, date $fecha, Integer $id_proveedor, Integer $id_usurio, Integer $condicion, Integer $forma_pago, Decimal $total_exentas, Decimal $total_iva5, Decimal $total_iva10): void
	{
		// TODO implement here
		return null;
	}

	public function registrar_detalles(Integer $id, Integer $item, Integer $producto, Integer $cantidad, Decimal $precio_unitario): void
	{
		// TODO implement here
		return null;
	}

}
