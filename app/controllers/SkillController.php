<?php

class SkillController extends BaseController {

  public function index()
  {
    //Grab all of the Skill Items
    $skill_items = Skill::all();

    //Return the Skill Items as a Json Response
    return Response::json(array(
        'items' => $skill_items->toArray()
      ),
      201
    );
  }

  public function show($skill)
  {
    //Grab the Skill Items where Skill = $skill
    $skill_items = Skill::where('item_skill', $skill)->get();

    //Return the Skill Items as a Json Response
    return Response::json(array(
        'items' => $skill_items->toArray()
      ),
      200
    );
  }
}