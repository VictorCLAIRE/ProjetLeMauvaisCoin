<?php

namespace App\Controller\SuperAdmin;

use App\Entity\Regions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RegionsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Regions::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
