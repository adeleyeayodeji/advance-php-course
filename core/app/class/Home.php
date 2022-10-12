<?php
class Home
{
    public function index()
    {
        return Render::view('home/welcome');
    }
}
