<?php

/**
 * Created by PhpStorm.
 * User: matth
 * Date: 15.09.2017
 * Time: 12:05
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contact")
 */
class Contact
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $FirstName;
    /**
     * @ORM\Column(type="string")
     */
    private $LastName;
    /**
     * @ORM\Column(type="string")
     */
    private $Email;
    /**
     * @ORM\Column(type="string")
     */
    private $Phone;
    /**
     * @ORM\Column(type="string")
     */
    private $Message;
}