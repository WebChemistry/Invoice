<?php declare(strict_types = 1);

namespace Contributte\Invoice\Templates\Translator;

interface ITranslator
{

	public function translate(string $message): string;

}
