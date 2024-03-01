<?php

declare(strict_types = 1);

namespace public_html\FabricMethod;


abstract class ProgrammerEast {
	// Фабричный метод
	abstract public function makeProgrammer(): Programmer;
	public function takeProgrammer() {
		$programmer = $this->makeProgrammer();
		$programmer->writingСode();
	}
}
