<?php

class UserManager {
    public function getUser(){
        $user = [
            'login' => 'root',
            'password' => 'root',
            'email' => 'user@email.fr',
        ];
        return $user;
    }
}