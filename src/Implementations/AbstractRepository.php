<?php
/*
 * This file is part of "baseline".
 *
 * (c) Kostiantyn Stupak <konstantin.stupak@gimmemore.com> 2024
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GimmeMore\Baseline\Implementations;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use GimmeMore\Baseline\Contracts\BasicRepository;

abstract class AbstractRepository extends ServiceEntityRepository implements BasicRepository
{
    public function all() : Collection
    {
        return new ArrayCollection($this->findAll());
    }

    public function save(object $object, ?bool $defer = false): void
    {
        $this->getEntityManager()->persist($object);
        if (!$defer) {
            $this->getEntityManager()->flush();
        }
    }

    public function delete(object $object, ?bool $defer = false): void
    {
        $this->getEntityManager()->remove($object);
        if (!$defer) {
            $this->getEntityManager()->flush();
        }
    }

    public function commit(): void
    {
        $this->getEntityManager()->flush();
    }
}
