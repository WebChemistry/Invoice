<?php declare(strict_types = 1);

namespace Contributte\Invoice;

use Contributte\Invoice\Data\IOrder;
use Contributte\Invoice\Data\Order;
use Contributte\Invoice\Responses\PdfResponse;
use Contributte\Invoice\Templates\ITemplate;
use Contributte\Invoice\Templates\ParaisoTemplate;
use Nette\Application\Response;

final class Invoice
{

	private ITemplate $template;

	public function __construct(?ITemplate $template = null)
	{
		$this->template = $template ?: new ParaisoTemplate();
	}

	public function create(IOrder $order): string
	{
		return $this->template->render($order);
	}

	public function send(IOrder $order): void
	{
		header('Content-type: application/pdf; charset=utf-8');

		echo $this->create($order);
	}

	public function createResponse(Order $order): Response
	{
		return new PdfResponse($this->create($order));
	}

	public function withTemplate(ITemplate $template): static
	{
		return new static($template);
	}

}
