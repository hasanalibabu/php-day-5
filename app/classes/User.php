<?php


namespace App\classes;


class User
{
    protected $user = [];

    public function getAllUser()
    {
        $this->user = [
            0 => [
                'name'     => 'hasan',
                'mobile'   => '12453',
                'location' => 'lalbag',
            ],
            1 => [
                'name'     => 'hasan',
                'mobile'   => '12452',
                'location' => 'farmget',
            ],
        ];

    }
}