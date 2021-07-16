<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    public function index() {
        $offers = Offer::all();
        return view('admin.offer.index', [
            'offers' => $offers
        ]);
    }

    public function show(Offer $offer) {
        return view('admin.offer.show', [
            'offer' => $offer
        ]);
    }

    public function uploadSummary(Offer $offer) {
        $path = $offer->file;
        return Storage::download($path);
    }
}
