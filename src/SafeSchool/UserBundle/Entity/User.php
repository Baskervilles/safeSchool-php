<?php

namespace SafeSchool\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     * apprenant - tuteur - dirigeant
     */
    private $userType;

    /**
     * @var ArrayCollection
     */
    private $etablissementVotes = null;

    /**
<<<<<<< HEAD
     * @var \AppBundle\Entity\Apprenant
     */
    private $apprenant;

    /**
     * @var \AppBundle\Entity\Tuteur
     */
    private $tuteur;
=======
     * @var int
     * Apprenant , tuteur or dirigeant id
     */
    private $ownerId;

    /**
     * @var \AppBundle\Entity\Etablissement
     */
    private $etablissementId;
>>>>>>> e3cf71c865805064fd6da76c0057bd222032bc35

    /**
     * Constructor
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->etablissementVotes = new ArrayCollection();
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
     * Add etablissementVote
     *
     * @param \AppBundle\Entity\Vote $etablissementVote
     *
     * @return User
     */
    public function addEtablissementVote(\AppBundle\Entity\Vote $etablissementVote)
    {
        $this->etablissementVotes[] = $etablissementVote;

        return $this;
    }

    /**
     * Remove etablissementVote
     *
     * @param \AppBundle\Entity\Vote $etablissementVote
     */
    public function removeEtablissementVote(\AppBundle\Entity\Vote $etablissementVote)
    {
        $this->etablissementVotes->removeElement($etablissementVote);
    }

    /**
     * Get etablissementVotes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtablissementVotes()
    {
        return $this->etablissementVotes;
    }

    /**
     * Set userType
     *
     * @param string $userType
     *
     * @return User
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set idEtablissement
     *
     * @param integer $idEtablissement
     *
     * @return User
     */
    public function setIdEtablissement($idEtablissement)
    {
        $this->idEtablissement = $idEtablissement;

        return $this;
    }

    /**
     * Get idEtablissement
     *
     * @return integer
     */
    public function getIdEtablissement()
    {
        return $this->idEtablissement;
    }

    /**
     * Set etablissementId
     *
     * @param integer $etablissementId
     *
     * @return User
     */
    public function setEtablissementId($etablissementId)
    {
        $this->etablissementId = $etablissementId;

        return $this;
    }

    /**
     * Get etablissementId
     *
     * @return integer
     */
    public function getEtablissementId()
    {
        return $this->etablissementId;
    }

    /**
     * Set ownerId
     *
     * @param integer $ownerId
     *
     * @return User
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Set apprenant
     *
     * @param \AppBundle\Entity\Apprenant $apprenant
     *
     * @return User
     */
    public function setApprenant(\AppBundle\Entity\Apprenant $apprenant = null)
    {
        $this->apprenant = $apprenant;

        return $this;
    }

    /**
     * Get apprenant
     *
     * @return \AppBundle\Entity\Apprenant
     */
    public function getApprenant()
    {
        return $this->apprenant;
    }

    /**
     * Set tuteur
     *
     * @param \AppBundle\Entity\Tuteur $tuteur
     *
     * @return User
     */
    public function setTuteur(\AppBundle\Entity\Tuteur $tuteur = null)
    {
        $this->tuteur = $tuteur;

        return $this;
    }

    /**
     * Get tuteur
     *
     * @return \AppBundle\Entity\Tuteur
     */
    public function getTuteur()
    {
        return $this->tuteur;
    }
}
