<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DevisRepository")
 */
class Devis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @Assert\Email(
     *     message = "'{{ value }}' is not a valid email.",
     *     checkMX = true,
     * )
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=255)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="type_chirurgie", type="string", length=255)
     */
    private $typeChirurgie;

    /**
     * @var string
     *
     * @ORM\Column(name="chirurgie", type="string", length=255)
     */
    private $chirurgie;

    /**
     * @var string
     *
     * @ORM\Column(name="rappel", type="datetime")
     */
    private $rappel;

    /**
     * @var string
     *
     * @ORM\Column(name="moyen_rappel", type="string", length=255)
     */
    private $moyenRappel;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaires", type="string", length=255)
     */
    private $commentaires;

    /**
     * @var string
     *
     * @ORM\Column(name="autre_details", type="string", length=255)
     */
    private $autre_details;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Devis
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Devis
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Devis
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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Devis
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Devis
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Devis
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set typeChirurgie
     *
     * @param string $typeChirurgie
     *
     * @return Devis
     */
    public function setTypeChirurgie($typeChirurgie)
    {
        $this->typeChirurgie = $typeChirurgie;

        return $this;
    }

    /**
     * Get typeChirurgie
     *
     * @return string
     */
    public function getTypeChirurgie()
    {
        return $this->typeChirurgie;
    }

    /**
     * Set chirurgie
     *
     * @param string $chirurgie
     *
     * @return Devis
     */
    public function setChirurgie($chirurgie)
    {
        $this->chirurgie = $chirurgie;

        return $this;
    }

    /**
     * Get chirurgie
     *
     * @return string
     */
    public function getChirurgie()
    {
        return $this->chirurgie;
    }

    /**
     * Set rappel
     *
     * @param string $rappel
     *
     * @return Devis
     */
    public function setRappel($rappel)
    {
        $this->rappel = $rappel;

        return $this;
    }

    /**
     * Get rappel
     *
     * @return string
     */
    public function getRappel()
    {
        return $this->rappel;
    }

    /**
     * Set moyenRappel
     *
     * @param string $moyenRappel
     *
     * @return Devis
     */
    public function setMoyenRappel($moyenRappel)
    {
        $this->moyenRappel = $moyenRappel;

        return $this;
    }

    /**
     * Get moyenRappel
     *
     * @return string
     */
    public function getMoyenRappel()
    {
        return $this->moyenRappel;
    }

    /**
     * Set commentaires
     *
     * @param string $commentaires
     *
     * @return Devis
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Get commentaires
     *
     * @return string
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getAutreDetails()
    {
        return $this->autre_details;
    }

    /**
     * @param string $autre_details
     */
    public function setAutreDetails($autre_details)
    {
        $this->autre_details = $autre_details;
    }
}

