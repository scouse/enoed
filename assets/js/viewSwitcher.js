$(document).ready(function(){

	$("a.switcher").bind("click", function(e){
		e.preventDefault();
		
		var theid = $(this).attr("id");
		var listCourse = $("ul#listCourse01");
		var classNames = $(this).attr('class').split(' ');
		
		var gridthumb = "assets/images/common/ico-grid-view.png";
		var listthumb = "assets/images/common/ico-list-view.png";
		
		if($(this).hasClass("active")) {
			// if currently clicked button has the active class
			// then we do nothing!
			return false;
		} else {
			// otherwise we are clicking on the inactive button
			// and in the process of switching views!

  			if(theid == "gridview") {
				$(this).addClass("active");
				$("#listview").removeClass("active");
			
				$("#listview").children("img").attr("src","assets/images/common/ico-list-view.png");
			
				var theimg = $(this).children("img");
				theimg.attr("src","assets/images/common/ico-grid-view-active.png");
			
				// remove the list class and change to grid
				listCourse.removeClass("list");
				listCourse.addClass("grid");
			
				// update all thumbnails to larger size
				$("img.thumb").attr("src",gridthumb);
			}else if(theid == "listview") {
				$(this).addClass("active");
				$("#gridview").removeClass("active");
					
				$("#gridview").children("img").attr("src","assets/images/common/ico-grid-view.png");
					
				var theimg = $(this).children("img");
				theimg.attr("src","assets/images/common/ico-list-view-active.png");
					
				// remove the grid view and change to list
				listCourse.removeClass("grid");
				listCourse.addClass("list");
				// update all thumbnails to smaller size
				$("img.thumb").attr("src",listthumb);
			} 
		}

	});
});