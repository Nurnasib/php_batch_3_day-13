<?php


namespace App\classes;


class User
{
    protected $user = [];
    public function getAllUser()
    {
        $this->user = [
            0 => [
                'name' => 'Nur E Nasib',
                'mobile' => '325645',
                'Location' => 'London'
            ],
            1 => [
                'name' => 'Shehon Khan',
                'mobile' => '5625634',
                'Location' => 'Paris'
            ]
        ];
        return $this->user;
    }
}