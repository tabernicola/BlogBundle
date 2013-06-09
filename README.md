BlogBundle
==========

# Description
---------------------------------------

Tabernicola's Blog bundle for symfony2

# Installation via composer
---------------------------------------

Add tabernicola's blog to your `composer.json`:

#### 1.1   Symfony 2.3.X
```json
"require": {
    "tabernicola/blog": "dev-master"
},
```

you need also have the root key:

"minimum-stability": "alpha",

Then run `php composer.phar update` command.

###  Add to your AppKernel.php

    new Tabernicola\BlogBundle(),
    
###3)  Add to routing.yml

    tabernicola_blog:
        resource: "@TabernicolaBlogBundle/Resources/config/routing.yml"
        prefix:   /

