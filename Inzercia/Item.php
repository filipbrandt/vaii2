<?php


class Item
{
    private $id;
    private $title;
    private $text;
    private $cena;
    private $psc;
    private $purpose;
    private $email;
    private $phone;


    public function __construct($id, $title, $text, $cena, $psc, $purpose, $email, $phone)
    {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->cena = $cena;
        $this->psc = $psc;
        $this->purpose = $purpose;
        $this->email = $email;
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * @param mixed $cena
     */
    public function setCena($cena): void
    {
        $this->cena = $cena;
    }

    /**
     * @return mixed
     */
    public function getPsc()
    {
        return $this->psc;
    }

    /**
     * @param mixed $psc
     */
    public function setPsc($psc): void
    {
        $this->psc = $psc;
    }

    /**
     * @return mixed
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param mixed $purpose
     */
    public function setPurpose($purpose): void
    {
        $this->purpose = $purpose;
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
     */
    public function setEmail($email): void
    {
        $this->email = $email;
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
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }


}