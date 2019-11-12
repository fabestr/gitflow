<?php


class Hello
{
    public function sayHello()
    {
        echo 'hello';
    }

    public function sayHelloWorld()
    {
        $hello = $this->sayHello();
        echo $hello.' World!';
    }


}