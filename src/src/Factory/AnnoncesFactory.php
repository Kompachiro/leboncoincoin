<?php

namespace App\Factory;

use App\Entity\Annonces;
use App\Repository\AnnoncesRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Annonces>
 *
 * @method static Annonces|Proxy createOne(array $attributes = [])
 * @method static Annonces[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Annonces[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Annonces|Proxy find(object|array|mixed $criteria)
 * @method static Annonces|Proxy findOrCreate(array $attributes)
 * @method static Annonces|Proxy first(string $sortedField = 'id')
 * @method static Annonces|Proxy last(string $sortedField = 'id')
 * @method static Annonces|Proxy random(array $attributes = [])
 * @method static Annonces|Proxy randomOrCreate(array $attributes = [])
 * @method static Annonces[]|Proxy[] all()
 * @method static Annonces[]|Proxy[] findBy(array $attributes)
 * @method static Annonces[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Annonces[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static AnnoncesRepository|RepositoryProxy repository()
 * @method Annonces|Proxy create(array|callable $attributes = [])
 */
final class AnnoncesFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'titre' => self::faker()->text(15),
            'description' => self::faker()->text(50),
            'prix' => self::faker()->numberBetween(20, 500),
            'date' => self::faker()->dateTimeBetween("-8 month", "-1 second"),
            'tag' => self::faker()->word(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Annonces $annonces): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Annonces::class;
    }
}
