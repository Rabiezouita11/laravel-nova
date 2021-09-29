<?php

namespace App\Nova;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Text;

use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;

class Soutnance extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Soutnance';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'GROUPE'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('nom et prenom','name')
            ->rules('required','min:5'),
            
            Text::make('groupe','groupe')
            ->rules('required','min:5'),
            Text::make('Cin','cin')
            ->rules('required','digits:8','integer'),
            Image::make('Image','image')->disk('public'),
            Textarea::make('Sujet pfe','sujet_pfe')
            ->rules('required','min:5'),
            Text::make('etablissement d"acceuil','etablissement')
            ->rules('required','min:5'),
            Boolean::make('validation','validation'),
            DateTime::make('Date','created_at')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [

















        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
