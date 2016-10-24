<div class="templatemo_right_section">
    <h4>Loại sản phẩm</h4>
    <div class="templatemo_right_section_content">
        <ul>
           {foreach $ds_loai_sp as $loai_sp}
    			<li><a href="index.php?ma_loai={$loai_sp->ma_loai}">
                		{$loai_sp->ten_loai}</a></li>
        	{/foreach}
        </ul>
    </div>
</div>
            