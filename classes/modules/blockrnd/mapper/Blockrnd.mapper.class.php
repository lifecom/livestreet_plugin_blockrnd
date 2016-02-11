<?php
class PluginBlockrnd_ModuleBlockrnd_MapperBlockrnd extends Mapper {

  public function GetRandomTopic () {

    // prepare where blog
    if(!empty(Config::Get('plugin.blockrnd.topic_from_blogs'))){
      $where_blogs = 'AND blog_id IN('.implode(",", Config::Get('plugin.blockrnd.topic_from_blogs')).')';
    }else{
      $where_blogs = '';
    }

    $sql = '
      SELECT topic_id
        FROM
        ' . Config::Get ('db.table.topic') . '
        WHERE
             topic_publish = 1 AND
             topic_date_add >= DATE_ADD(CURDATE(), INTERVAL -'.intval(Config::Get('plugin.blockrnd.topic_last_days_count')).' DAY)
             '.$where_blogs.'
        ORDER BY rand()
        LIMIT '.intval(Config::Get('plugin.blockrnd.topic_count')).'
    ';


    $aTopics=array();
    if ($aRows=$this->oDb->select($sql)) {
      foreach ($aRows as $aTopic) {
        $aTopics[]=$aTopic['topic_id'];
      }
    }
    return $aTopics;
  }
  

}

?>