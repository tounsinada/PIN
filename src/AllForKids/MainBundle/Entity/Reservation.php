<?php

namespace AllForKids\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AllForKids\MainBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reservation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_reservation;


    /**
     * @var int
     *
     * @ORM\Column(name="id_even", type="integer")
     */
    private $id_even;



    /**
     * @var int
     *
     * @ORM\Column(name="id_client", type="integer")
     */
    private $idClient;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reservation", type="datetime",nullable=true)
     */
    private $dateReservation;

    /**
     * @var int
     *
     * @ORM\Column(name="nbre_ticket", type="integer",nullable=true)
     */
    private $nbreTicket;

    /**
     * @var bool
     *
     * @ORM\Column(name="payer", type="boolean",nullable=true)
     */
    private $payer=0;

    /**
     * @return int
     */
    public function getIdReservation()
    {
        return $this->id_reservation;
    }



    /**
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set nbreTicket
     *
     * @param integer $nbreTicket
     *
     * @return Reservation
     */
    public function setNbreTicket($nbreTicket)
    {
        $this->nbreTicket = $nbreTicket;

        return $this;
    }

    /**
     * Get nbreTicket
     *
     * @return int
     */
    public function getNbreTicket()
    {
        return $this->nbreTicket;
    }

    /**
     * Set payer
     *
     * @param boolean $payer
     *
     * @return Reservation
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Get payer
     *
     * @return bool
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @return int
     */
    public function getIdEven()
    {
        return $this->id_even;
    }

    /**
     * @param int $id_even
     */
    public function setIdEven($id_even)
    {
        $this->id_even = $id_even;
    }

    /**
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param int $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }












}

