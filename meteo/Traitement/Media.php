<?php
class Media
{
  private $_nom;
  private $_name;
  private $_identifiant;
  private $_password;
  private $_nomfilm;
  private $_realisateur;
  private $_duree;
  private $_idsup;
  private $_info;

public function __construct(array $donnees)
{
  $this->hydrate($donnees);
}
  // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      // On récupère le nom du setter correspondant à l'attribut.
      $method = 'set'.ucfirst($key);
      // Si le setter correspondant existe.
      if (method_exists($this, $method))
      {
        // On appelle le setter.
        $this->$method($value);
      }
    }
  }



    public function getnom() { return $this->_nom; }
    public function getname() { return $this->_name; }
    public function getidentifiant() { return $this->_identifiant; }
    public function getpassword() { return $this->_password; }
    public function getnomfilm() { return $this->_nomfilm; }
    public function getrealisateur() { return $this->_realisateur; }
    public function getduree() { return $this->_duree; }
public function getinfo() { return $this ->_info; }
    public function getidsup() { return $this ->_idsup; }


  public function setNom($nom)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    // Dont la longueur est inférieure à 30 caractères.
    if (is_string($nom) && strlen($nom) <= 30)
    {
      $this->_nom = $nom;
    }
  }
  public function setIdentifiant($identifiant)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    // Dont la longueur est inférieure à 30 caractères.
    if (is_string($identifiant) && strlen($identifiant) <= 30)
    {
      $this->_identifiant = $identifiant;
    }
  }
  public function setPassword($password)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    // Dont la longueur est inférieure à 30 caractères.
    if (is_string($password) && strlen($password) <= 30)
    {
      $this->_password = $password;
    }
  }

  public function setNomfilm($nomfilm)
  {
      $this->_nomfilm = $nomfilm;
  }
  public function setRealisateur($realisateur)
  {
      $this->_realisateur = $realisateur;
  }
  public function setDuree($duree)
  {
      $this->_duree = $duree;
  }

  public function setInfo($info)
  {
      $this->_info = $info;
  }
  public function setName($name)
  {
      $this->_name = $name;
  }


  public function setIdsup($idsup)
  {
      $this->_idsup = $idsup;
  }



}
