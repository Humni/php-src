--TEST--
Ensure an interface use the obsolete var
--FILE--
<?php
interface A {
    var $foo;
}
echo "Done\n";
?>
--EXPECT--
Done
