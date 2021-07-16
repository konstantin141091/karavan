<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class VacancyController extends Controller
{
    public function create() {
        return view('admin.vacancy.create');
    }
    public function store(Request $request) {
        $request->flash();
        $vacancy = new Vacancy();
        $this->validate($request, Vacancy::rules($vacancy), [], Vacancy::attributesName());
        $vacancy->fill($request->all());
        $vacancy->save();
        return redirect()->back()->with('success', 'Запись успешно добавлена');
    }
    public function index() {
        $vacancies = Vacancy::all();
        return view('admin.vacancy.index', [
            'vacancies' => $vacancies,
        ]);
    }

    public function edit(Vacancy $vacancy) {
        return view('admin.vacancy.edit', [
            'vacancy' => $vacancy,
        ]);
    }

    public function update(Vacancy $vacancy, Request $request) {
        $request->flash();
        $this->validate($request, Vacancy::rules($vacancy), [], Vacancy::attributesName());
        $vacancy->fill($request->all());
        $vacancy->update();
        return redirect()->back()->with('success', 'Вакансия отредактирована');
    }

    public function destroy($id) {
        DB::table('vacancies')->delete($id);
        return redirect()->back()->with('success', 'Вакансия удалена');
    }

    public function show(Vacancy $vacancy) {
        $category = DB::table('vacancies_category')
            ->where('id', '=', $vacancy->category_id)->first('name');
        return view('admin.vacancy.show', [
            'vacancy' => $vacancy,
            'category' => $category->name,
        ]);
    }
}
