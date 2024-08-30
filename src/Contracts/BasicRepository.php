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

use Doctrine\Common\Collections\Collection;

interface BasicRepository
{
    public function all() : Collection;
    public function save(object $object, ?bool $defer = false) : void;
    public function delete(object $object, ?bool $defer = false) : void;

    public function commit() : void;
}
