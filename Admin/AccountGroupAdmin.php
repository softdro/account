<?php

namespace SDRO\AccountBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use SDRO\CoreBundle\Model\Type;
use SDRO\CoreBundle\Model\Status;

class AccountGroupAdmin extends Admin {
//    protected $parentAssociationMapping = 'account_group';
//    protected $baseRoutePattern = 'account_group';
//    protected $datagridValues = array(
//        // display the first page (default = 1)
//        '_page' => 1,
//        // reverse order (default = 'ASC')
////        '_sort_order' => 'DESC',
//        // name of the ordered field (default = the model's id field, if any)
//        '_sort_by' => 'group',
//    );

    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper) {

        $formMapper
                ->add('groups')
                ->end()

        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('accounts')
                ->add('groups')
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('accounts')
                ->addIdentifier('groups')
                ->add('_action', 'actions', array(
                    'actions' => array(
//                        'show' => array(),
                        'edit' => array(),
//                        'delete' => array(),
                    )
                ))
        ;
    }

//    /**
//     * @return array
//     */
//    public function getBatchActions() {
//        $actions = parent::getBatchActions();
//
//        $actions['enabled'] = array(
//            'label' => $this->trans('batch_enable_comments'),
//            'ask_confirmation' => true,
//        );
//
//        $actions['disabled'] = array(
//            'label' => $this->trans('batch_disable_comments'),
//            'ask_confirmation' => false
//        );
//
//        return $actions;
//    }
}
