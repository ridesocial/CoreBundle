<?php
namespace RideSocial\Bundle\CoreBundLe\Traits\ORM;

trait BlameableTrait
{
    /**
     * @ORM\OneToMany(targetEntity="RideSocial\Bundle\UserBundle\Entity\User", mappedBy="passel")
     */
    protected $created_by;

    /**
     * @inheritdoc
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * @inheritdoc
     */
    public function setCreatedBy(RideSocial\Bundle\UserBundle\Entity\User $user)
    {
        $this->created_by = $user;

        return $user;
    }

    /**
     * Update Author
     * @var RideSocial\Bundle\UserBundle\Entity\User
     * @ORM\OneToMany(targetEntity="RideSocial\UserBundle\Entity\User", mappedBy="passel")
     */
    protected $updated_by;

    /**
     * @inheritdoc
     */
    public function getUpdatedBy()
    {
        return $this->updated_by;
    }

    /**
     * @inheritdoc
     */
    public function setUpdatedBy(RideSocial\UserBundle\Entity\User $user)
    {
        $this->updated_by = $user;

        return $this;
    }
}
