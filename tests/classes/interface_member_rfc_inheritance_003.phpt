--TEST--
Ensure a class can declare an interface property.
--FILE--
<?php
interface I1 {
    public int $foo;
}

class A implements I1 {
    public int $foo = 0;
}

echo "Done\n";
?>
--EXPECT--
Done
