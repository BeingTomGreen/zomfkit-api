<?php

class SkillController extends BaseController {

  private $perPage = 10;

  public function show($skill)
  {
    //Grab the Skill Items where Skill = $skill
    $skill_items = Skill::where('item_skill', $skill)->paginate($this->perPage);

    //Return the view
    return View::make('skills/list', array(
      'pageTitle' => ucfirst($skill),
      'section' => $skill,
      'skill_items' => $skill_items,
    ));
  }
}