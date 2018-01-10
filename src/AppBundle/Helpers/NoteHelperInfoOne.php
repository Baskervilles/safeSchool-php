<?php

namespace AppBundle\Helpers;

/**
 * NoteHelperInfoOne
 */
class NoteHelperInfoOne
{
  /**
   * @var string
   */
  private $typeNote;

  /**
   * @var integer
   */
  private $id_matiere;

  /**
   * @var integer
   */
  private $id_sousClasse;

  /**
   * Set id_matiere
   *
   * @param integer $id_matiere
   *
   * @return integer
   */
  public function setIdMatiere($id)
  {
      $this->id_matiere = $id;

      return $this->id_matiere;
  }

  /**
   * Get id_matiere
   *
   * @return integer
   */
  public function getIdMatiere()
  {
      return $this->id_matiere;
  }

  /**
   * Set typeNote
   *
   * @param double $typeNote
   *
   * @return double
   */
  public function setTypeNote($typeNote)
  {
      $this->typeNote = $typeNote;

      return $this->typeNote;
  }

  /**
   * Get typeNote
   *
   * @return double
   */
  public function getTypeNote()
  {
      return $this->typeNote;
  }

  /**
   * Set id_sousClasse
   *
   * @param integer $id_sousClasse
   *
   * @return integer
   */
  public function setIdSousClasse($id)
  {
      $this->id_sousClasse = $id;

      return $this->id_sousClasse;
  }

  /**
   * Get id_sousClasse
   *
   * @return integer
   */
  public function getIdSousClasse()
  {
      return $this->id_sousClasse;
  }
}
