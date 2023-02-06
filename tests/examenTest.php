<?php

use PHPUnit\Framework\TestCase;

include './src/examen.php';

class examenTest extends TestCase
{

    public function test1()
    {
        $objeto = new examen(8);
        $this->assertEquals("aprovado", $objeto->comprobarNota());
    }
}
