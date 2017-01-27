<?php 

class Rover {
	private $x;
	private $y;
	private $o;

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
		if($this->o === 'S'){
			$this->y --;
		}

		if($this->o === 'N'){
			$this->y ++;
		}

		if($this->o === 'W'){
			$this->x --;
		}

		if($this->o === 'E'){
			$this->x ++;
		}
	}

	public function backward(){
		if($this->o === 'S'){
			$this->y ++;
		}

		if($this->o === 'N'){
			$this->y --;
		}

		if($this->o === 'W'){
			$this->x ++;
		}

		if($this->o === 'E'){
			$this->x --;
		}
	}

	public function turnRight(){
		if($this->o === 'N'){
			$this->o = 'E';
		}

		elseif($this->o === 'E'){
			$this->o = 'S';
		}

		elseif($this->o === 'S'){
			$this->o = 'W';
		}

		elseif($this->o === 'W'){
			$this->o = 'N';
		}
	}

	public function turnLeft(){
		if($this->o === 'N'){
			$this->o = 'W';
		}

		elseif($this->o === 'W'){
			$this->o = 'S';
		}

		elseif($this->o === 'S'){
			$this->o = 'E';
		}

		elseif($this->o === 'E'){
			$this->o = 'N';
		}
	}

}