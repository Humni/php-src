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
Fatal error: Property I1::$foo of type int must be declared in class A in %s on line 6
