<?php

class SkillActionController extends BaseController {

  // Hold our skillAction
  protected $skillActionRepository;

  /**
   * Inject the various Classes we need
   * @param SkillActionRepository $skillActionRepository
   */
  public function __construct(SkillActionRepository $skillActionRepository)
  {
    // Save our SkillActionRepository
    $this->skillActionRepository = $skillActionRepository;
  }

  public function index()
  {
    // Attempt to grab all actions
    $actions = $this->skillActionRepository->getAllActions()->toArray();
    
    // Check we have some actions
    if (!$actions)
    {
      // No actions found
      return Response::json(['error' => 'No skill actions found.'], 404);
    }
    
    //Return the skill actions & the appropriate HTTP status code
    return Response::json($this->skillActionRepository->getAllActions()->toArray(), 200);
  }

  public function show($skill)
  {
    // Attempt to grab all actions
    $actions = $this->skillActionRepository->getSkillActions($skill)->toArray();
    
    // Check we have some actions
    if (!$actions)
    {
      // No actions found
      return Response::json(['error' => 'No actions found for "'. $skill .'".'], 404);
    }
    
    //Return the skill actions & the appropriate HTTP status code
    return Response::json($this->skillActionRepository->getAllActions()->toArray(), 200);
  }
}