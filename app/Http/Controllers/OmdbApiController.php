<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OmdbApiController extends Controller
{
  public function index()
  {
    // $response = Http::get("http://www.omdbapi.com/?apikey=5325cbf7&s=harry potter");
    // return $response->json();

    $response = Http::withHeaders([
      "X-RapidAPI-Host" => " trueway-places.p.rapidapi.com",
      "X-RapidAPI-Key" => " d0f3948bddmsh119dbdacd60822ep1af53djsn544df8e2627d"
    ])->get("https://trueway-places.p.rapidapi.com/FindPlacesNearby?location=-7.556618627594758, 110.77005137510412&radius=100");
    // Koordinat FEB UMS
    $responseResult = $response->json();
    return $responseResult["results"];
    foreach ($responseResult["results"] as $item) {
      // $item = collect($item);
      if($item["id"] == '58877BA2175EF5D16348E57CC4F3A701'){
        return $item["distance"];
      }
    }

    // return view('maps');
  }
}
