<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LieuReception
 *
 * @ORM\Table(name="lieu_reception")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LieuReceptionRepository")
 */
class LieuReception
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_lieu_reception", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_lieu_reception", type="string", length=60)
     */
    private $nomLieuReception;

    /**
     * @ORM\OneToMany(targetEntity="Trajet", mappedBy="LieuReception")
     */
    private $trajet;


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
     * Set nomLieuReception.
     *
     * @param string $nomLieuReception
     *
     * @return LieuReception
     */
    public function setNomLieuReception($nomLieuReception)
    {
        $this->nomLieuReception = $nomLieuReception;

        return $this;
    }

    /**
     * Get nomLieuReception.
     *
     * @return string
     */
    public function getNomLieuReception()
    {
        return $this->nomLieuReception;
    }

    /**
     * @return mixed
     */
    public function getTrajet()
    {
        return $this->trajet;
    }

    /**
     * @param mixed $trajet
     * @return LieuReception
     */
    public function setTrajet($trajet)
    {
        $this->trajet = $trajet;
        return $this;
    }




}
