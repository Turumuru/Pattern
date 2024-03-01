<?php

declare(strict_types = 1);

namespace public_html\Adapter\Interface;

/** Целевой интерфейс */
interface CatInterface {
	public function speak(?bool $sneak): string;
	public function sleep(): int;
}
