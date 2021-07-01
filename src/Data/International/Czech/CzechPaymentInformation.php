<?php declare(strict_types = 1);

namespace Contributte\Invoice\Data\International\Czech;

use Contributte\Invoice\Data\Account;
use Contributte\Invoice\Data\Extension\IConstantSymbol;
use Contributte\Invoice\Data\Extension\ISpecificSymbol;
use Contributte\Invoice\Data\Extension\IVariableSymbol;
use Contributte\Invoice\Data\PaymentInformation;

final class CzechPaymentInformation extends PaymentInformation implements IVariableSymbol, ISpecificSymbol, IConstantSymbol
{

	/**
	 * @param Account[] $accounts
	 */
	public function __construct(
		array $accounts = [],
		private ?string $variableSymbol = null,
		private ?string $specificSymbol = null,
		private ?string $constantSymbol = null,
	)
	{
		parent::__construct($accounts);
	}

	public function getVariableSymbol(): ?string
	{
		return $this->variableSymbol;
	}

	public function getSpecificSymbol(): ?string
	{
		return $this->specificSymbol;
	}

	public function getConstantSymbol(): ?string
	{
		return $this->constantSymbol;
	}

}
