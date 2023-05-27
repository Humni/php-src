--TEST--
Ensure a class cannot declare an interface property with a different visibility.
--FILE--
<?php
interface I1 {
    public int $foo;
}

class A implements I1 {
    private int $foo = 1;
}
?>
--EXPECTF--
Fatal error: Class property A::$foo must be public as in interface I1 in %s on line 6
