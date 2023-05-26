--TEST--
An interface can have properties
--FILE--
<?php

interface if_a {
    public $member;
}
echo "Done\n";
?>
--EXPECTF--
Done
