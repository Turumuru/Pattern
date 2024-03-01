<?php

declare(strict_types = 1);

namespace public_html\Adapter;

use public_html\Adapter\Interface\DogInterface;

/** Полезный класс, несовместимый с целевым интерфейсом */
class DogLive implements DogInterface {
	public function bark(?bool $sneak): bool {
		return $sneak;
	}
	public function slumber(int $sneaks): bool {
		return $sneaks <= 3;
	}
}
