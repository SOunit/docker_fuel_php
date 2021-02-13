<?php

class Controller_Home extends Controller
{
    public function action_index()
    {
        $data = array();
        $data['username'] = 'Joe14';
        $data['title'] = 'Home';

        // set variable to views
        // view/index
        // view/home/index
        return View::forge('index', $data);
    }
}
