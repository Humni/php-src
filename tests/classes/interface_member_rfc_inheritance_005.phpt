--TEST--
Ensure a class cannot declare an interface property of different types.
--FILE--
<?php
interface I1 {
    public int $foo;
}

class A implements I1 {
    public string $foo;
}
?>
--EXPECT--
Fatal error: Type of A::$foo must be int (as in interface I1) in %s on line 6
