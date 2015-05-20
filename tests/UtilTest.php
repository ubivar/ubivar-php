<?php

namespace Ubivar;

class UtilTest extends TestCase
{
    public function testIsList()
    {
        $list = array(5, 'nstaoush', array());
        $this->assertTrue(Util\Util::isList($list));

        $notlist = array(5, 'nstaoush', array(), 'bar' => 'baz');
        $this->assertFalse(Util\Util::isList($notlist));
    }

    public function testThatPHPHasValueSemanticsForArrays()
    {
        $original = array('php-arrays' => 'value-semantics');
        $derived = $original;
        $derived['php-arrays'] = 'reference-semantics';

        $this->assertSame('value-semantics', $original['php-arrays']);
    }

}
