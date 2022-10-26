<?php

namespace App\DataFixtures;

use App\Entity\Annonces;
use App\Factory\AnnoncesFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        AnnoncesFactory::createMany(10);
        UserFactory::createMany("10");

    }
}
