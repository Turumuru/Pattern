<?php

declare(strict_types = 1);

namespace public_html;

use Exception;

/**
 * Шаблон проектирования - Singleton
 * Класс, объект которого может быть создан только один раз
 * Работаем всегда с одним объектом, предоставляется единая точка входа
 * Вводные параметры не нужно передавать каждый раз поновой, в случае их идентичности
 * Это предотвращает дублирование кода
 * (сейчас считается антипатерном)
 */
class Singleton {
	private static Singleton $instance;
	public string $field = '';
	/** Защищаем от создания через new Singleton */
	private function __construct() {}
	/** Возвращает единственный экземпляр класса */
	public static function getInstance(): Singleton {
		if(false === isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	/** Защищаем от создания через клонирование (Например, clone $instance) */
	private function __clone() {}
	/** Защищаем от создания через unserialize (Например, unserialize($instance)) */
	public function __wakeup() {
		throw new Exception("Cannot unserialize a singleton.");
	}
	/** Защищаем от serialize (Например, serialize($instance)) */
	public function __sleep() {
		throw new Exception("Cannot serialize a singleton.");
	}
}
