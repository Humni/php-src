--TEST--
Ensure an interface cannot have static members
--FILE--
<?php
interface A {
    public static string $foo;
}
?>
--EXPECTF--
Fatal error: Interface property A::$foo cannot be static in %s on line 3
