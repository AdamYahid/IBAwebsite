window.onload = function() {
	$("#tabBar > li").click(function () { 
		$(this).toggleClass("selectedTab",true);
		$(this).siblings().toggleClass("selectedTab",false);
		
		var selectedTab = $("#" + $(this).data('content'));
		selectedTab.siblings().css("display","none");
		selectedTab.css("display","block");

	}); 

	$("#disputeBTN").click(function () {
		$("#disputesTab").click();
	});

	var userConfirmed = false;

	$("#disputeForm").submit(function(event) {
		if (userConfirmed == false) {
			event.preventDefault();
		}
		var disputeNumber = $("#disputeNumber").val();
		var disputeContent = $("#disputeBody").val();
		var msg = "אתה עומד לערער על חשבונית מספר " + disputeNumber + " האם אתה בטוח שברצונך לקחת סיכון זה?";
		bootbox.setDefaults({locale:"he"});
		bootbox.dialog({
		  message: msg,
		  title: "הגשת ערעור",
		  buttons: {
		    success: {
		      label: "הגש ערעור!",
		      className: "btn-danger",
		      callback: function() {
		      	userConfirmed = true;
		        $("#disputeForm").submit();
		      }
		    },
		    danger: {
		      label: "שקול שוב את ערעורך!",
		      className: "btn-success",
		      callback: function() {
		        return;
		      }

		    }
		  }
		});
	});
};