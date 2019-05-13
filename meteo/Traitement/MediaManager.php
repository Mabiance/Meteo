<?php //Contient uniquement le requêtage
class MediaManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db; // j'affecte a l'attribut la Connexion
  }

  //fonction INSCRIPTION
  public function inscription(Media $media)
  {
    $q = $this->_db->prepare('INSERT INTO user (nom, identifiant, password) VALUES (:nom, :identifiant, :password)');
    $q->execute(array(
    'nom'=> $media->getnom(),
    'identifiant' =>$media->getidentifiant(),
    'password' =>  $media->getpassword()));

  }

  //fonction AJOUT DE FILM
public function ajoutervideo(Media $media)
{
  $q = $this->_db->prepare('INSERT INTO video (name) VALUES (:name)');
  $q->execute(array(
    'name' => $media->getname()));
}

public function ajouterphoto(Media $media)
{
  $q = $this->_db->prepare('INSERT INTO photo (nom) VALUES (:nom)');
  $q->execute(array(
    'nom' => $media->getnom()));
}


public function ajoutermessage(Media $media)
{
  $q = $this->_db->prepare('INSERT INTO info (info) VALUES (:info)');
  $q->execute(array(
    'info' => $media->getinfo()));
}


  //fonction SUPRESSION
  public function supprimervideo(Media $media)
  {

  		 $reponse2 =$this->_db->prepare('DELETE FROM video WHERE id = :id ');
       $reponse2->execute(array(
         'id'=> $media->getidsup()));
  }

  //fonction SUPRESSION
  public function supprimerphoto(Media $media)
  {

       $reponse2 =$this->_db->prepare('DELETE FROM photo WHERE id = :id ');
       $reponse2->execute(array(
         'id'=> $media->getidsup()));
  }

  //fonction SUPRESSION
  public function supprimermessage(Media $media)
  {

       $reponse2 =$this->_db->prepare('DELETE FROM info WHERE id = :id ');
       $reponse2->execute(array(
         'id'=> $media->getidsup()));
  }
  //fonction CONNEXION
  public function connexion(Media $media)
  {
    $q = $this->_db->prepare('SELECT * FROM user WHERE identifiant = :identifiant AND password =:password');
    $q->execute(array(
      'identifiant' => $media->getIdentifiant(),
      'password' => $media->getPassword()));
    return $q->fetch();

}

//fonction VOIR TOUS LES FILMs
public function afficher()
{
  $q = $this->_db->prepare('SELECT * FROM film');
  $q->execute();
  return $q->fetchall();

}

//fonction MODIFICATION DE FILM
public function modifier(Media $media)
{
$q = $this->_db->prepare('UPDATE film SET nomfilm=:nomfilm, realisateur=:realisateur, duree=:duree WHERE id=:id');
$q->execute(array(
  'id' => $media->getidsup(),
  'nomfilm' => $media->getnomfilm(),
  'realisateur' => $media->getrealisateur(),
  'duree' => $media->getduree()));
}



}
