<?php
class Home extends Controller
{
    public function index()
    {
        $this->loadView('Home');
    }
}
$home = new Home;
call_user_func_array([$home,'index'],[]);
