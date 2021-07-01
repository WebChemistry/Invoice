<?php declare(strict_types = 1);

namespace Contributte\Invoice\Templates;

use Contributte\Invoice\Data\IOrder;

interface ITemplate
{

	public function render(IOrder $order): string;

}
