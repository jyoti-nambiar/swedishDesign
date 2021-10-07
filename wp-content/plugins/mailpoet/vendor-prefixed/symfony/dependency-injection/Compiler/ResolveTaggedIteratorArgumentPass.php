<?php
 namespace MailPoetVendor\Symfony\Component\DependencyInjection\Compiler; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument; class ResolveTaggedIteratorArgumentPass extends AbstractRecursivePass { use PriorityTaggedServiceTrait; protected function processValue($value, $isRoot = \false) { if (!$value instanceof TaggedIteratorArgument) { return parent::processValue($value, $isRoot); } $value->setValues($this->findAndSortTaggedServices($value, $this->container)); return $value; } } 