--TEST--
Ensure an interfaces cannot declare the same member of different types.
--FILE--
<?php
interface I1 {
    public int $foo;
}

interface I2 extends I1 {
    public string $foo;
}
?>
--EXPECTF--
Fatal error: Type of I2::$foo does not match the type declared in interface I1 in %s on line 6
