<?php declare(strict_types = 1);

namespace Contributte\Invoice\Data;

class Timestamps implements ITimestamps
{

	public function __construct(
		private string $created,
		private ?string $dueTo = null,
	)
	{
	}

	public function getCreated(): string
	{
		return $this->created;
	}

	public function getDueTo(): ?string
	{
		return $this->dueTo;
	}

}
