<?php

interface endereco_cobranca_cliente {
    function setEnderecoCobranca($rua,$numero,$cidade,$cep);
    function getEnderecoCobranca();
}
