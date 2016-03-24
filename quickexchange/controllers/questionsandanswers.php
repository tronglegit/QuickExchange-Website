<?php
class QuestionsAndAnswers extends Controller{
	protected function Index(){
		$viewmodel = new QuestionAndAnswerModel();
		$this->returnView($viewmodel->Index(), true);
	}
}