--TEST--
Ensure an interface can have have readonly properties
--FILE--
<?php
interface I1 {
    public readonly string $foo;
}
class A implements I1 {
    public readonly string $foo;

    public function __constructor() {
        $this->foo = "baa";
    }
}
echo "Done\n"
?>
--EXPECT--
Done
