<?php
class PluginBlockrnd_BlockTop extends Block {

	public function Exec() {

		// get random topics
		$topicsIds = $this -> PluginBlockrnd_Blockrnd_GetRandomTopic ();

		// get additional info
		$topicInfo = $this -> Topic_GetTopicsAdditionalData ($topicsIds);

		$this->Viewer_Assign('aRndTopics',$topicInfo);
	}

}
?>