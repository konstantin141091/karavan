<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function description(Vacancy $vacancy)
    {
        $offer = explode(';', $vacancy->offer);
        if ($offer[count($offer) - 1] === '') {
            array_pop($offer);
        }
        $vacancy->offer = $offer;

        $responsibilities = explode(';', $vacancy->responsibilities);
        if ($responsibilities[count($responsibilities) - 1] === '') {
            array_pop($responsibilities);
        }
        $vacancy->responsibilities = $responsibilities;

        $requirements = explode(';', $vacancy->requirements);
        if ($requirements[count($requirements) - 1] === '') {
            array_pop($requirements);
        }
        $vacancy->requirements = $requirements;

        $conditions = explode(';', $vacancy->conditions);
        if ($conditions[count($conditions) - 1] === '') {
            array_pop($conditions);
        }
        $vacancy->conditions = $conditions;

        return view('pages.description', [
            'vacancy' => $vacancy,
        ]);
    }

    public function vacancy()
    {
        $vacancies = Vacancy::query()->where('published', '=', 1)->get();
        return view('pages.vacancy', [
            'vacancies' => $vacancies,
        ]);
    }

    public function offer(Request $request) {

        $offer = new Offer();
        $offer->name = $request->name;
        $offer->email = $request->email;
        $offer->phone = $request->phone;
        $offer->vacancy = $request->vacancy;

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('offers');
            $offer->file = $path;
        } else {
            $offer->file = null;
        }
        $offer->save();
    }
}
