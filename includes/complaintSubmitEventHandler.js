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




function changeTotab(tabItem) {
	var tabContainers = $("#tabsContainer > section");

	tabItem.toggleClass("selectedTab",true);
	tabItem.siblings().toggleClass("selectedTab",false);

	$("#" + tabItem.attr('href')).css("display","block");

	/*
	var personalDetailsContent = $("#personalDetailsContent");
	var paymentHistoryContent = $("#paymentHistoryContent");
	var disputesHistoryContent = $("#disputesHistoryContent");

	var personalDetailsTab = $("#personalDetailsTab");
	var paymentHistoryTab = $("#paymentHistoryTab");
	var disputesHistoryTab = $("#disputesHistoryTab");

	switch(event.toElement.id) {
		case "personalDetailsTab":
			personalDetailsContent.css("display","block");
			paymentHistoryContent.css("display","none");
			disputesHistoryContent.css("display","none");
			personalDetailsTab.toggleClass("selectedTab");
			break;
		case "paymentHistoryTab":
			personalDetailsContent.css("display","none");
			paymentHistoryContent.css("display","block");
			disputesHistoryContent.css("display","none");
			paymentHistoryTab.toggleClass("selectedTab");
			break;
		case "disputesHistoryTab":
			personalDetailsContent.css("display","none");
			paymentHistoryContent.css("display","none");
			disputesHistoryContent.css("display","block");
			disputesHistoryTab.toggleClass("selectedTab");
			break;
	}
	*/
}