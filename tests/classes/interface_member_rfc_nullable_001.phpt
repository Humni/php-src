--TEST--
Ensure an interface can have nullable properties
--FILE--
<?php
interface A {
    public ?string $foo;
}
echo "Done\n";
?>
--EXPECT--
Done
