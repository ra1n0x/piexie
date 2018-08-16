<?php
/**
 * Created by PhpStorm.
 * User: and
 * Date: 13.08.18
 * Time: 03:12
 */

namespace Project\App\HTTP;


class Ideas extends Processor
{


    public function defaultAction($request)
    {
        $components = $this->components();
        // Render the template
        return $components->template()->get('app:ideas', [
        ]);
    }


}