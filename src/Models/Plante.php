<?php


namespace App\Models;


class Plante
{

   private $id;
   private $name;
   private $prix;
   private $categorie;



   /**
    * @return mixed
    */
   public function getId()
   {
      return $this->id;
   }

   /**
    * @param mixed $id
    */
   public function setId($id)
   {
      $this->id = $id;
   }

   /**
    * @return mixed
    */
   public function getName()
   {
      return $this->name;
   }

   /**
    * @param mixed $name
    */
   public function setName($name)
   {
      $this->name = $name;
   }

   /**
    * @return mixed
    */
   public function getPrix()
   {
      return $this->prix;
   }

   /**
    * @param mixed $prix
    */
   public function setPrix($prix)
   {
      $this->prix = $prix;
   }

   /**
    * @return mixed
    */
   public function getCategorie()
   {
      return $this->categorie;
   }

   /**
    * @param mixed $categorie
    */
   public function setCategorie($categorie)
   {
      $this->categorie = $categorie;
   }
}
