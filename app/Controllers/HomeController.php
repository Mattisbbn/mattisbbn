<?php

namespace App\Controllers;
use Respect\Validation\Validator as v;



class HomeController
{
    public function index()
    {
        return view('home');
    }

    public function sendMail()
    {
        try {

            $email = htmlspecialchars($_POST['email']) ?? null;
            $name = htmlspecialchars($_POST['name']) ?? null;
            $subject = htmlspecialchars($_POST['subject']) ?? null;
            $message = htmlspecialchars($_POST['message']) ?? null;

            checkCSRF($_POST['CSRF_TOKEN']);


            if(!v::notEmpty()->email()->setName('email')->validate($email)){
                throw new \Exception('Email invalide');
            }
            if(!v::notEmpty()->notEmpty()->setName('name')->validate($name)){
                throw new \Exception('Nom invalide');
            }
            if(!v::notEmpty()->notEmpty()->setName('subject')->validate($subject)){
                throw new \Exception('Sujet invalide');
            }
            if(!v::notEmpty()->notEmpty()->setName('message')->validate($message)){
                throw new \Exception('Message invalide');
            }

            sendMail($email, $name, $subject, $message);

            $_SESSION['success'] = 'Email envoyé avec succès';
            header('Location: /#contact');
            exit;
            
        } catch (\Throwable $th) {
            $_SESSION['error'] = $th->getMessage();
            header('Location: /#contact');
            exit;
        }
      


        
        
    }
} 