<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPXmpTPg;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Fonts extends AbstractTag
{

    protected $Id = 'Fonts';

    protected $Name = 'Fonts';

    protected $FullName = 'XMP::xmpTPg';

    protected $GroupName = 'XMP-xmpTPg';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpTPg';

    protected $g2 = 'Image';

    protected $Type = 'struct';

    protected $Writable = true;

    protected $Description = 'Fonts';

    protected $flag_List = true;

    protected $flag_Bag = true;

}
