<?php

namespace Tests\Unit;

use App\Http\Controllers\Controller;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    /**
     * Test fungsi tambah.
     *
     * @return void
     */
    public function test_tambah()
    {
        $controller = new Controller();
        $tambah = $controller->tambah(2, 4);
        $this->assertEquals(6, $tambah);
    }
}
