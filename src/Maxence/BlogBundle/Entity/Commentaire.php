<?php

namespace Maxence\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="Maxence\BlogBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \Maxence\BlogBundle\Entity\User
     *
     * @ORM\ManyTOOne(targetEntity="Maxence\BlogBundle\Entity\User", inversedBy="commentaires")
     */
    private $auteur;

    /**
     * @var \Maxence\BlogBundle\Entity\Article
     *
     * @ORM\ManyToOne(targetEntity="Maxence\BlogBundle\Entity\Article", inversedBy="commentaires")
     */
    private $article;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Commentaire
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set auteur
     *
     * @param \Maxence\BlogBundle\Entity\User $auteur
     *
     * @return Commentaire
     */
    public function setAuteur(\Maxence\BlogBundle\Entity\User $auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }
    /**
     * get auteur
     *
     * @return \Maxence\BlogBundle\Entity\User
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set article
     *
     * @param \Maxence\BlogBundle\Entity\Article $article
     *
     * @return Commentaire
     */
    public function setArticle(\Maxence\BlogBundle\Entity\Article $article)
    {
        $this->article = $article;
        return $this;
    }
    /**
     * get article
     *
     * @return \Maxence\BlogBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }
}

