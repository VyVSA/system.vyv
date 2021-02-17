<?php

declare(strict_types=1);

namespace Registrar Productos;

class Producto_Entity
{

	private Integer $id;

	private String $descripcion;

	private String $marca;

	private String $procedencia;

	private Integer $stock;

	private Decimal $precio_promedio_compra;

	private Decimal $precio_venta;

	private String $presentacion;

	private String $observacion;

	private date $vencimiento;

	private String $lote;

	private Integer $iva;




	public function __construct()
	{
		// ...
	}

	public function Producto_Entity(Integer $id, String $descripcion, String $marca, String $procedencia, String $presentacion, String $observacion, date $vencimiento, String $lote, Integer $iva): void
	{
		// TODO implement here
		return null;
	}

	public function obtener_precio(Integer $id): Decimal
	{
		// TODO implement here
		return null;
	}

	public function asignar_percio_venta(Decimal $precio_venta): void
	{
		// TODO implement here
		return null;
	}

	public function set_descripcion(String $descripcion): void
	{
		// TODO implement here
		return null;
	}

	public function set_marca(String $marca): void
	{
		// TODO implement here
		return null;
	}

	public function set_precedencia(String $procedencia): void
	{
		// TODO implement here
		return null;
	}

	public function set_presentacion(String $presentacion): void
	{
		// TODO implement here
		return null;
	}

	public function set_observacion(String $observacion): void
	{
		// TODO implement here
		return null;
	}

	public function set_vencimiento(date $fecha): void
	{
		// TODO implement here
		return null;
	}

	public function set_lote(String $lote): void
	{
		// TODO implement here
		return null;
	}

	public function set_iva(Integer $iva): void
	{
		// TODO implement here
		return null;
	}

	public function set_percio_venta(Decimal $precio): void
	{
		// TODO implement here
		return null;
	}

}
