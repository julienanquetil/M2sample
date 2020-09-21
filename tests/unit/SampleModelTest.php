<?php

namespace JulienAnquetil\m2sample;

use PHPUnit\Framework\TestCase;

class SampleModel extends TestCase {

    protected $_objectManager;
    protected $_model;
    /**
     * This function is called before the test runs.
     * Ideal for setting the values to variables or objects.
     */
    protected function setUp()
    {
        $this->_objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->_model = $this->_objectManager->getObject("JulienAnquetil\m2sample\Model\SampleModel");
    }

    /**
     * This function is called after the test runs.
     * Ideal for setting the values to variables or objects.
     */
    public function tearDown()
    {
    }

    /**
     * this function tests the result of the addition of two numbers
     *
     */
    public function testAdd()
    {
        $result = $this->_model->add(5, 5);
        $expectedResult = 10;
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * this function tests the result of the subtraction of two numbers
     *
     */
    public function testSubtract()
    {
        $result = $this->_model->subtract(5, 2);
        $expectedResult = 3;
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * this function tests the result of the multiplication of two numbers
     *
     */
    public function testMultiply()
    {
        $result = $this->_model->multiply(5, 3);
        $expectedResult = 15;
        $this->assertEquals($expectedResult, $result);
    }
}
