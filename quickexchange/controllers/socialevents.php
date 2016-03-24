<?php
class SocialEvents extends Controller{
	protected function Index(){
		$viewmodel = new SocialEventsModel();
		$this->returnView($viewmodel->Index(), true);
	}
}