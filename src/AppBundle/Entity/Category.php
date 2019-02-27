<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 * @Vich\Uploadable
 */
class Category
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text")
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="details1", type="text")
     */
    private $details1;

    /**
     * @var string
     *
     * @ORM\Column(name="details2", type="text")
     */
    private $details2;

    /**
     * @var string
     *
     * @ORM\Column(name="before_operation", type="text")
     */
    private $beforeOperation;

    /**
     * @var string
     *
     * @ORM\Column(name="before_operation1", type="text")
     */
    private $beforeOperation1;

    /**
     * @var string
     *
     * @ORM\Column(name="deroulement_operation", type="text")
     */
    private $deroulementOperation;

    /**
     * @var string
     *
     * @ORM\Column(name="after_operation", type="text")
     */
    private $afterOperation;

    /**
     * @var string
     *
     * @ORM\Column(name="after_operation1", type="text")
     */
    private $afterOperation1;

    /**
     * @var string
     *
     * @ORM\Column(name="complications", type="text")
     */
    private $complications;

    /**
     * @var string
     *
     * @ORM\Column(name="complications1", type="text")
     */
    private $complications1;

    /**
     * @var string
     *
     * @ORM\Column(name="tarifs", type="text")
     */
    private $tarifs;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Chirurgie", inversedBy="categories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $chirurgie;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $coverimage;

    /**
     * @Vich\UploadableField(mapping="chirurgie_images", fileNameProperty="coverimage")
     * @var File
     */
    private $coverimageFile;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $backimage;

    /**
     * @Vich\UploadableField(mapping="chirurgie_images", fileNameProperty="backimage")
     * @var File
     */
    private $backimageFile;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $baimage;

    /**
     * @Vich\UploadableField(mapping="chirurgie_images", fileNameProperty="baimage")
     * @var File
     */
    private $baimageFile;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $detailsimage;

    /**
     * @Vich\UploadableField(mapping="chirurgie_images", fileNameProperty="detailsimage")
     * @var File
     */
    private $detailsimageFile;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $detailsimage2;

    /**
     * @Vich\UploadableField(mapping="chirurgie_images", fileNameProperty="detailsimage2")
     * @var File
     */
    private $detailsimageFile2;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $detailsimage3;

    /**
     * @Vich\UploadableField(mapping="chirurgie_images", fileNameProperty="detailsimage3")
     * @var File
     */
    private $detailsimageFile3;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

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
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Category
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set beforeOperation
     *
     * @param string $beforeOperation
     *
     * @return Category
     */
    public function setBeforeOperation($beforeOperation)
    {
        $this->beforeOperation = $beforeOperation;

        return $this;
    }

    /**
     * Get beforeOperation
     *
     * @return string
     */
    public function getBeforeOperation()
    {
        return $this->beforeOperation;
    }

    /**
     * Set deroulementOperation
     *
     * @param string $deroulementOperation
     *
     * @return Category
     */
    public function setDeroulementOperation($deroulementOperation)
    {
        $this->deroulementOperation = $deroulementOperation;

        return $this;
    }

    /**
     * Get deroulementOperation
     *
     * @return string
     */
    public function getDeroulementOperation()
    {
        return $this->deroulementOperation;
    }

    /**
     * Set afterOperation
     *
     * @param string $afterOperation
     *
     * @return Category
     */
    public function setAfterOperation($afterOperation)
    {
        $this->afterOperation = $afterOperation;

        return $this;
    }

    /**
     * Get afterOperation
     *
     * @return string
     */
    public function getAfterOperation()
    {
        return $this->afterOperation;
    }

    /**
     * Set complications
     *
     * @param string $complications
     *
     * @return Category
     */
    public function setComplications($complications)
    {
        $this->complications = $complications;

        return $this;
    }

    /**
     * Get complications
     *
     * @return string
     */
    public function getComplications()
    {
        return $this->complications;
    }

    /**
     * Set tarifs
     *
     * @param string $tarifs
     *
     * @return Category
     */
    public function setTarifs($tarifs)
    {
        $this->tarifs = $tarifs;

        return $this;
    }

    /**
     * Get tarifs
     *
     * @return string
     */
    public function getTarifs()
    {
        return $this->tarifs;
    }

    /**
     * @return mixed
     */
    public function getChirurgie()
    {
        return $this->chirurgie;
    }

    /**
     * @param mixed $chirurgie
     */
    public function setChirurgie($chirurgie)
    {
        $this->chirurgie = $chirurgie;
    }

    /**
     * @param File $imageFile
     */
    public function setCoverImageFile(File $image = null)
    {
        $this->coverimageFile = $image;
        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * @param File $imageFile
     */
    public function setBackImageFile(File $image = null)
    {
        $this->backimageFile = $image;
        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * @param File $imageFile
     */
    public function setBaImageFile(File $image = null)
    {
        $this->baimageFile = $image;
        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * @param File $imageFile
     */
    public function setDetailsImageFile(File $image = null)
    {
        $this->detailsimageFile = $image;
        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * @param File $imageFile
     */
    public function setDetailsImageFile2(File $image = null)
    {
        $this->detailsimageFile2 = $image;
        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * @param File $imageFile
     */
    public function setDetailsImageFile3(File $image = null)
    {
        $this->detailsimageFile3 = $image;
        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getCoverimage()
    {
        return $this->coverimage;
    }

    /**
     * @param string $coverimage
     */
    public function setCoverimage($coverimage)
    {
        $this->coverimage = $coverimage;
    }

    /**
     * @return string
     */
    public function getBackimage()
    {
        return $this->backimage;
    }

    /**
     * @param string $backimage
     */
    public function setBackimage($backimage)
    {
        $this->backimage = $backimage;
    }

    /**
     * @return string
     */
    public function getBaimage()
    {
        return $this->baimage;
    }

    /**
     * @param string $baimage
     */
    public function setBaimage($baimage)
    {
        $this->baimage = $baimage;
    }

    /**
     * @return string
     */
    public function getDetailsimage()
    {
        return $this->detailsimage;
    }

    /**
     * @param string $detailsimage
     */
    public function setDetailsimage($detailsimage)
    {
        $this->detailsimage = $detailsimage;
    }

    /**
     * @return string
     */
    public function getDetailsimage2()
    {
        return $this->detailsimage2;
    }

    /**
     * @param string $detailsimage2
     */
    public function setDetailsimage2($detailsimage2)
    {
        $this->detailsimage2 = $detailsimage2;
    }

    /**
     * @return string
     */
    public function getAfterOperation1()
    {
        return $this->afterOperation1;
    }

    /**
     * @param string $afterOperation1
     */
    public function setAfterOperation1($afterOperation1)
    {
        $this->afterOperation1 = $afterOperation1;
    }

    /**
     * @return string
     */
    public function getDetails1()
    {
        return $this->details1;
    }

    /**
     * @param string $details1
     */
    public function setDetails1($details1)
    {
        $this->details1 = $details1;
    }

    /**
     * @return string
     */
    public function getDetails2()
    {
        return $this->details2;
    }

    /**
     * @param string $details2
     */
    public function setDetails2($details2)
    {
        $this->details2 = $details2;
    }

    /**
     * @return string
     */
    public function getBeforeOperation1()
    {
        return $this->beforeOperation1;
    }

    /**
     * @param string $beforeOperation1
     */
    public function setBeforeOperation1($beforeOperation1)
    {
        $this->beforeOperation1 = $beforeOperation1;
    }

    /**
     * @return mixed
     */
    public function getComplications1()
    {
        return $this->complications1;
    }

    /**
     * @param mixed $complications1
     */
    public function setComplications1($complications1)
    {
        $this->complications1 = $complications1;
    }

    /**
     * @return string
     */
    public function getDetailsimage3()
    {
        return $this->detailsimage3;
    }

    /**
     * @param string $detailsimage3
     */
    public function setDetailsimage3($detailsimage3)
    {
        $this->detailsimage3 = $detailsimage3;
    }
}

