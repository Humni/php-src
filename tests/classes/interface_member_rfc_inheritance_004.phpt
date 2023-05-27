--TEST--
Ensure a class must declare an interface property.
--FILE--
<?php
interface I1 {
    public int $foo;
}

class A implements I1 {

}

echo "Done\n";
?>
--EXPECTF--
Fatal error: Class A must implement interface property I1::$foo in %s on line 6
