<?php

class SkillActionController extends BaseController {

	public function index()
	{
		//Grab all of the skill actions
		$skillActions = SkillActions::all();

		//Return the skill actions
		return Response::json(array(
				'results' => $skillActions->toArray()
			),
			200
		);
	}

	public function show($skill)
	{
		//Grab the skill actions
		$skillActions = SkillActions::where('action_skill', $skill)->get();

		//Return the skill actions
		return Response::json(array(
				'results' => $skillActions->toArray()
			),
			200
		);
	}
}