<?php 

use PHPUnit\Framework\TestCase;

class TestRover extends TestCase {

	public function testInstanceOfRover(){
		$this->assertInstanceOf(
			Rover::class,
			new Rover(0, 0, 'N')
		);
	}

	public function testGetPositionOfRover() {
		$rover = new Rover(1, 2, 'S');
		$this->assertEquals([1, 2, 'S'], $rover->getPosition());

	}

	public function testGoForwardOfRover(){
		$rover = new Rover (1, 2, 'S');
		$rover->forward();
		$this->assertEquals([1, 1, 'S'], $rover->getPosition());

		$rover = new Rover(0, 1, 'N');
		$rover->forward();
		$this->assertEquals([0, 2, 'N'], $rover->getPosition());

		$rover = new Rover(0, 0, 'W');
		$rover->forward();
		$this->assertEquals([-1, 0, 'W'], $rover->getPosition());

		$rover = new Rover(0, 0, 'E');
		$rover->forward();
		$this->assertEquals([1, 0, 'E'], $rover->getPosition());
	}

	public function testGoBackwardOfRover(){
		$rover = new Rover(0, 0, 'S');
		$rover->backward();
		$this->assertEquals([0, 1, 'S'], $rover->getPosition());

		$rover = new Rover(0, 0, 'N');
		$rover->backward();
		$this->assertEquals([0, -1, 'N'], $rover->getPosition());

		$rover = new Rover(0, 0, 'W');
		$rover->backward();
		$this->assertEquals([1, 0, 'W'], $rover->getPosition());

		$rover = new Rover(0, 0, 'E');
		$rover->backward();
		$this->assertEquals([-1, 0, 'E'], $rover->getPosition());
	}

	public function testTurnRightOfRover(){
		$rover = new Rover(0, 0, 'N');
		$rover->turnRight();
		$this->assertEquals([0, 0, 'E'], $rover->getPosition());

		$rover = new Rover(0, 0, 'E');
		$rover->turnRight();
		$this->assertEquals([0, 0, 'S'], $rover->getPosition());

		$rover = new Rover(0, 0, 'S');
		$rover->turnRight();
		$this->assertEquals([0, 0, 'W'], $rover->getPosition());

		$rover = new Rover (0, 0, 'W');
		$rover->turnRight();
		$this->assertEquals([0, 0, 'N'], $rover->getPosition());
	}

	public function testTurnLeftOfRover() {
		$rover = new Rover(0, 0, 'N');
		$rover->turnLeft();
		$this->assertEquals([0, 0, 'W'], $rover->getPosition());

		$rover = new Rover(0, 0, 'W');
		$rover->turnLeft();
		$this->assertEquals([0, 0, 'S'], $rover->getPosition());

		$rover = new Rover(0, 0, 'S');
		$rover->turnLeft();
		$this->assertEquals([0, 0, 'E'], $rover->getPosition());

		$rover = new Rover(0, 0, 'E');
		$rover->turnLeft();
		$this->assertEquals([0, 0, 'N'], $rover->getPosition());
	}
}