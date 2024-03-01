<?php

declare(strict_types = 1);

namespace public_html\Adapter;

use public_html\Adapter\Interface\DogInterface;
use public_html\Adapter\Interface\CatInterface;

/**
 * Шаблон проектирования - Adapter
 * Относится к структурным паттернам, т.е. предоставляет решение проблем возникающих при взаимодействии объектов друг с другом и структур
 * Опирается на полиморфизм
 * Позволяет объектам с несовместимыми интерфейсами работать вместе
 * Берётся всё множество вариантов поведения и на каждый создается свой собственный класс
 * Используется в случае когда надо преобразовать интерфейс одного класса, в интерфейс другого, ожидаемого клиентом
 * Это объект-переводчик, который трансформирует интерфейс или данные одного объекта в такой вид, чтобы он стал понятен другому объекту
 */

/** Класс адаптер */
class DogInterfaceAdapter implements CatInterface {
	private int $sneaks;
	public function __construct(protected DogInterface $dog, $sneaks) {
		$this->sneaks = $sneaks;
	}
	public function speak(?bool $sneak): string {
		return (string)$this->dog->bark($sneak);
	}

	public function sleep(): int {
		return (int)$this->dog->slumber($this->sneaks);
	}
}
