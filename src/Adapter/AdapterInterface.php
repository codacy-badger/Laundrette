<?php

namespace Laundrette\Adapter;

interface AdapterInterface
{

    public function call($path, $data);

    public function close();
}
