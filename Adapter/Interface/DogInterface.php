<?php

declare(strict_types = 1);

namespace public_html\Adapter\Interface;

/** Нецелевой, но полезный интерфейс */
interface DogInterface {
	public function bark(?bool $sneak): bool;
	public function slumber(int $sneaks): bool;
}
