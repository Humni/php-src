--TEST--
Ensure a class must declare an interface property.
--FILE--
<?php
interface I1 {
    public int $foo;
}

class A implements I1 {

}

echo "Done\n";
?>
--EXPECT--
Fatal error: Property of I1::$foo must be declared in class A in %s on line 6
