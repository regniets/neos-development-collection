<?php
namespace TYPO3\Media\TypeConverter;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3.Media".           *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

/**
 * This converter transforms to \TYPO3\Media\Domain\Model\Image objects.
 *
 * @api
 * @Flow\Scope("singleton")
 */
class ImageConverter extends ImageInterfaceConverter
{
    /**
     * @var string
     */
    protected $targetType = 'TYPO3\Media\Domain\Model\Image';

    /**
     * @var integer
     */
    protected $priority = 2;
}
