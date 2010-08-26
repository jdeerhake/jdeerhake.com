$(document).ready(function() {
	
	/*-----------------*/
	/*  User Admin     */
	/*-----------------*/
	
	$("#confirmButton").click(function() {
		$(this).hide();
		$("img.loading").show();
		$("div#notifyArea div").remove("span.error").html("");
				$.post("/public/ajax/useradmin.php", 
					{ "action" : "getInfo", "emp_id" : $("input#emp_id").attr("value")}, function(data) {
						$("div#confirm")
								.html("Are you sure you?<button id='userAdminButton'>Yes</button><button id='cancel'>No</button>")
						if(!$("span.error").length) {
								$("div#confirm").fadeIn(400);
						} else {
							$("div#notifyArea div").html(data).fadeIn(500);
							$("div#confirm").remove("span.error").html("");
							$("img.loading").hide();
							$("#confirmButton").fadeIn(400);
						}
						
					}
					
				)
	});
	
	
	$("#cancel").live("click", function() {
		$("div#confirm").fadeOut(400, function() { $(this).html(""); } );
		$("form#userAdminForm input[type=text]").attr("value", "").trigger("blur");
		$("button#confirmButton").show();
		$("img.loading").hide();
	});
	
	$("#userAdminButton").live("click", function() {
		$("div#confirm").fadeOut(400, function() { $(this).html(""); } );
		$(this).hide();
		$("img.loading").show();
		$("div#notifyArea div").slideUp(300, function() {
			var formVals = $("form#userAdminForm").serialize();
			$.post("/public/ajax/useradmin.php", formVals,
				function(data) {
					$("div#notifyArea div").html(data).fadeIn(500, function() {
						$("img.loading").hide();
						$("#userAdminButton").add("#confirmButton").fadeIn(400);
						if(!$("span.error").length) {
							$("form#userAdminForm input[type=text], form#userAdminForm input[type=password]").attr("value", "").trigger("blur");
							
						}
					});
				}
			);
		});
	});

	
	/*-----------------*/
	/*  Section Admin  */
	/*-----------------*/
	

	
	$("ol.sectionSort").sortable({
		stop : function(event, ui) {
			var imgs = $("div#notifyArea").html();
			var value = $(ui.item).html();
			var id = $(ui.item).attr('id');
			var position = ui.item.prevAll().length;
			$(ui.item).append(imgs).effect("highlight");
			$(ui.item).find("img.loading").fadeIn(200);
			$.post('/public/ajax/sectionadmin.php', { 
				'id': id,
				'position': position,
				'type': 'order'
			}, function(data) {
				if(data) {
					$(ui.item).find("img.loading").fadeOut(200, function() {
						$(ui.item).effect("highlight");
						$(ui.item).find("img.success").fadeIn(400).delay(2000).fadeOut(1000, function() {
							$(ui.item).children("div").remove();
						});
					});
				}
			});
		}
	});
	
			
	$(".editBox").live("blur", function() {
		var newVal = $(this).attr("value");
		var par = $(this).parent();
		var id = par.parent().attr("id");
		$(this).remove();
		par.html(newVal);
		par
			.append("<img class='loading' src='/public/images/small_load.gif' alt='Processing...' /><img class='success' src='/public/images/green_check.png' alt='Success!' />")
			.children("img.loading").show();
		$.post('/public/ajax/sectionadmin.php', {
			'id' : id,
			'value' : newVal,
			'type' : 'update'
		}, function(data) {
			if(data) {
			par.find("img.loading").fadeOut(200, function() {
						$(this).remove();
						par.find("img.success").fadeIn(400).delay(2000).fadeOut(1000, function() {
							$(this).remove();
							par.parent().children("img").fadeIn(200);
						});
				});
			
			}
		
		});
	});
	
	$("a.addSubNav").click(function() {
		var navParent = $(this).parent().parent().parent().attr('id');
		if(navParent == "centerContent") { navParent = 0; }
		var domParent = $(this).parent();
		$.post('/public/ajax/sectionadmin.php', {
			'parent' : navParent,
			'type' : 'insert'
		}, function(data) {
			if(data) {
				var newSpan = '';
				if(navParent == 0) { var newSpan = "<span class='collapseButton collapsed'>&nbsp;</span>"; }
				domParent.before("<li id='" + data + "'>" + newSpan + "<span class='dispName'></span><img class='editNav' src='/public/images/edit.png' alt='Edit Name'>&nbsp;<img class='delNav' src='/public/images/red_x.png' alt='Delete Item'></li>");
				domParent.prev().find("img.editNav").click();
			}		
		});
	});
	
	$("button.confirmNavDel").live("click", function() {
		var id = $(this).attr("id");
		$("div#confirm").fadeOut(400, function() {
			$(this).html(""); 
			$.post('/public/ajax/sectionadmin.php', {
				'id' : id,
				'type' : "delete"
			}, function(data) {
				if(data) {
					$("li[id='" + id + "']").slideUp('300', function() { $(this).remove(); });
				}
		
			});
		} );
		
	});
	
	

});
