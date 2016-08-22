<?php

namespace BluesBand\HttpBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

/**
 * Interface IController
 *
 * Defines a common interface for all the controlelrs
 * @package BluesBand\HttpBundle\Controller
 */
interface IController
{
    /**
     * The one and only action method a Controller should have.
     *
     * @return IResponse
     */
    public function indexAction(Request $request);
}