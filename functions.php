<?php
/*
* live search on the wordPress page. You can use it for implement live search by post on the category or blog page.
*/
?>
<script>
	// default value: show error message
$("#item_search").keyup(function () {
    var filter = $(this).val().trim().toLowerCase();
//	$(".item-all").show();
    $('.item-box.search').each(function () {
        if ($(this).find("h4").text().toLowerCase().includes(filter)) {
            $(this).show();  
            // result found, don't show error message   
            showError = false;
        } 
		 else if($('.item-box.search:visible').length===0){
          $('.error').show();
      }
		else {
             $(this).hide();
			 $('.error').hide();
        }
    });
});
</script>

<!-- Html layout looks like -->

<div class="search"><input id="item_search" class="find_item" type="text" placeholder="Find a country"></div>
<div class="item-all">    
<div class="item-main">
<div class="item-grid">
<div class="item-box search">
      <div class="post_thumbnail">
			</div>
      <div class="overlay-cls">
                                    <h4>Title post</h4>
			</div>             
              <div class="item-info">
                  <span class="excerpt"> 
         </span>                
    </div>
</div>
<div class="item-box search">
      <div class="post_thumbnail">
			</div>
      <div class="overlay-cls">
                                    <h4>Title post</h4>
			</div>             
              <div class="item-info">
                  <span class="excerpt"> 
         </span>                
    </div>
</div>
<div class="item-box search">
      <div class="post_thumbnail">
			</div>
      <div class="overlay-cls">
                                    <h4>Title post</h4>
			</div>             
              <div class="item-info">
                  <span class="excerpt"> 
         </span>                
    </div>
</div>
<div class="item-box search">
      <div class="post_thumbnail">
			</div>
      <div class="overlay-cls">
                                    <h4>Title post</h4>
			</div>             
              <div class="item-info">
                  <span class="excerpt"> 
         </span>                
    </div>
</div>
</div>
</div>
</div>


<!-- Error -->
<div class="error" style="display: block;">
<span class="text-search-error">No results for "<p id="search-text"> </p>"</span>
</div>
