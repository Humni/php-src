--TEST--
Ensure an interface can have have readonly properties
--FILE--
<?php
interface I {
    public readonly string $foo;
}
echo "Done\n"
?>
--EXPECT--
Done
