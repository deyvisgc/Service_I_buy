<?php


namespace App\Repositorio;
use App\Interfaces\InterfaceLogin;
use App\User;

/**

 */
class loginRepositorio implements InterfaceLogin
{
    /**
     * @var User
     */
    private $user;


    /**
     * loginRepositorio constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {

        $this->user = $user;
    }

    public function autoentication($data)
    {


        // TODO: Implement autoentication() method.
    }

    public function cerar($data)
    {
        // TODO: Implement cerar() method.
    }

    public function alla()
    {
        return $this->user->all();
        // TODO: Implement all() method.
    }
}
