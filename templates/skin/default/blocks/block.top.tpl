<div class="block block-type-stream blockrnd">
	<header class="block-header sep">
		<h3>{$aLang.plugin.blockrnd.top_block}</h3>
	</header>
	
	<div class="block-content">
		{if $aRndTopics}
			<ul class="latest-list">
				{foreach from=$aRndTopics item=oTopic}
					{assign var="oUser" value=$oTopic->getUser()}
					{assign var="oBlog" value=$oTopic->getBlog()}
					<li class="js-title-topic" title="{$oTopic->getText()|strip_tags|trim|truncate:150:'...'|escape:'html'}">
						<p>
							<a href="{$oUser->getUserWebPath()}" class="author">{$oUser->getLogin()}</a>
							<time datetime="{date_format date=$oTopic->getDateAdd() format='c'}" title="{date_format date=$oTopic->getDateAdd() format="j F Y, H:i"}">
								{date_format date=$oTopic->getDateAdd() hours_back="12" minutes_back="60" now="60" day="day H:i" format="j F Y, H:i"}
							</time>
						</p>
						<a href="{$oBlog->getUrlFull()}" class="stream-blog">{$oBlog->getTitle()|escape:'html'}</a> &rarr;
						<a href="{$oTopic->getUrl()}" class="stream-topic">{$oTopic->getTitle()|escape:'html'}</a>
					</li>
				{/foreach}
			</ul>
		{else}
			{$aLang.plugin.blockrnd.top_no}
		{/if}
	</div>	

</div>