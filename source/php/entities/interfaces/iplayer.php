<?php
interface IPlayer{
    public function getId();
    public function setId();

    public function getUsername();
    public function setUsername();

    public function getSaltedPassword();
    public function setSaltedPassword();

    public function getFirstName();
    public function setFirstName();

    public function getLastName();
    public function setLastName();

    public function getDateOfBirth();
    public function setDateOfBirth();
}
?>