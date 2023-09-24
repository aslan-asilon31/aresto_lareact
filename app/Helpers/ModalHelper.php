<?php

namespace App\Helpers;

class ModalHelper
{
    public static function modalLink($url, $modalId, $modalTitle, $modalSize = '')
    {
        return view('partials.modal-link', compact('url', 'modalId', 'modalTitle', 'modalSize'));
    }
}
