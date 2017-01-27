<?php 

use PHPUnit\Framework\TestCase;

class TestRover extends TestCase {

	public function testInstanceOfRover(){
		$this->assertInstanceOf(
			Rover::class,
			new Rover(0, 0, 0)
		);
	}

	public function testGetPositionOfRover() {
		$rover = new Rover(1, 2, 2);
		$this->assertEquals([1, 2, 2], $rover->getPosition());

	}

	public function testGoForwardOfRover(){
		$rover = new Rover (1, 2, 2);
		$rover->forward();
		$this->assertEquals([1, 1, 2], $rover->getPosition());

		$rover = new Rover(0, 1, 0);
		$rover->forward();
		$this->assertEquals([0, 2, 0], $rover->getPosition());

		$rover = new Rover(0, 0, 3);
		$rover->forward();
		$this->assertEquals([-1, 0, 3], $rover->getPosition());

		$rover = new Rover(0, 0, 1);
		$rover->forward();
		$this->assertEquals([1, 0, 1], $rover->getPosition());
	}

	public function testGoBackwardOfRover(){
		$rover = new Rover(0, 0, 2);
		$rover->backward();
		$this->assertEquals([0, 1, 2], $rover->getPosition());

		$rover = new Rover(0, 0, 0);
		$rover->backward();
		$this->assertEquals([0, -1, 0], $rover->getPosition());

		$rover = new Rover(0, 0, 3);
		$rover->backward();
		$this->assertEquals([1, 0, 3], $rover->getPosition());

		$rover = new Rover(0, 0, 1);
		$rover->backward();
		$this->assertEquals([-1, 0, 1], $rover->getPosition());
	}

	public function testTurnRightOfRover(){
		$rover = new Rover(0, 0, 0);
		$rover->turnRight();
		$this->assertEquals([0, 0, 1], $rover->getPosition());

		$rover = new Rover(0, 0, 1);
		$rover->turnRight();
		$this->assertEquals([0, 0, 2], $rover->getPosition());

		$rover = new Rover(0, 0, 2);
		$rover->turnRight();
		$this->assertEquals([0, 0, 3], $rover->getPosition());

		$rover = new Rover (0, 0, 3);
		$rover->turnRight();
		$this->assertEquals([0, 0, 0], $rover->getPosition());
	}

	public function testTurnLeftOfRover() {
		$rover = new Rover(0, 0, 0);
		$rover->turnLeft();
		$this->assertEquals([0, 0, 3], $rover->getPosition());

		$rover = new Rover(0, 0, 3);
		$rover->turnLeft();
		$this->assertEquals([0, 0, 2], $rover->getPosition());

		$rover = new Rover(0, 0, 2);
		$rover->turnLeft();
		$this->assertEquals([0, 0, 1], $rover->getPosition());

		$rover = new Rover(0, 0, 1);
		$rover->turnLeft();
		$this->assertEquals([0, 0, 0], $rover->getPosition());
	}
}