<?php 
class FindTutors extends Controller{
   protected function Index(){
	$viewmodel = new FindTutorModel();
	$this->returnView($viewmodel->Index(),true);
}
}
 ?>
