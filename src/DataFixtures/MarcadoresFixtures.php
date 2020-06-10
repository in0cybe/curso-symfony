<?php

namespace App\DataFixtures;

use App\Entity\Categoria;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoriasFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $categoria  =new Categoria();
        $categoria->setNombre('Internet');
        $categoria->setColor('red');
        $manager->persist($categoria);
        $manager->flush();
    }
}
