<?php

namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

class ControllerListener
{
    public function onKernelController(FilterControllerEvent $event)
    {
        // @hack simulation de temps de latence entre 1 et 3 secondes
        usleep(random_int(1, 3) * 1000000);
    }
}
