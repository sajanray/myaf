<?php
namespace Hello;#这个命名空间就是上面autoload配置中的啦
class Hello {
    public function say_hello() {
        exit('hello world');    
    }
}