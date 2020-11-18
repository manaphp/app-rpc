<?php

namespace App\Controllers;

use ManaPHP\Rest\Controller;

class TimeController extends Controller
{
    public function getAcl()
    {
        return ['*' => '*'];
    }

    /**
     * @return int
     */
    public function currentAction()
    {
        return time();
    }

    /**
     * @param int $second
     *
     * @return int
     */
    public function afterAction($second = 0)
    {
        return time() + $second;
    }
}
