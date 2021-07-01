<?php declare(strict_types = 1);

namespace Contributte\Invoice\Data\Extension;

interface IDiscount
{

	public function getDiscount(): string;

}
