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

namespace GimmeMore\Baseline\Contracts;

use Symfony\Component\Uid\Uuid;

interface Entity
{
    public function getId() : Uuid;
    public function equals(Entity $other) : bool;
    public function __toString() : string;
}
