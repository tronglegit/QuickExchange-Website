<?php
class FindRoommates extends Controller{
	protected function Index(){
		$viewmodel = new FindRoommateModel();
		$this->returnView($viewmodel->Index(), true);
	}
}