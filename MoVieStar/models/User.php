<?php

 class User{
    public $id;
    public $name;
    public $lastname;
    public $email;
    public $password;
    public $image;
    public $bio;
    public $token;
 }

 interface UserDAOInterface{
    //metodos que o DAO tem de ter nesse projeto
    public function builduser($data);//vai construir o objeto
    public function create(User $user, $authuser = false);//recebe um usuário que tbm vai fazer o login
    public function update(User $user);//para atualizar o usuário
    public function verifyToken($protected = false);//para deixar algumas rotas protegidas ao longo do sistema
    public function setTokenToSession($token, $redirect = true);//login
    public function authenticateUser($email, $password);//para fazer a autenticação completa junto com o setToken
    public function findByEmail($email);//para achar um usuário pelo email
    public function findById($id);//para achar um usuário pelo id
    public function findByToken($token);//para achar um usuário pelo token
    public function changePassword(User $user);

 }