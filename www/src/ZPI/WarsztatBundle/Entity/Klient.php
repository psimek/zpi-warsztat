<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="klienci")
 */
class Klient extends BaseEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=256)
     */
    protected $imie;

    /**
     * @ORM\Column(type="string", length=256)
     */
    protected $nazwisko;

    /**
     * @ORM\Column(type="string", length=256)
     */
    protected $email;

    /**
     * @ORM\OneToMany(targetEntity="Zlecenie", mappedBy="klient")
     **/
    protected $zlecenia;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->zlecenia = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set imie
     *
     * @param string $imie
     * @return Klient
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     * @return Klient
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Klient
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add zlecenia
     *
     * @param \ZPI\WarsztatBundle\Entity\Zlecenie $zlecenia
     * @return Klient
     */
    public function addZlecenia(\ZPI\WarsztatBundle\Entity\Zlecenie $zlecenia)
    {
        $this->zlecenia[] = $zlecenia;

        return $this;
    }

    /**
     * Remove zlecenia
     *
     * @param \ZPI\WarsztatBundle\Entity\Zlecenie $zlecenia
     */
    public function removeZlecenia(\ZPI\WarsztatBundle\Entity\Zlecenie $zlecenia)
    {
        $this->zlecenia->removeElement($zlecenia);
    }

    /**
     * Get zlecenia
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getZlecenia()
    {
        return $this->zlecenia;
    }
}
