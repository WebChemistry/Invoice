<?php declare(strict_types = 1);

namespace Contributte\Invoice\Data;

class Customer implements ICustomer
{

	public function __construct(
		private string $name,
		private ?string $town = null,
		private ?string $address = null,
		private ?string $zip = null,
		private ?string $country = null,
		private ?string $vatNumber = null,
		private ?string $id = null,
	)
	{
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getTown(): ?string
	{
		return $this->town;
	}

	public function getAddress(): ?string
	{
		return $this->address;
	}

	public function getZip(): ?string
	{
		return $this->zip;
	}

	public function getCountry(): ?string
	{
		return $this->country;
	}

	public function getVatNumber(): ?string
	{
		return $this->vatNumber;
	}

	public function getId(): ?string
	{
		return $this->id;
	}

}
