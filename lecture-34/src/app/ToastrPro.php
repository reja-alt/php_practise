<?php

namespace App;

class ToastrPro extends Toastr {
    public int $size = 4;

    public function toastBagel() {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . 'toasting - ' . $slice . ' with begal' . '<br>';
        }
    }
}