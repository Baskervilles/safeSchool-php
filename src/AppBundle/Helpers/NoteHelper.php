<?php

namespace AppBundle\Helpers;

/**
 * NoteHelperInfoOne
 */
class NoteHelper
{
  /**
   * @var NoteHelperInfoOne
   */
  private $noteHelperInfoOne;

  /**
   * @var \Doctrine\Common\Collections\Collection
   */
  private $noteHelperInfoTwos;

  /**
   * Constructor
   */
  public function __construct()
  {
      $this->noteHelperInfoTwos = new \Doctrine\Common\Collections\ArrayCollection();
  }


    /**
     * Get the value of Note Helper Info One
     *
     * @return NoteHelperInfoOne
     */
    public function getNoteHelperInfoOne()
    {
        return $this->noteHelperInfoOne;
    }

    /**
     * Set the value of Note Helper Info One
     *
     * @param NoteHelperInfoOne noteHelperInfoOne
     *
     * @return self
     */
    public function setNoteHelperInfoOne(NoteHelperInfoOne $noteHelperInfoOne)
    {
        $this->noteHelperInfoOne = $noteHelperInfoOne;

        return $this;
    }

    /**
     * Get the value of Note Helper Info Twos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNoteHelperInfoTwos()
    {
        return $this->noteHelperInfoTwos;
    }

    /**
     * Set the value of Note Helper Info Twos
     *
     * @param \Doctrine\Common\Collections\Collection noteHelperInfoTwos
     *
     * @return self
     */
    public function setNoteHelperInfoTwos(\Doctrine\Common\Collections\Collection $noteHelperInfoTwos)
    {
        $this->noteHelperInfoTwos = $noteHelperInfoTwos;

        return $this;
    }

}
