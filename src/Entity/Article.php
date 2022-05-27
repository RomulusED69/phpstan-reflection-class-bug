<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Contract\Entity\TranslatableInterface;
use Knp\DoctrineBehaviors\Contract\Entity\TranslationInterface;
use Knp\DoctrineBehaviors\Model\Translatable\TranslatableMethodsTrait;

/**
 * @ORM\Entity()
 */
class Article implements TranslatableInterface
{
    use TranslatableMethodsTrait;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @var Collection<string, TranslationInterface>
     */
    protected Collection $translations;

    public function getId(): ?int
    {
        return $this->id;
    }
}
