<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class session_control implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {


        $session = Services::session();

        $uri = $request->uri->getPath();
        
        if (strpos($uri, 'login') !== false) {
            return;
        }

        $uri = $request->uri->getPath();
        
        if (strpos($uri, 'register') !== false) {
            return;
        }

        if (!$session->get('USER_ID')) {
            return redirect()->route('login');
        }
     
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $timer = Services::timer();
        log_message('info', 'Page rendered in ' . $timer->getElapsedTime('total') . ' seconds.');
    }
}
