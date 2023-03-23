<?php

namespace App\Tests;
require('vendor/autoload.php');
use PHPUnit\Framework\TestCase;
use App\Entity\User;
use App\SpamChecker;
use App\DataFixtures\UserFixtures;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Contracts\HttpClient\ResponseInterface;
class UserTest extends TestCase
{
    private  $user;

    public function setUp() : void
    {


        $this->user= new User();
        $this->user->setPassword(12345678);
        $this->user->setRoles(['User']);
        $this->user->setEmail('sasha.babenko.2016@gmail.com');

    }
    public function tearDown() : void
    {

    }
    public function testPassword() : void
    {
        $this->assertnotEquals(null,$this->user->getPassword());

    }
    public function testPasswordTrue() : void
    {
        $this->assertEquals(12345678,$this->user->getPassword());
    }
    public function testEmail() : void
    {
        $this->assertnotEquals(null,$this->user->getEmail());

    }
    public function testEmailTrue() : void
    {
        $this->assertEquals('sasha.babenko.2016@gmail.com',$this->user->getEmail());
    }

    public function testRole() : void
    {
        $this->assertnotEquals(null,$this->user->getRoles());

    }
    public function testRoleTrue() : void
    {
        $this->assertEquals(['User','USER'],$this->user->getRoles());

    }


}
