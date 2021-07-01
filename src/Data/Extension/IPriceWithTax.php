<?php declare(strict_types = 1);

namespace Contributte\Invoice\Data\Extension;

interface IPriceWithTax
{

	public function getPriceBeforeTax(): string;

	public function getTax(): string;

}
