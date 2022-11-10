<?php declare(strict_types=1);
final class Email
{
    private string $email;
    private string $firma;


    private function __construct(string $email, string $firma)
    {
        if(!empty($email))
        {
            $this->ensureIsValidEmail($email);
        }

        $this->firma = $firma;
        $this->email = $email;
    }

    public static function fromString(string $email): self
    {
        return new self($email, "");
    }

    public static function empty(): self
    {
        return new self("", "");
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
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function __toString(): string
    {
        return $this->email;
    }

    public function equals(self $other): bool
    {
        return $this->email === $other->getEmail();
    }

    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }

    

    /**
     * Get the value of firma
     */ 
    public function getFirma(): string
    {
        return $this->firma;
    }

    /**
     * Set the value of firma
     *
     * @return  self
     */ 
    public function setFirma($firma)
    {
        $this->firma = $firma;

        return $this;
    }
}