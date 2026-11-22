<?php

require_once 'Hewan.php';

class Kucing extends Hewan
{
    public function getJenis(): string
    {
        return 'Kucing';
    }

    public function getSuara(): string
    {
        return 'Meong!';
    }
}