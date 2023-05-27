--TEST--
Ensure an interface cannot have protected members
--FILE--
<?php
interface A {
    protected string $foo;
}
?>
--EXPECTF--
Fatal error: Access type for interface property A::$foo must be public in %s on line 3
