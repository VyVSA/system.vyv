<?php

declare(strict_types=1);

namespace Generación de Pedidos;

class Pago
{

	private Integer $id;

	private Integer $Id_pedido;

	private Integer $id_cliente;

	private Integer $numero;

	private Integer $forma_pago;

	private Decimal $monto;

	public function __construct()
	{
		// ...
	}

}
