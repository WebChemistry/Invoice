<?php declare(strict_types = 1);

namespace Contributte\Invoice\Data;

interface ISubject
{

	public function getName(): string;

	public function getTown(): ?string;

	public function getAddress(): ?string;

	public function getZip(): ?string;

	public function getCountry(): ?string;

	public function getVatNumber(): ?string;

	public function getId(): ?string;

}
