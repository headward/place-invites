<?php

namespace App\Controller\Admin;

use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType;

class ReservationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reservation::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')->setLabel('Nom'),
            TextField::new('flatNumber')->setLabel('N° d\'appartement'),
            TextField::new('phone')->setLabel('Téléphone'),
            DateTimeField::new('start_date')->setLabel('Date arrivée')->setFormat('Y-MM-dd HH:mm')->renderAsNativeWidget(),
            DateTimeField::new('end_date')->setLabel('Date départ')->setFormat('Y-MM-dd HH:mm')->renderAsNativeWidget(),
        ];
    }
}
