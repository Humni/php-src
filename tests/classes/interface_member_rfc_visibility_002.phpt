--TEST--
Ensure that default visibility of interface properties is public
--FILE--
<?php
interface A {
    $foo;
}

echo "Done\n";
?>
--EXPECT--
Done
