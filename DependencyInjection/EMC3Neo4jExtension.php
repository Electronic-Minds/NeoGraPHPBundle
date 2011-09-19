<?php
namespace EMC3\Bundle\Neo4jBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

/**
 * 
 * Enter description here ...
 * @author fs
 *
 */
class EMC3Neo4jExtension extends Extension
{
	
	/** (non-PHPdoc)
	 * @see Symfony\Component\DependencyInjection\Extension.ExtensionInterface::getAlias()
	 */
	public function getAlias()
	{
		return 'electronicminds_neographpbundle';
	}

	/** (non-PHPdoc)
	 * @see Symfony\Component\DependencyInjection\Extension.ExtensionInterface::getNamespace()
	 */
	public function getNamespace()
	{
		return 'http://www.example.com/symfony/schema/';
	}

	/** (non-PHPdoc)
	 * @see Symfony\Component\DependencyInjection\Extension.ExtensionInterface::getXsdValidationBasePath()
	 */
	public function getXsdValidationBasePath()
	{
		return __DIR__.'/../Resources/config/';
	}

	/** (non-PHPdoc)
	 * @see Symfony\Component\DependencyInjection\Extension.ExtensionInterface::load()
	 */
	public function load(array $config, ContainerBuilder $configuration)
	{
		$loader = new YamlFileLoader($configuration, new FileLocator(__DIR__.'/../Resources/config'));
		$loader->load('service.yml');
	}	
}