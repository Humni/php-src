--TEST--
Ensure an interface cannot have static members
--FILE--
<?php
interface I {
    public int $foo;
}
class A implements I {
    public static int $foo = 1;
}
?>
--EXPECTF--
Fatal error: Class property A::$foo cannot be static as it is declared in interface I in %s on line 5