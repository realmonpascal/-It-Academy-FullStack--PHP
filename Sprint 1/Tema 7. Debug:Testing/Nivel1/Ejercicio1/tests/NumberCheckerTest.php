<?php
use PHPUnit\Framework\TestCase;

require_once 'src/NumberChecker.php'; // Asegúrate de que la ruta es correcta

class NumberCheckerTest extends TestCase {
    
   
    public function testIsEven() {
      
        $evenChecker = new NumberChecker(4);
        $this->assertTrue($evenChecker->isEven());
        
        $zeroChecker = new NumberChecker(0);
        $this->assertTrue($zeroChecker->isEven());
        
        $negativeEvenChecker = new NumberChecker(-2);
        $this->assertTrue($negativeEvenChecker->isEven());
        
        // Números impares (deberían devolver false)
        $oddChecker = new NumberChecker(3);
        $this->assertFalse($oddChecker->isEven());
        
        $negativeOddChecker = new NumberChecker(-1);
        $this->assertFalse($negativeOddChecker->isEven());
    }
    

    public function testIsPositive() {
       
        $positiveChecker = new NumberChecker(1);
        $this->assertTrue($positiveChecker->isPositive());
        
        $largePositiveChecker = new NumberChecker(PHP_INT_MAX);
        $this->assertTrue($largePositiveChecker->isPositive());
        
    
        $zeroChecker = new NumberChecker(0);
        $this->assertFalse($zeroChecker->isPositive());
        
        $negativeChecker = new NumberChecker(-1);
        $this->assertFalse($negativeChecker->isPositive());
        
        $largeNegativeChecker = new NumberChecker(PHP_INT_MIN);
        $this->assertFalse($largeNegativeChecker->isPositive());
    }
    
 
    public function testBoundaryCases() {
    
        $maxInt = new NumberChecker(PHP_INT_MAX);
        $this->assertTrue($maxInt->isPositive());
        $this->assertFalse($maxInt->isEven()); 
        
     
        $minInt = new NumberChecker(PHP_INT_MIN);
        $this->assertFalse($minInt->isPositive());
        $this->assertTrue($minInt->isEven());
    }
    

    public function testConstructorTypeHint() {
        $this->expectException(TypeError::class);
        new NumberChecker("no soy un número"); 
    }
}
?>