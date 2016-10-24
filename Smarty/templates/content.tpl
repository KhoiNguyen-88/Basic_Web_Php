
  <div id="templatemo_content">
    <div id="templatemo_content_left">
    	{if isset($view)}
        {include file="$view"}
        {/if}
    </div>
    <!-- end of ocntent left -->
    
    <div id="templatemo_content_right">
		{block name="tim_san_pham"}{include file="tim_san_pham.tpl"}{/block}        	
		{block name="loai_san_pham"}{include file="loai_san_pham.tpl"}{/block}  
		{block name="quang_cao"}{include file="quang_cao.tpl"}{/block}   
    </div>
    <!-- end of content right-->
    
    <div class="cleaner">&nbsp;</div>
  </div>
  
