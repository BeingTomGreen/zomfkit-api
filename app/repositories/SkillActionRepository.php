<?php

class SkillActionRepository {

  /**
   * Returns all skill actions
   * @return SkillActions/bool
   */  
  public function getAllActions()
  {
    // Attemp to grab all actions
    $actions = SkillActions::all();

    // Did we find any actions?
    if (!count($actions))
    {
      // No actions found return false
      return false;
    }
    
    // Return our actions object
    return $actions;
  }

  /**
   * Returns all skill actions for a specified skill
   * @return SkillActions/bool
   */  
  public function getSkillActions()
  {
    // Attemp to grab all actions
    $actions = SkillActions::where('action_skill', $skill)->get();

    // Did we find any actions?
    if (!count($actions))
    {
      // No actions found return false
      return false;
    }
    
    // Return our actions object
    return $actions;
  }
}