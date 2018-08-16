<?php
/**
 * Created by PhpStorm.
 * User: and
 * Date: 16.08.18
 * Time: 14:20
 */

namespace Project\App\HTTP;


class AboutMe extends Processor
{

    public function defaultAction($request)
    {
        $components = $this->components();
        // Render the template
        return $components->template()->get('app:aboutMe', [
        ]);
    }
}