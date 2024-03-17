<?php

namespace App;

class Toastr {
    public array $slices = [];
    public int $size = 2;

    public function addSlice(string $slice): void {
        if(count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }

    public function toast() {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . 'toasting - ' . $slice . '<br>';
        }
    }
}