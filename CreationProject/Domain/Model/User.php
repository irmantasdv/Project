<?php
namespace CreationProject\Domain\Model;

    /**
     * User Class
     */
class User
{

    private string $firstName;
    /**
     * @var int
     */
    private int $age;
    /**
     * @var string
     */
    private string $gender;

    /**
     * @param string $firstName
     * @param int $age
     * @param string $gender
     */
    public function __construct(string $firstName, int $age, string $gender)
    {
        $this->firstName = $firstName;
        $this->age = $age;
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }



}