--TEST--
Ensure a property can be declared an extended class when implementing an interface
--FILE--
<?php
interface I1 {
    public int $foo;
}

class A {
    public int $foo = 0;
}

class B extends A implements I1 {}

echo "Done\n"
?>
--EXPECT--
Done
