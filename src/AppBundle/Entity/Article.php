<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ArticleRepository")
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=100)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=50)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="author_email", type="string", length=255)
     */
    private $authorEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="post_text", type="text")
     */
    private $postText;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set authorEmail
     *
     * @param string $authorEmail
     * @return Article
     */
    public function setAuthorEmail($authorEmail)
    {
        $this->authorEmail = $authorEmail;

        return $this;
    }

    /**
     * Get authorEmail
     *
     * @return string 
     */
    public function getAuthorEmail()
    {
        return $this->authorEmail;
    }

    /**
     * Set postText
     *
     * @param string $postText
     * @return Article
     */
    public function setPostText($postText)
    {
        $this->postText = $postText;

        return $this;
    }

    /**
     * Get postText
     *
     * @return string 
     */
    public function getPostText()
    {
        return $this->postText;
    }
}
