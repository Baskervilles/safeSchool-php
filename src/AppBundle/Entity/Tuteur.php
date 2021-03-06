<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tuteur
 */
class Tuteur extends PersonneSuperClass
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $profession;

    /**
     * @var string
     */
    private $lienParente;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $apprenants;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->apprenants = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return Tuteur
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set lienParente
     *
     * @param string $lienParente
     *
     * @return Tuteur
     */
    public function setLienParente($lienParente)
    {
        $this->lienParente = $lienParente;

        return $this;
    }

    /**
     * Get lienParente
     *
     * @return string
     */
    public function getLienParente()
    {
        return $this->lienParente;
    }

    /**
     * Add apprenant
     *
     * @param \AppBundle\Entity\Apprenant $apprenant
     *
     * @return Tuteur
     */
    public function addApprenant(\AppBundle\Entity\Apprenant $apprenant)
    {
        $this->apprenants[] = $apprenant;

        return $this;
    }

    /**
     * Remove apprenant
     *
     * @param \AppBundle\Entity\Apprenant $apprenant
     */
    public function removeApprenant(\AppBundle\Entity\Apprenant $apprenant)
    {
        $this->apprenants->removeElement($apprenant);
    }

    /**
     * Get apprenants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApprenants()
    {
        return $this->apprenants;
    }
    /**
     * @var \SafeSchool\UserBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \SafeSchool\UserBundle\Entity\User $user
     *
     * @return Tuteur
     */
    public function setUser(\SafeSchool\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \SafeSchool\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
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
}
