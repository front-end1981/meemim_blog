<?php

/**
 * Class Meemim_Core_BaseController
 */
abstract class Meemim_Core_BaseController extends Rsc_Mvc_Controller
{
    /**
     * Gets models factory.
     *
     * @return Meemim_Core_ModelsFactory
     */
    public function getFactory()
    {
        return $this->getEnvironment()
            ->getModule('core')
            ->getFactory();
    }

    /**
     * Returns AJAX success response.
     *
     * @param array $data Data
     *
     * @return Rsc_Http_Response
     */
    public function ajaxSuccess(array $data = array())
    {
        return $this->response(
            Rsc_Http_Response::AJAX,
            array_merge($data, array('success' => true))
        );
    }

    /**
     * Returns AJAX error response.
     *
     * @param string $message Error message
     * @param array  $data    Data
     *
     * @return Rsc_Http_Response
     */
    public function ajaxError(
        $message = 'Something went wrong.',
        array $data = array()
    )
    {
        return $this->response(
            Rsc_Http_Response::AJAX,
            array_merge($data, array('success' => false, 'message' => $message))
        );
    }
}