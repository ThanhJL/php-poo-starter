<?php

abstract class User
{
    private string $nom;
    private string $prénom;
    private string $email;

    /**
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom(string $nom): User
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prénom
     */ 
    public function getPrénom(): string
    {
        return $this->prénom;
    }

    /**
     * Set the value of prénom
     *
     * @return  self
     */ 
    public function setPrénom(string $prénom): User
    {
        $this->prénom = $prénom;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email): User
    {
        $this->email = $email;

        return $this;
    }
}