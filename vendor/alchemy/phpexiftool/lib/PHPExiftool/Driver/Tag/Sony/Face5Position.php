<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Face5Position extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'Face5Position';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'mixed';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Face 5 Position';

    protected $flag_Permanent = true;

    protected $MaxLength = 4;

}
