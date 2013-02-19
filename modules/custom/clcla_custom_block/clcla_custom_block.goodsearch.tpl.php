<?php drupal_add_js(drupal_get_path('module','clcla_custom_block') . '/clcla_custom_block.goodsearch.js'); ?>

<div style="padding:5px 5px 2px 5px; text-align:center; border: solid 1px #CCCCCC; width:300px;">
<label for="goodsearch_keywords_1" style="display:none;">GoodSearch keywords to search for</label>
<input
  type="text"
  name="goodsearch_keywords_1"
  id="goodsearch_keywords_1"
  onkeydown="return CatchEnter_1(event);"
  style="width:230px;background-image:url('http://www.goodsearch.com/_gfx/title_yahoo_background.gif');background-repeat:no-repeat;margin:2px 0px 4px 0px;"
  onclick="this.style.backgroundImage='url(http://www.goodsearch.com/_gfx/spacer.gif)';"
  onfocus="this.style.backgroundImage='url(http://www.goodsearch.com/_gfx/spacer.gif)';"
/>
<input type="button" name="goodsearch_submit_1" id="goodsearch_submit_1" value="Search" onclick="GoGoodSearch_1();" style="margin:2px 0px 4px 0px;font-family:Arial,Helvetica;font-size:11px;">
</div>