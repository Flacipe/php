<?php

namespace Maxence\BlogBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Maxence\BlogBundle\Entity\Commentaire
     *
     * @ORM\OneToMany(targetEntity="Maxence\BlogBundle\Entity\Commentaire", mappedBy="auteur", cascade={"remove", "persist"})
     */
    private $commentaires;

    /**
     * Add commentaire
     *
     * @param \Maxence\BlogBundle\Entity\Commentaire $comm
     *
     * @return User
     */
    public function addCommentaire(\Maxence\BlogBundle\Entity\Commentaire $comm)
    {
        $this->commentaires[] = $comm;
        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \Maxence\BlogBundle\Entity\Commentaire $comm
     */
    public function removeCommentaire(\Maxence\BlogBundle\Entity\Commentaire $comm)
    {
        $this->commentaires->removeElement($comm);
    }

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
