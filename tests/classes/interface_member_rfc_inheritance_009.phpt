--TEST--
Ensure a property type matching is strict
--FILE--
<?php
interface I1 {
    public int $foo;
}

class A implements I1 {
    public mixed $foo;
}

echo "Done\n"
?>
--EXPECTF--
Fatal error: Type of A::$foo does not match the type declared in interface I1 in %s on line 6
