<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Formulaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // create and store the file in the uploads folder 
        $legalPath = $request->file('legal_statutes')->store('uploads', 'public');
        $internalPath = $request->file('internal_regulations')->store('uploads', 'public');


        $form = Formulaire::create([
            'name_organization' => $request->name_organization,
            'name_representative' => $request->name_representative,
            'position_representative' => $request->position_representative,
            'phone_representative' => $request->phone_representative,
            'email_representative' => $request->email_representative,
            'linkedin_representative' => $request->linkedin_representative,
            'name_tenderer' => $request->name_tenderer,
            'position_tenderer' => $request->position_tenderer,
            'phone_tenderer' => $request->phone_tenderer,
            'email_tenderer' => $request->email_tenderer,
            'linkedin_tenderer' => $request->linkedin_tenderer,
            'years_existence' => $request->years_existence,
            'country_registration' => $request->country_registration,
            'legal_statutes' => $legalPath,
            'presentation' => $request->presentation,
            'internal_regulations' => $internalPath,
            'num_employees' => $request->num_employees,
            'num_volunteers' => $request->num_volunteers,
            'beneficiaries' => $request->beneficiaries,
            'country_intervention' => $request->country_intervention,
            'area_intervention' => $request->area_intervention,
            'project_description' => $request->project_description,
            'funding_requirements' => $request->funding_requirements,
            'approached_funders' => $request->approached_funders,
            'neet_project_example' => $request->neet_project_example,
            'project_reach' => $request->project_reach,
            'project_impact' => $request->project_impact,
            'project_duradtion' => $request->project_duration,
            'project_area' => $request->project_area,
            'project_evaluation' => $request->project_evaluation,
            'other_projects' => $request->other_projects,
            'sources_funding' => $request->sources_funding,
            'themes_intervention' => $request->themes_intervention,
            'partners' => $request->partners,
            'project_financing' => $request->project_financing
        ]);

        if ($form instanceof Model) {
            return response()->json([
                'message' => "success",
            ], 200);
        } else {
            return response()->json([
                'message' => "failed miserably and horribly",
            ], 69);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
