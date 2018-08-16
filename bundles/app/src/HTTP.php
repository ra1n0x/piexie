<?php

namespace Project\App;

class HTTP extends \PHPixie\DefaultBundle\HTTP
{
    protected $classMap = array(
        'welcome' => 'Project\App\HTTP\Welcome',
        'ideas' => 'Project\App\HTTP\Ideas',
        'aboutMe' => 'Project\App\HTTP\AboutMe'
    );
}