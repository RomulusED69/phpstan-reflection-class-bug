# phpstan-reflection-class-bug

Bug reproduction with PHP8, [knplabs/doctrine-behaviors](https://github.com/KnpLabs/DoctrineBehaviors)

- Install project with `composer install`
- Run phpstan with command `php vendor/bin/phpstan`
- phpstan extension used by knplabs [extension](https://github.com/KnpLabs/DoctrineBehaviors/blob/master/utils/phpstan-behaviors/src/Type/StaticTranslationTypeHelper.php#L56-L75)
