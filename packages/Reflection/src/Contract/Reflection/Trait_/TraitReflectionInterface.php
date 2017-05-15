<?php declare(strict_types=1);

namespace ApiGen\Reflection\Contract\Reflection\Trait_;

use ApiGen\Reflection\Contract\Reflection\Class_\ClassReflectionInterface;
use ApiGen\Reflection\Contract\Reflection\Partial\AnnotationsInterface;

interface TraitReflectionInterface extends AnnotationsInterface
{
    public function getName(): string;

    /**
     * Returns the unqualified name (UQN).
     */
    public function getShortName(): string;

    public function isDeprecated(): bool;

    public function getNamespaceName(): string;

    public function getFileName(): string;

    /**
     * @return ClassReflectionInterface[]|TraitReflectionInterface[]
     */
    public function getUsers(): array;

    /**
     * @return TraitMethodReflectionInterface[]
     */
    public function getMethods(): array;

    /**
     * @return TraitMethodReflectionInterface[]
     */
    public function getOwnMethods(): array;

    public function getMethod(string $name): TraitMethodReflectionInterface;

    public function hasMethod(string $name): bool;

    /**
     * @return TraitReflectionInterface[]
     */
    public function getTraits(): array;

    /**
     * @return string[]
     */
    public function getTraitAliases(): array;

    /**
     * @return TraitPropertyReflectionInterface[]
     */
    public function getProperties(): array;

    /**
     * @return TraitPropertyReflectionInterface[]
     */
    public function getOwnProperties(): array;

    public function getProperty(string $name): TraitPropertyReflectionInterface;

    public function hasProperty(string $name): bool;

    public function usesTrait(string $name): bool;
}
