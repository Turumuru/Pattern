<?php

declare(strict_types = 1);

namespace public_html\Adapter;

use public_html\Adapter\Interface\CatInterface;

/** Класс для целевого интерфейса, который нельзя менять */
class AnimalsLive implements CatInterface {
	public function sleep(): int {
		return 16;
	}
	public function speak(?bool $sneak): string {
		if (isset($sneak)) {
			return 'мяу';
		}
		return 'молчит';
	}
}
