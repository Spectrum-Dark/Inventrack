<?php

class Properties
{
    private string $Name = "";
    private string $Email = "";
    private string $Password = "";

    public function SetName(string $name): void
    {
        $this->Name = $name;
    }

    public function GetName(): string
    {
        return $this->Name;
    }

    public function SetEmail(string $email): void
    {
        $this->Email = $email;
    }

    public function GetEmail(): string
    {
        return $this->Email;
    }

    public function SetPassword(string $password): void
    {
        $this->Password = $password;
    }

    public function GetPassword(): string
    {
        return $this->Password;
    }
}
