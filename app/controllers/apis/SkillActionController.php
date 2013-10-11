<?php

class SkillActionController extends BaseController {

  public function index()
  {
    //Return the skill actions
    return Response::json(
      SkillActions::all()->toArray(),
      200
    );
  }

  public function show($skill)
  {
    //Return the skill actions
    return Response::json(
      SkillActions::where('action_skill', $skill)->get()->toArray(),
      200
    );
  }
}