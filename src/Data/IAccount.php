<?php declare(strict_types = 1);

namespace Contributte\Invoice\Data;

interface IAccount
{

	public function getIban(): ?string;

}
