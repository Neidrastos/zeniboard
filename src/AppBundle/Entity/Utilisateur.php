<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UtilisateurRepository")
 */
class Utilisateur implements UserInterface, \Serializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_utilisateur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_utilisateur", type="string", length=45)
     */
    private $nomUtilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom_utilisateur", type="string", length=45, nullable=true)
     */
    private $prenomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_utilisateur", type="string", length=60, unique=true)
     */
    private $emailUtilisateur;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe_utilisateur", type="string")
     */
    private $motDePasseUtilisateur;

    /**
     * @ORM\OneToMany(targetEntity="Trajet", mappedBy="utilisateur")
     */
    private $trajets;

    /**
     * @ORM\Column(name="roles_utilisateur", type="array")
     */

    private $roles;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomUtilisateur.
     *
     * @param string $nomUtilisateur
     *
     * @return Utilisateur
     */
    public function setNomUtilisateur($nomUtilisateur)
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    /**
     * Get nomUtilisateur.
     *
     * @return string
     */
    public function getNomUtilisateur()
    {
        return $this->nomUtilisateur;
    }

    /**
     * Set prenomUtilisateur.
     *
     * @param string|null $prenomUtilisateur
     *
     * @return Utilisateur
     */
    public function setPrenomUtilisateur($prenomUtilisateur = null)
    {
        $this->prenomUtilisateur = $prenomUtilisateur;

        return $this;
    }

    /**
     * Get prenomUtilisateur.
     *
     * @return string|null
     */
    public function getPrenomUtilisateur()
    {
        return $this->prenomUtilisateur;
    }

    /**
     * Set emailUtilisateur.
     *
     * @param string $emailUtilisateur
     *
     * @return Utilisateur
     */
    public function setEmailUtilisateur($emailUtilisateur)
    {
        $this->emailUtilisateur = $emailUtilisateur;

        return $this;
    }

    /**
     * Get emailUtilisateur.
     *
     * @return string
     */
    public function getEmailUtilisateur()
    {
        return $this->emailUtilisateur;
    }

    /**
     * Set motDePasseUtilisateur.
     *
     * @param string $motDePasseUtilisateur
     *
     * @return Utilisateur
     */
    public function setMotDePasseUtilisateur($motDePasseUtilisateur)
    {
        $this->motDePasseUtilisateur = $motDePasseUtilisateur;

        return $this;
    }

    /**
     * Get motDePasseUtilisateur.
     *
     * @return string
     */
    public function getMotDePasseUtilisateur()
    {
        return $this->motDePasseUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getTrajets()
    {
        return $this->trajets;
    }

    /**
     * @param mixed $trajets
     * @return Utilisateur
     */
    public function setTrajets($trajets)
    {
        $this->trajets = $trajets;
        return $this;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @return array
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * add doc symfony user interface
     */
    public function getUsername()
    {
        return $this->emailUtilisateur;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->motDePasseUtilisateur;
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->emailUtilisateur,
            $this->motDePasseUtilisateur
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->emailUtilisateur,
            $this->motDePasseUtilisateur
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }


}
