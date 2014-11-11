<?php
// src/Site/BackEndBundle/Admin/CoupleAdmin.php

namespace Site\BackEndBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CoupleAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('manName')
            ->add('ladyName')
            ->add('category', 'entity', array('class' => 'Site\CoreBundle\Entity\Category', 'label' => 'Категория'))
        ;
    } 

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('manName')
            ->add('ladyName')
            ->add('category')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('manName')
            ->add('ladyName')
            ->add('category')
        ;
    }
}