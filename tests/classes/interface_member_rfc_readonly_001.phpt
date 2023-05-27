--TEST--
Ensure an interface cannot have have readonly properties
--FILE--
<?php
interface I {
    public readonly string $foo;
}
echo "Done\n"
?>
--EXPECT--
Done
