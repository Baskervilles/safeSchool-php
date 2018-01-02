<?php

namespace AppBundle\Helpers;

/**
 * NoteHelperInfoOne
 */
class NoteHelperInfoTwo
{
  /**
   * @var integer
   */
  private $id_apprenant;

  /**
   * @var double
   */
  private $note;

  /**
   * Set id_apprenant
   *
   * @param integer $id_apprenant
   *
   * @return integer
   */
  public function setIdApprenant($id)
  {
      $this->id_apprenant = $id;

      return $this->id_apprenant;
  }

  /**
   * Get id_apprenant
   *
   * @return integer
   */
  public function getIdApprenant()
  {
      return $this->id_apprenant;
  }

  /**
   * Set note
   *
   * @param double $note
   *
   * @return double
   */
  public function setNote($note)
  {
      $this->note = $note;

      return $this->note;
  }

  /**
   * Get note
   *
   * @return double
   */
  public function getNote()
  {
      return $this->note;
  }
}
