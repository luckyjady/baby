<?php
namespace app\index\controller;

class Diary
{
    public function index()
    {
        return 'diary index';
    }
    
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}