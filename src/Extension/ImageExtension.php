<?php

/*
 * This file is part of the HTML sanitizer project.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HtmlSanitizer\Extension;

use HtmlSanitizer\Visitor\ImgVisitor;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class ImageExtension implements ExtensionInterface
{
    public function getName(): string
    {
        return 'image';
    }

    public function getNodeVisitors(): array
    {
        return [
            'img' => ImgVisitor::class,
        ];
    }
}
