<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="listy_zakupow")
 */
class ListaZakupow extends BaseEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="decimal", precision=9, scale=2)
     */
    protected $koszt;

    /**
     * @ORM\Column(type="integer")
     */
    protected $data;

    /**
     * @ORM\Column(type="text")
     */
    protected $opis;

    /**
     * @ORM\ManyToOne(targetEntity="Dostawca", inversedBy="listyZakupow")
     */
    protected $dostawca;

    /**
     * @ORM\OneToMany(targetEntity="Zakup", mappedBy="listaZakupow")
     */
    protected $zakupy;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->zakupy = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set koszt
     *
     * @param float $koszt
     * @return ListaZakupow
     */
    public function setKoszt($koszt)
    {
        $this->koszt = $koszt;

        return $this;
    }

    /**
     * Get koszt
     *
     * @return float
     */
    public function getKoszt()
    {
        return $this->koszt;
    }

    /**
     * Set data
     *
     * @param integer $data
     * @return ListaZakupow
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return integer
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set opis
     *
     * @param string $opis
     * @return ListaZakupow
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set dostawca
     *
     * @param \ZPI\WarsztatBundle\Entity\Dostawca $dostawca
     * @return ListaZakupow
     */
    public function setDostawca(\ZPI\WarsztatBundle\Entity\Dostawca $dostawca = null)
    {
        $this->dostawca = $dostawca;

        return $this;
    }

    /**
     * Get dostawca
     *
     * @return \ZPI\WarsztatBundle\Entity\Dostawca
     */
    public function getDostawca()
    {
        return $this->dostawca;
    }

    /**
     * Add zakupy
     *
     * @param \ZPI\WarsztatBundle\Entity\Zakup $zakupy
     * @return ListaZakupow
     */
    public function addZakupy(\ZPI\WarsztatBundle\Entity\Zakup $zakupy)
    {
        $this->zakupy[] = $zakupy;

        return $this;
    }

    /**
     * Remove zakupy
     *
     * @param \ZPI\WarsztatBundle\Entity\Zakup $zakupy
     */
    public function removeZakupy(\ZPI\WarsztatBundle\Entity\Zakup $zakupy)
    {
        $this->zakupy->removeElement($zakupy);
    }

    /**
     * Get zakupy
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getZakupy()
    {
        return $this->zakupy;
    }
}
