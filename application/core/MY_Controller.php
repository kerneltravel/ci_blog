<?php

class MY_Controller extends CI_Controller {

    public function __construct () {
        parent::__construct();

        if (ENVIRONMENT === 'development') {
            // $this->output->enable_profiler(true);
        }
    }

}
