NeoGraPHP Symfony2 Bundle
=========================

Installation
------------
1. First of all you need to get the [NeoGraPHP Neo4j API](https://github.com/Electronic-Minds/NeoGraPHP) from github.
2. Create a folder named "neo4j" in the vendor/ directory and put all files from NeoGraPHP into it.
3. Extract this project in vendor/bundles/ElectronicMinds/
4. Register the Bundle in your AppKernel.php in app/ with "new ElectronicMinds\NeoGraPHPBundle\ElectronicMindsNeoGraPHPBundle()"
5. Now you can use it in every controller with "$this->get('neographp')" or add it to every other service with "@neographp" in the arguments list

License
-------
GNU GENERAL PUBLIC LICENSE Version 3, 29 June 2007

Credits
-------
Provided by [Electronic Minds GmbH](http://www.electronic-minds.de/) as is and without any warranty.
