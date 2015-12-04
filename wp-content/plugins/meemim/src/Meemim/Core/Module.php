<?php

/**
 * Class Meemim_Core_Module
 */
class Meemim_Core_Module extends Rsc_Mvc_Module
{

    /**
     * @var Meemim_Core_ModelsFactory
     */
    protected $factory;

    /**
     * Triggered when the resolver doing initialization of module
     */
    public function onInit()
    {
        parent::onInit();

        $this->addAjaxEndpoint();
        $this->createModelsFactory();
    }

    /**
     * Gets models factory.
     *
     * @return \Meemim_Core_ModelsFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * Handles AJAX requests to the plugin.
     *
     * @return Rsc_Http_Response|void
     */
    public function onAjaxRequest()
    {
        $environment = $this->getEnvironment();
        $request = $this->getRequest();
        $route = $request->post->get('route');

        if (!array_key_exists('module', $route)) {
            wp_send_json_error(
                array(
                    'message' => $environment->translate(
                        'Invalid route specified: missing "module" key.'
                    )
                )
            );
        }

        $moduleName = $route['module'];
        $actionName = 'indexAction';

        if (array_key_exists('action', $route)) {
            $actionName = $route['action'] . 'Action';
        }

        $module = $environment->getModule($moduleName);
        if (!$module) {
            wp_send_json_error(
                array(
                    'message' => sprintf(
                        $environment->translate(
                            'You are requested to the non-existing module "%s".'
                        ),
                        $moduleName
                    )
                )
            );
        }

        if (!method_exists($module->getController(), $actionName)) {
            wp_send_json_error(
                array(
                    'message' => sprintf(
                        $environment->translate(
                            'You are requested to the non-existing route: %s::%s'
                        ),
                        $moduleName,
                        $actionName
                    )
                )
            );
        }

        $request->headers->add('X_REQUESTED_WITH', 'XMLHttpRequest');

        return call_user_func_array(
            array($module->getController(), $actionName),
            array($request)
        );
    }

    /**
     * Adds AJAX endpoint for the plugin
     */
    private function addAjaxEndpoint()
    {
        add_action(
            'wp_ajax_meemim',
            array($this, 'onAjaxRequest')
        );
    }

    /**
     * Creates new models factory
     */
    private function createModelsFactory()
    {
        $this->factory = new Meemim_Core_ModelsFactory($this->getEnvironment());
    }
}