<?php

function greet(string $name = null): void
{
    echo "Hello, " . ($name ?? "Guest") . "!\n";
}

greet(); // Deprecated: Implicitly allowing null for parameter $name





//class User
//{
//    public string $name {
//        set {
//            $this->name = $value;
//        }
//    }
//
//    public string $email {
//        set {
//            $this->email = $value;
//        }
//    }
//}
//
//$tmp = new User();
//$tmp->name = 'John Doe';
//$tmp->email = 'john@doe.com';