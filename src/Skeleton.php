<?php

/**
 * This file is part of graze/:package-name.
 *
 * Copyright (c) :year Nature Delivered Ltd. <https://www.graze.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license https://github.com/graze/package-name/blob/master/LICENSE.md
 * @link https://github.com/graze/package-name
 */

namespace Graze\Skeleton;

class Skeleton
{
    /**
     * @var string
     */
    protected $bigSkeleton;

    /**
     * @var string
     */
    protected $smallSkeleton;

    /**
     * @var string
     */
    protected $dogSkeleton;

    /**
     * @param string $bigSkeleton
     * @param string $smallSkeleton
     * @param string $dogSkeleton
     */
    public function __construct($bigSkeleton, $smallSkeleton, $dogSkeleton)
    {
        $this->bigSkeleton = $bigSkeleton;
        $this->smallSkeleton = $smallSkeleton;
        $this->dogSkeleton = $dogSkeleton;
    }

    public function sing()
    {
        echo 'In a dark, dark town there was a dark, dark street
            and in the dark, dark street there was a dark, dark house,
            and in the dark, dark house there were some dark, dark stairs
            and down the dark, dark stairs there was a dark, dark cellar
            and in the dark dark cellar, three skeletons lived!';
    }
}
