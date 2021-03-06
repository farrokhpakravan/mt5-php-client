<?php


namespace Farrokhpakravan\Mt5PhpClient\DTOs;


/**
 * Class User
 * @package Farrokhpakravan\Mt5PhpClient\DTOs
 */
class User implements \JsonSerializable
{
    protected $login;

    protected $name;

    protected $email;

    protected $main_password;

    protected $group;

    protected $leverage;

    protected $zip_code;

    protected $country;

    protected $state;

    protected $city;

    protected $address;

    protected $phone;

    protected $phone_password;

    protected $investor_password;

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMainPassword()
    {
        return $this->main_password;
    }

    /**
     * @param mixed $main_password
     *
     * @return User
     */
    public function setMainPassword($main_password)
    {
        $this->main_password = $main_password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param mixed $group
     *
     * @return User
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLeverage()
    {
        return $this->leverage;
    }

    /**
     * @param mixed $leverage
     *
     * @return User
     */
    public function setLeverage($leverage)
    {
        $this->leverage = $leverage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * @param mixed $zip_code
     *
     * @return User
     */
    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     *
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     *
     * @return User
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     *
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhonePassword()
    {
        return $this->phone_password;
    }

    /**
     * @param mixed $phone_password
     *
     * @return User
     */
    public function setPhonePassword($phone_password)
    {
        $this->phone_password = $phone_password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvestorPassword()
    {
        return $this->investor_password;
    }

    /**
     * @param mixed $investor_password
     *
     * @return User
     */
    public function setInvestorPassword($investor_password)
    {
        $this->investor_password = $investor_password;

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'login' => $this->getLogin(),
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'main_password' => $this->getMainPassword(),
            'group' => $this->getGroup(),
            'leverage' => $this->getLeverage(),
            'zip_code' => $this->getZipCode(),
            'country' => $this->getCountry(),
            'state' => $this->getState(),
            'city' => $this->getCity(),
            'address' => $this->getAddress(),
            'phone' => $this->getPhone(),
            'phone_password' => $this->getPhonePassword(),
            'investor_password' => $this->getInvestorPassword(),
        ];
    }

}
