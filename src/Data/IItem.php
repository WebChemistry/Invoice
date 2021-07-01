<?php declare(strict_types = 1);

namespace Contributte\Invoice\Data;

interface IItem
{

	public function getName(): string;

	public function getUnitPrice(): string;

	public function getQuantity(): int;

	public function getTotalPrice(): string;

}
