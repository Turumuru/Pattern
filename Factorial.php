<?php

declare(strict_types = 1);

namespace public_html;

class Factorial {
	public int $numberStart;
	public int $numberFinish;
	public ?int $numberPrecedingCookie = null;
	public ?int $numberPrecedingSession = null;
	public function getFactorial(int $n): int {
		$result = 1;

		for($i=1; $i<=$n; $i++) {
			$result *= $i;
		}

		return $result;
	}
	public function printResult(): void {
		echo "Результат вычислений: " . $this->numberFinish . "<br />";
	}
	public function printPrecedingCookie(): void {
		if (isset($this->numberPrecedingCookie)) {
			echo "Предыдущее число для запроса cookie: ". $this->numberPrecedingCookie . "<br />";

			return;
		}
		echo "Предыдущее число для запроса cookie отсутствует!<br />";
	}
	public function printPrecedingSession(): void {
		if (isset($this->numberPrecedingSession)) {
			echo "Предыдущее число для запроса session: " . $this->numberPrecedingSession . "<br />";

			return;
		}
		echo "Предыдущее число для запроса session отсутствует!<br />";
	}
}
