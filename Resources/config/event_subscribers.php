<?php

/**
 * Copyright © ContaoBlackForest
 *
 * @package   contao-dropzone-upload
 * @author    Sven Baumann <baumann.sv@gmail.com>
 * @author    Dominik Tomasi <dominik.tomasi@gmail.com>
 * @license   GNU/LGPL
 * @copyright Copyright 2014-2016 ContaoBlackForest
 */

use ContaoBlackForest\DropZoneBundle\DataContainer\Description;
use ContaoBlackForest\DropZoneBundle\DataContainer\Table\Common;
use ContaoBlackForest\DropZoneBundle\DataContainer\Table\FileTreeWidget;

return array(
    new Common(),
    new Description(),
    new FileTreeWidget()
);
