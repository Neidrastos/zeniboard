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
     * @ORM\OneToMany(targetEntity="Trajet", mappedBy="lieuReception")
     */
    private $trajets;


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
    public function getTrajets()
    {
        return $this->trajets;
    }

    /**
     * @param mixed $trajets
     * @return LieuReception
     */
    public function setTrajets($trajets)
    {
        $this->trajets = $trajets;
        return $this;
    }








}
