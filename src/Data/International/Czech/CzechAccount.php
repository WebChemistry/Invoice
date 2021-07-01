<?php declare(strict_types = 1);

namespace Contributte\Invoice\Data\International\Czech;

use Contributte\Invoice\Data\Account;
use Contributte\Invoice\Data\Extension\IAccountNumber;

final class CzechAccount extends Account implements IAccountNumber
{

	public function __construct(
		private ?string $accountNumber,
		?string $iban = null,
	)
	{
		parent::__construct($iban);
	}

	public function getAccountNumber(): ?string
	{
		return $this->accountNumber;
	}

}
