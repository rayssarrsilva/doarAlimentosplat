<?php
require_once 'ITemplate.php';

class DoadorTemplate implements ITemplate {
    public function layout($pagina, $dados = null) {
        include($pagina);
    }
}
