var Image = {
	crop : function() {
		$("img.crop")
			.hide()
			.crop(15,15,200,380, "/images/trans.gif") //"data:image/gif;base64,R0lGODlhAQABAIAAAMJ0IgAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==")
			.show();
	},
	preview : function() {
		$("a.preview").click(function() {
			if ($.browser.msie && $.browser.version.substr(0,1)<7) {
				return true;
			}
			var altText = $(this).children("img").attr("alt");
			var newImg = $("<img />")
				.attr("src", $(this).attr("href"))
				.attr("alt", altText)
				.attr("title", altText)
				.addClass("centerImg")
				.appendTo("div#dimBg");
			$("div#dimBg").fadeIn(300, function() {
				newImg
					.css("margin-left", newImg.width() / -2 + "px")
					.css("margin-top", newImg.height() / -2 + "px")
					.hide()
					.css("visibility", "visible")
					.fadeIn(400);
			});
			return false;
		});
		$("div#dimBg").click(function() {
			$(this).fadeOut(300, function() {
				$(this).html("");
			});
		});
	},
	giveTitle : function() {
		$("img").attr("title", function() { return this.alt; });
	}

}


var Nav = {
	set : function() {
		var filename = location.pathname.split("/").pop();
		if(filename == "") filename = "index.php";
		$("ul#topNav li a[href='" + filename + "']").parent().addClass("current");
	}
}

$(document).ready(function() {
	Image.crop();
	Image.preview();
	Image.giveTitle();
	Nav.set();
	hljs.tabReplace = '    ';
	hljs.initHighlighting();
	$("form#test").inputHintOverlay(6, 6);
});
