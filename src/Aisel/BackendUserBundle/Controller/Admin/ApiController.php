<?php

/*
 * This file is part of the Aisel package.
 *
 * (c) Ivan Proskuryakov
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aisel\BackendUserBundle\Controller\Admin;

use Aisel\ResourceBundle\Controller\Admin\AbstractCollectionController;

/**
 * ApiController
 *
 * @author Ivan Proskoryakov <volgodark@gmail.com>
 */
class ApiController extends AbstractCollectionController
{

    /**
     * @var string
     */
    protected $model = "Aisel\BackendUserBundle\Entity\BackendUser";

}
