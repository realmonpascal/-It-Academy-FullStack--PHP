<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/GrauVerificacio.php';

class GrauVerificacioTest extends TestCase {
    public function testPrimeraDivisio() {
        $this->assertEquals("Primera divisio", GrauVerificacio::verificar(60));
        $this->assertEquals("Primera divisio", GrauVerificacio::verificar(100));
    }

    public function testSegonaDivisio() {
        $this->assertEquals("Segona divisio", GrauVerificacio::verificar(45));
        $this->assertEquals("Segona divisio", GrauVerificacio::verificar(59));
    }

    public function testTerceraDivisio() {
        $this->assertEquals("Tercera divisio", GrauVerificacio::verificar(33));
        $this->assertEquals("Tercera divisio", GrauVerificacio::verificar(44));
    }

    public function testReprova() {
        $this->assertEquals("Reprovarà", GrauVerificacio::verificar(32));
        $this->assertEquals("Reprovarà", GrauVerificacio::verificar(0));
    }

    public function testNotaNegativa() {
        $this->assertEquals("La nota no puede ser negativa", GrauVerificacio::verificar(-5));
    }

    public function testNotaInvalida() {
        $this->assertEquals("Nota invàlida", GrauVerificacio::verificar(101));
    }
}