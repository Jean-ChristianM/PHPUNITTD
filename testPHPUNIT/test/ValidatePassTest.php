<?php

class ValidatePassTest Extends PHPUnit_Framework_TestCase {
    public function testValidLength(){
        $valpass = new ValidatePass();
        $this->assertFalse ($valpass->ValidLength ('1234'));
    }
}

