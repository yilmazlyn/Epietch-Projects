<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


    /**
     * @Route("/editProfile/{id}", name="editProfileUser")
     */
    public function editProfileUser($id)
    {
        //$id = $this->getUser()->getId();

        $user = $this->getDoctrine()
            ->getRepository(Users::class)
            ->find($id);

        return $this->render('user/editProfile.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/saveUser/{id}", name="editProfile", methods={"POST"})
     */
    public function saveProfileUser(Request $request, $id, UserPasswordEncoderInterface $encoder)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(Users::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id ' . $id
            );
        }

        $username = $request->request->get('username');


        $password = $request->request->get('password');
        $confirm_password = $request->request->get('passwordConfirm');

        if ($password == "" && $confirm_password == "") {
            $user->setUsername($username);

            $this->getDoctrine()->getManager()->flush();

        }
        if ($password != "" && $confirm_password != "" && $password == $confirm_password) {
            $encoded = $encoder->encodePassword($user, $password);

            $user->setUsername($username);
            $user->setPassword($encoded);

            $this->getDoctrine()->getManager()->flush();
        }

        if ((!isset($password) || $password == "") || (isset($confirm_password) && $confirm_password == "") || $password != $confirm_password) {

            return $this->render('user/editProfile.html.twig', [
                'user' => $user,
                'password_erreur' => 'The passwords should be the same.'
            ]);
        }

        return $this->redirect('/home');


    }

    /**
     * @Route("/deleteUser/", name="deleteUser", methods={"POST"})
     */
    public function deleteUser(Request $request)
    {
        $id= $request->request->get('id');
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(Users::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id ' . $id
            );
        }

        $users = $this->getDoctrine()
            ->getRepository(Users::class)
            ->findAll();

        $entityManager->remove($user);
        $entityManager->flush();

        return $this->render('user/usersListForAdmin.html.twig', [
            'success' => 'true',
            'users' => $users
        ]);
    }

    /**
     * @Route("/deleteUserAccount/{id}", name="deleteUserAccount", methods={"POST"})
     */
    public function deleteUserAccount(Request $request, $id)
    {
        $id = $request->request->get('id');
        $password = $request->request->get('password');

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(Users::class)->find($id);

        $hashPassword = $user->getPassword();

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id ' . $id
            );
        }
        if (password_verify($password, $hashPassword))
        {
            $entityManager->remove($user);
            $entityManager->flush();

            session_unset();
            session_destroy();

            return $this->json([
                'passwordError' => '',
                'success' => 'deleted',
            ]);
        } else {
            return $this->json( [
                'passwordError' => 'Password is not correct',
                'success' => '',
            ]);
        }


    }

    /**
     * @Route("/editProfileAdmin/{id}", name="editProfileAdmin")
     */
    public function editProfileAdmin($id)
    {
        $user = $this->getDoctrine()
            ->getRepository(Users::class)
            ->find($id);

        return $this->render('user/editProfileAdmin.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/saveUserAdmin/{id}", name="saveProfileAdmin", methods={"POST"})
     */
    public function saveProfileAdmin(Request $request, $id, UserPasswordEncoderInterface $encoder)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(Users::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id ' . $id
            );
        }

        $username = $request->request->get('username');
        $isBanned = $request->request->get('isBanned');

        if ($isBanned == 'isNotBanned') {
            $isBanned = 0;

        } else {
            $isBanned = 1;
        }

        $password = $request->request->get('password');
        $confirm_password = $request->request->get('passwordConfirm');

        if ($password == "" && $confirm_password == "") {
            $user->setUsername($username);
            $user->setIsBanned($isBanned);

            $this->getDoctrine()->getManager()->flush();

        }
        if ($password != "" && $confirm_password != "" && $password == $confirm_password) {
            $encoded = $encoder->encodePassword($user, $password);

            $user->setUsername($username);
            $user->setPassword($encoded);
            $user->setIsBanned($isBanned);

            $this->getDoctrine()->getManager()->flush();

        }

        if ($password != "" && $confirm_password != "" && $password != $confirm_password) {

            return $this->render('user/editProfileAdmin.html.twig', [
                'user' => $user,
                'password_erreur' => 'The passwords should be the same.'
            ]);
        }

        $users = $this->getDoctrine()
            ->getRepository(Users::class)
            ->findAll();

        return $this->render('user/usersListForAdmin.html.twig', [
            'users' => $users
        ]);


    }

    /**
     * @Route("/admin", name="amdin")
     */
    public function adminPanel()
    {
        $users = $this->getDoctrine()
            ->getRepository(Users::class)
            ->findAll();

        $userCount = count($users);

        return $this->render('user/dashboard.html.twig', [
            'userCount' => $userCount,
        ]);
    }

    /**
     * @Route("/users", name="users")
     */
    public function getUsers()
    {

        $users = $this->getDoctrine()
            ->getRepository(Users::class)
            ->findAll();

        return $this->render('user/users.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/usersAdmin", name="usersAdmin")
     */
    public function getUsersForAdmin()
    {

        $users = $this->getDoctrine()
            ->getRepository(Users::class)
            ->findAll();

        return $this->render('user/usersListForAdmin.html.twig', [
            'users' => $users,
        ]);
    }
}
