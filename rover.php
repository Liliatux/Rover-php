<?php 

class Rover {
	private $x;
	private $y;
	private $o;
	private $arrayO = ['N', 'E', 'S', 'W'];

	public function __construct($x, $y, $o) {
		$this->x = $x;
		$this->y = $y;
		$this->o = $o;
	}

	public function getPosition() {
		return [
			$this->x,
			$this->y,
			$this->o
		];
	}

	public function forward(){
		if($this->o === 2){
			$this->y --;
		}

		if($this->o === 0){
			$this->y ++;
		}

		if($this->o === 3){
			$this->x --;
		}

		if($this->o === 1){
			$this->x ++;
		}
	}

	public function backward(){
		if($this->o === 2){
			$this->y ++;
		}

		if($this->o === 0){
			$this->y --;
		}

		if($this->o === 3){
			$this->x ++;
		}

		if($this->o === 1){
			$this->x --;
		}
	}

	public function turnRight(){
		if($this->o < 3){
			$this->o ++;
		}

		elseif($this->o === 3){
			$this->o = 0;
		}
	}

	public function turnLeft(){
		if($this->o > 0){
			$this->o --;
		}

		elseif($this->o === 0){
			$this->o = 3;
		}
	}

}