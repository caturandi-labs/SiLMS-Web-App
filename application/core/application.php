<?php
    
    /**
    * @author andi
    *
    */

    class Application{

        /** segmen pertama */
        private $url_controller = null;

        /** segmen kedua / aksi atau fungsi */
        private $url_action = null;

        /** @parameter url / untuk mengirim */
        private $url_params = array();

        public function __construct()
        {
            $this->splitUrl();

            if (!$this->url_controller) {

                require APP . 'controller/home.php';
                $page = new Home();
                $page->index();

            } elseif (file_exists(APP . 'controller/' . $this->url_controller . '.php')) {

                require APP . 'controller/' . $this->url_controller . '.php';
                $this->url_controller = new $this->url_controller();

                if (method_exists($this->url_controller, $this->url_action)) {

                    if (!empty($this->url_params)) {
                        call_user_func_array(array($this->url_controller, $this->url_action), $this->url_params);
                    } else {
                        $this->url_controller->{$this->url_action}();
                    }

                } else {
                    if (strlen($this->url_action) == 0) {
                        $this->url_controller->index();
                    }
                    else {
                        header('location: ' . URL . 'problem');
                    }
                }
            } else {
                header('location: ' . URL . 'problem');
            }
        }

        /**
         * Split URL 
         */
        private function splitUrl()
        {
            if (isset($_GET['url'])) {

                $url = trim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);

                $this->url_controller = isset($url[0]) ? $url[0] : null;
                $this->url_action = isset($url[1]) ? $url[1] : null;

                # Hapus controller dan aksi ...
                unset($url[0], $url[1]);

                $this->url_params = array_values($url);

                // kanggo debugging | ojo dihapus
                //echo 'Controller: ' . $this->url_controller . '<br>';
                //echo 'Action: ' . $this->url_action . '<br>';
                //echo 'Parameters: ' . print_r($this->url_params, true) . '<br>';
            }
        }
    }
