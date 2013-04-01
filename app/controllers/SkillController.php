<?php

class SkillController extends BaseController {

  public function index()
  {
    //Grab all of the Skill Items
    $skillItems = Skill::all();

    //Return the Skill Items as a Json Response
    return Response::json(array(
        'items' => $skillItems->toArray()
      ),
      201
    );
  }

  public function show($skill)
  {
    //Grab the Skill Items where Skill = $skill
    $skillItems = Skill::where('item_skill', $skill)->get();

    //Return the Skill Items as a Json Response
    return Response::json(array(
        'items' => $skillItems->toArray()
      ),
      200
    );
  }
}