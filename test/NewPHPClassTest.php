<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Test;

use PHPUnit\Framework\TestCase;

use App\NewPHPClass;

/**
 * Description of newPHPClassTest
 *
 * @author andrey
 */
class NewPHPClassTest extends TestCase{
    //put your code here
    
    public $my_object;
    
    protected function setUp(): void {
        $this->my_object = new NewPHPClass();
        
        parent::setUp();
        
        
        
        
    }
    
    
    public function testadd() {
        
        $this->assertEquals(2, $this->my_object->add(2, 1));
        
    }
    
    
}
