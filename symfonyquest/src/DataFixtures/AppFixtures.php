<?php

namespace App\DataFixtures;

use App\Entity\Articles;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i <= 49; $i++) {
            $article = new Articles;
            $title = 'titre' . $i;
            $article->setTitle($title);
            $content = 'Lorem' . $i;
            $article->setContent($content);

            $manager->persist($article);
            // $product = new Product();
            // $manager->persist($product);

        }

        $manager->flush();
    }
}
