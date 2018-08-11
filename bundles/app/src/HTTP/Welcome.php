<?php
/**
 * Created by PhpStorm.
 * User: and
 * Date: 11.08.18
 * Time: 01:23
 */

namespace Project\App\HTTP;

use PHPixie\HTTP\Request;

class Welcome extends Processor
{

    /**
     * @param Request $request HTTP request
     * @return mixed
     */
    public function defaultAction($request)
    {
        $components = $this->components();

        $welcome = "hey welcome everybody";
        // Render the template
        return $components->template()->get('app:welcome', [
            'welcome' => $welcome
        ]);
    }


}