<?php
namespace Users\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="PostRepository")
 * @ORM\Table(name="Users_user_post")
 * @ORM\HasLifecycleCallbacks
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $user_name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $user_category;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $user_created;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $user_age;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updated;

    public function __toString(){
    	return $this->user_name;
    }

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
     * Set userName
     *
     * @param string $userName
     *
     * @return Post
     */
    public function setUserName($userName)
    {
        $this->user_name = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Set userCategory
     *
     * @param integer $userCategory
     *
     * @return Post
     */
    public function setUserCategory($userCategory)
    {
        $this->user_category = $userCategory;

        return $this;
    }

    /**
     * Get userCategory
     *
     * @return integer
     */
    public function getUserCategory()
    {
        return $this->user_category;
    }

    /**
     * Set userCreated
     *
     * @param \DateTime $userCreated
     *
     * @return Post
     */
    public function setUserCreated($userCreated)
    {
        $this->user_created = $userCreated;

        return $this;
    }

    /**
     * Get userCreated
     *
     * @return \DateTime
     */
    public function getUserCreated()
    {
        return $this->user_created;
    }

    /**
     * Set userAge
     *
     * @param integer $userAge
     *
     * @return Post
     */
    public function setUserAge($userAge)
    {
        $this->user_age = $userAge;

        return $this;
    }

    /**
     * Get userAge
     *
     * @return integer
     */
    public function getUserAge()
    {
        return $this->user_age;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Post
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
