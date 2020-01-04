<?php
include './config/fbConfig.php';
include './config/cloudinary.php';
require './config/bootstrap.php';

        if (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
            unset($_SESSION['oauth2state']);
            echo 'Invalid state.';
            exit;
        }

        $token = $provider->getAccessToken('authorization_code', [
                'code' => $_GET['code']
                ]);

    try {
       
        $userFb = $provider->getResourceOwner($token);
        $isUserExist = User::where('fb_id', $userFb->getId())->first();

        if (!isset($isUserExist)) {
            $picture = \Cloudinary\Uploader::upload($userFb->getPictureUrl());
            User::create([
                'fb_id'         => $userFb->getId(),
                'nama'          => $userFb->getName(),
                'email'         => $userFb->getEmail(),
                'jenis_kelamin' => '',
                'foto'          => $picture['secure_url'],
                'type_user'     => ''
            ]);

            $_SESSION['user'] = array(
                "nama_user" => $userFb->getName(),
                "fb_id" => $userFb->getId(),
            );
            header("Location: lengkapi-profile.php");
        } else if ($isUserExist->jenis_kelamin == '' || $isUserExist->type_user == '') {
            $_SESSION['user'] = array(
                "nama_user" => $userFb->getName(),
                "fb_id" => $userFb->getId(),
            );
     
            header("Location: lengkapi-profile.php");
        }   else {
            $_SESSION['user'] = array(
                'id_user' => $isUserExist->id_user,
                "nama_user" => $userFb->getName(),
                "fb_id" => $userFb->getId(),
                "type_user" => $isUserExist->type_user
            );
            header('Location: index.php');
        }


    } catch (\Exception $e) {
        exit('Oh dear...');
    }
