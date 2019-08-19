<?php

function isFavoriteProperty($user, $propertyId) {

    return $user->favorites()->where([
        'favoriteable_id' => $propertyId,
        'favoriteable_type' => 'App\Models\Property'
    ])->exists();
}

if (!function_exists('getRouteName')) {
    /**
     * Handle record view counter
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Post $post
     *
     * @return mixed
     */
    function getRouteName()
    {
        if (!\Request::route()) {
            return null;
        }
        return \Request::route()->getName();
    }
}
