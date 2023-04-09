<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\City;
use App\Models\Country;
use App\Models\State;

class CountryStateCity extends Component
{
    public $countries;
    public $states;
    public $cities;
    public $selectedCountry = null;
    public $selectedState = null;
    public $selectedCity = null;

    /**
     * Método para inicializar la propiedad $selectedCity y cargar las opciones
     * de países, departamentos y ciudades (municipios) para filtrar según corresponda.
     *
     * @param int|null $selectedCity - Id de la ciudad seleccionada previamente.
     * @return void
    */
    public function mount($selectedCity = null) : void
    {
        $this->countries = Country::all();
        $this->states = collect();
        $this->cities = collect();
        $this->selectedCity = $selectedCity;

        if (!is_null($selectedCity)) {
            $city = City::with('state.country')->find($selectedCity);
            if ($city) {
                $this->cities = City::where('state_id', $city->state_id)->get();
                $this->states = State::where('country_id', $city->state->country_id)->get();
                $this->selectedCountry = $city->state->country_id;
                $this->selectedState = $city->state_id;
            }
        }
    }

    /**
     * Renderiza la vista donde se encuentra el filtrado de ciudades por departamento y países
     *
     * @return \Illuminate\View\View
    */
    public function render()
    {
        return view('livewire.country-state-city');
    }

    /**
     * Actualiza el la lista de los departamentos según el país seleccionado.
     *
     * @param int $country - Id del país seleccionado.
     * @return void
    */
    public function updatedSelectedCountry($country) : void
    {
        $this->states = State::where('country_id', $country)->get();
        $this->selectedState = NULL;
    }

    /**
     * Actualiza el la lista de las ciudades o municipios según el departamento seleccionado.
     *
     * @param int $state - Id del departamento seleccionado.
     * @return void
    */
    public function updatedSelectedState($state) : void
    {
        if (!is_null($state)) {
            $this->cities = City::where('state_id', $state)->get();
        }
    }
}
