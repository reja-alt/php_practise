<?php

namespace App;

class ToastrPro extends Toastr {
    public int $size = 4;

    public function __construct(string $y) { // method signature not applicable for constructor it can be used anything
        parent::__construct(5);
        $this->size = 4;
    }

    // public function addSlice(int $slice): void { //Fatal error: Declaration of App\ToastrPro::addSlice(int $slice): void must be compatible with App\Toastr::addSlice(string $slice): void
    //     parent::addSlice($slice);
    // }
    public function toastBagel() {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . 'toasting - ' . $slice . ' with begal' . '<br>';
        }
    }
}