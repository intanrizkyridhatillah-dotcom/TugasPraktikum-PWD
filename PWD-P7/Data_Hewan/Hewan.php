<?php

class Hewan
{
    private string $nama;
    private int $umur;

    public function setNama(string $nama): void
    {
        $this->nama = $nama;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function setUmur(int $umur): void
    {
        $this->umur = max(0, $umur);
    }

    public function getUmur(): int
    {
        return $this->umur;
    }
}