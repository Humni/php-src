--TEST--
Ensure that default visibility of interface properties is public
--FILE--
<?php
interface A {
    var $foo;
}

echo "Done\n";
?>
--EXPECT--
Done
