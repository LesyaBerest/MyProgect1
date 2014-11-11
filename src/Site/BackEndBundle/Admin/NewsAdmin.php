<?php
// src/Site/BackEndBundle/Admin/NewsAdmin.php

namespace Site\BackEndBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class NewsAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', null, array('label' => 'News Name'))
            ->add('date')
            ->add('article') //if no type is specified, SonataAdminBundle tries to guess it
            ->add('tagInf', 'sonata_type_model', array('expanded' => true, 'compound' => true, 'multiple' => true, 'label' => 'Теги') )
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('date')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('date')
        ;
    }
}