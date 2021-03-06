<?php
declare(strict_types=1);


namespace Gaia\Chiron\component;

use ReflectionClass;

/**
 * Class ListBuilder
 * @package Gaia\Chiron\component
 */
class ListBuilder
{
    /**
     * @param $className
     * @param $args
     * @param $collection
     * @return mixed
     * @throws \ReflectionException
     */
    public static function build($className, $args, $source)
    {
        $class = new ReflectionClass($className);
        $instance = $class->newInstanceArgs($args);
        $instance->setSource($source);
        return $instance;
    }

    /**
     * @param $className
     * @param $args
     * @param $collection
     * @return mixed
     * @throws \ReflectionException
     */
    public static function buildRender($className, $args, $source)
    {
        return ListBuilder::build($className, $args, $source)->render();
    }

    /**
     * @param $className
     * @param $args
     * @param $collection
     * @return mixed
     * @throws \ReflectionException
     */
    public static function buildArray($className, $args, $source)
    {
        return ListBuilder::build($className, $args, $source)->toArray();
    }
}