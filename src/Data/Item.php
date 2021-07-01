<?php declare(strict_types = 1);

namespace Contributte\Invoice\Data;

class Item implements IItem
{

	public function __construct(
		private string $name,
		private string $unitPrice,
		private int $quantity,
		private string $totalPrice,
	)
	{
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getUnitPrice(): string
	{
		return $this->unitPrice;
	}

	public function getQuantity(): int
	{
		return $this->quantity;
	}

	public function getTotalPrice(): string
	{
		return $this->totalPrice;
	}

}
