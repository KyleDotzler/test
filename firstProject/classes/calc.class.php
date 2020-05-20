<?php
	
	class calc {
		public $operator;
		public $num1;
		public $num2;

		public function __construct(string $Operator, int $Num1, int $Num2 ){
			$this->operator = $Operator;
			$this->num1 = $Num1;
			$this->num2 = $Num2;
		}

		public function calculator(){
			switch ($this->operator) {
				case 'add':
					$result = $this->num1 + $this->num2;
					return $result;
					break;

				case 'sub':
					$result = $this->num1 - $this->num2;
					return $result;
					break;

				case 'div':
					$result = $this->num1 / $this->num2;
					return $result;
					break;

				case 'mul':
					$result = $this->num1 * $this->num2;
					return $result;
					break;
				
				default:
					echo "error";
					break;
			}
		}

	}


?>