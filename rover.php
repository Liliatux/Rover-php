<?php 

class Rover {
	private $x;
	private $y;
	private $orientation;
	private $compass = ['N', 'E', 'S', 'W'];

	public function __construct($x, $y, $orientation) {
		$this->x = $x;
		$this->y = $y;
		$this->orientation = $orientation;
	}

	public function getPosition() {
		return [
			$this->x,
			$this->y,
			$this->orientation
		];
	}

	public function forward(){
		$this->move(true);
	}

	public function backward(){
		$this->move(false);
	}

	public function move($forward){
		$tabX = ($forward) ? [0, 1, 0, -1] : [0, -1, 0, 1];
		$tabY = ($forward) ? [1, 0, -1, 0] : [-1, 0, 1, 0];
		$this->x += $tabX[$this->orientation];
		$this->y += $tabY[$this->orientation];
	}

	public function turnRight(){
		$this->turn(true);
	}

	public function turnLeft(){
		$this->turn(false);
	}
	public function turn($right){
		$maxIndex = count($this->compass) -1;
		if($right){
			$this->orientation = ($this->orientation < $maxIndex) ? $this->orientation + 1 :  0; 
		}
		else {
			$this->orientation = ($this->orientation > 0) ? $this->orientation -1 : $maxIndex;
		}

	}

}