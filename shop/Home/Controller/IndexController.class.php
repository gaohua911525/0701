<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

	 public function hello(){
         $this->display();
    }

	public function abc(){
        echo "Hello abc!";
    }
}