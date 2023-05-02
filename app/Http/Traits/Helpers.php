<?php

namespace App\Http\Traits;


trait Helpers
{
    /**
     * @param string $language
     * @return void
     */
    function setLanguageSession(string $language) {
        if(array_key_exists( $language, config('languages'))) {
            session()->put('language', $language);
        }
    }

    function LogMyActivity($model, $user, $msg)
    {
        activity()
            ->performedOn($model)
            ->causedBy($user)
            ->log($msg);
    }
}
