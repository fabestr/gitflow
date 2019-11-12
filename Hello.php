<?php


class Hello
{
    public function sayHello()
    {
        echo 'hello';
    }

    public function sayHelloWorld()
    {
        echo $this->sayHello().' World';
    }

}