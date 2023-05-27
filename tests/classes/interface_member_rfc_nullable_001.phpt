--TEST--
Ensure an interface cannot have nullable properties
--FILE--
<?php
interface A {
    public ?string $foo;
}
echo "Done\n";
?>
--EXPECT--
Done
