<?php


/**
 * Class Meemim_Team_Controller
 */
class Meemim_Team_Controller extends Meemim_Core_BaseController
{
    public function indexAction($page)
    {
        return $this->response(
            '@team/index.twig',
            array(
                'page' => $page,
            )
        );
    }

    public function getMembersAction(Rsc_Http_Request $request)
    {
        try {
            return $this->ajaxSuccess(
                array(
                    'members' => $this->getMembers()->getAll(
                        $request->post->get('id', 0)
                    )
                )
            );
        } catch (RuntimeException $e) {
            return $this->ajaxError($e->getMessage());
        }
    }

    public function addMemberAction(Rsc_Http_Request $request)
    {
        try {
            $memberId = $this->getMembers()->add(
                $request->post->get('parentId', 0),
                $request->post->get('attachment')
            );

            return $this->ajaxSuccess(
                array('member' => $this->getMembers()->getById($memberId))
            );
        } catch (RuntimeException $e) {
            return $this->ajaxError($e->getMessage());
        }
    }

    public function updateMemberAction(Rsc_Http_Request $request)
    {
        try {
            $this->getMembers()->update((array)$request->post->get('member'));

            return $this->ajaxSuccess();
        } catch (RuntimeException $e) {
            return $this->ajaxError($e->getMessage());
        }
    }

    public function removeMemberAction(Rsc_Http_Request $request)
    {
        try {
            $this->getMembers()->remove($request->post->get('id'));

            return $this->ajaxSuccess();
        } catch (RuntimeException $e) {
            return $this->ajaxError($e->getMessage());
        }
    }

    /**
     * Returns members model.
     *
     * @return Meemim_Team_Model_Members
     */
    protected function getMembers()
    {
        $factory = $this->getFactory();

        return $factory->get('Members', 'Team');
    }
}