--TEST--
Ensure a property can be declared using the construct shorthand
--FILE--
<?php
interface I1 {
    public int $foo;
}

class A {
    public function __construct(public int $foo = 0){}
}

echo "Done\n"
?>
--EXPECT--
Done
