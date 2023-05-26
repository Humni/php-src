--TEST--
Ensure an interfaces can declare the same members.
--FILE--
<?php
interface I1 {
    public int $foo;
}

interface I2 extends I1 {
    public int $foo;
}

echo "Done\n";
?>
--EXPECT--
Done
