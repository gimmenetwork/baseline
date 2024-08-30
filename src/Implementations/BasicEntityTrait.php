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

use GimmeMore\Baseline\Contracts\Entity;
use Symfony\Component\Uid\Uuid;

trait BasicEntityTrait
{
    private readonly Uuid $id;

    public function getId(): Uuid
    {
        return $this->id;
    }

    public function equals(Entity $other): bool
    {
        return $this->id->equals($other->getId());
    }

    public function __toString(): string
    {
        return (string) $this->getId();
    }
}
