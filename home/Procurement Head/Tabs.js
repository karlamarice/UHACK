
// EMPLOYEE ASSET
$(document).ready(function(){
		$("#emp-view-asset").click(function(){
		$("#Emp-View-Assets").show();
		$("#Emp-Req-Items").hide();
		$("#Emp-Req-list").hide();
		$("#Emp-transfer").hide();
	});
});

$(document).ready(function(){
		$("#emp-req-item").click(function(){
		$("#Emp-Req-Items").show();
		$("#Emp-Req-list").hide();
		$("#Emp-View-Assets").hide();
		$("#Emp-transfer").hide();
	});
});

$(document).ready(function(){
		$("#emp-req-list").click(function(){
		$("#Emp-Req-Items").hide();
		$("#Emp-Req-list").show();
		$("#Emp-View-Assets").hide();
		$("#Emp-transfer").hide();
	});
});

$(document).ready(function(){
		$("#emp-trans").click(function(){
		$("#Emp-transfer").show();
		$("#Emp-View-Assets").hide();
		$("#Emp-Req-Items").hide();
		$("#Emp-Req-list").hide();
	});
});

//GS ASSETS---------------------------------------------------------------------------------
$(document).ready(function(){
		$("#gs-view-asset").click(function(){
		$("#GS-View-Assets").show();
		$("#GS-Req-Items").hide();
		$("#GS-Req-list").hide();
		$("#GS-transfer").hide();
	});
});

$(document).ready(function(){
		$("#gs-req-item").click(function(){
		$("#GS-Req-Items").show();
		$("#GS-Req-list").hide();
		$("#GS-View-Assets").hide();
		$("#GS-transfer").hide();
	});
});

$(document).ready(function(){
		$("#gs-req-list").click(function(){
		$("#GS-Req-Items").hide();
		$("#GS-Req-list").show();
		$("#GS-View-Assets").hide();
		$("#GS-transfer").hide();
	});
});

$(document).ready(function(){
		$("#gs-trans").click(function(){
		$("#GS-transfer").show();
		$("#GS-View-Assets").hide();
		$("#GS-Req-Items").hide();
		$("#GS-Req-list").hide();
	});
});

//HEAD / MANAGER (ASSET TAB)------------------------------------------------------------------
$(document).ready(function(){
		$("#hm-view-asset").click(function(){
		$("#HM-View-Assets").show();
		$("#HM-Req-Items").hide();
		$("#HM-Req-list").hide();
		$("#HM-transfer").hide();
	});
});

$(document).ready(function(){
		$("#hm-req-item").click(function(){
		$("#HM-Req-Items").show();
		$("#HM-Req-list").hide();
		$("#HM-View-Assets").hide();
		$("#HM-transfer").hide();
	});
});

$(document).ready(function(){
		$("#hm-req-list").click(function(){
		$("#HM-Req-Items").hide();
		$("#HM-Req-list").show();
		$("#HM-View-Assets").hide();
		$("#HM-transfer").hide();
	});
});

$(document).ready(function(){
		$("#hm-trans").click(function(){
		$("#HM-transfer").show();
		$("#HM-View-Assets").hide();
		$("#HM-Req-Items").hide();
		$("#HM-Req-list").hide();
	});
});

//HEAD / MANAGER (PROCUREMENT TAB)
$(document).ready(function(){
		$("#hm-list-req").click(function(){
		$("#HM-list-req").show();
		$("#HM-catalog").hide();
		$("#HM-purchase-order-list").hide();
		$("#HM-supp-contract").hide();
		$("#HM-summ-bid").hide();
	});
});

$(document).ready(function(){
		$("#hm-catalog").click(function(){
		$("#HM-catalog").show();
		$("#HM-purchase-order-list").hide();
		$("#HM-list-req").hide();
		$("#HM-supp-contract").hide();
		$("#HM-summ-bid").hide();
	});
});

$(document).ready(function(){
		$("#hm-purchase-order-list").click(function(){
		$("#HM-purchase-order-list").show();
		$("#HM-catalog").hide();
		$("#HM-list-req").hide();
		$("#HM-supp-contract").hide();
		$("#HM-summ-bid").hide();
	});
});

$(document).ready(function(){
		$("#hm-supp-contract").click(function(){
		$("#HM-supp-contract").show();
		$("#HM-list-req").hide();
		$("#HM-catalog").hide();
		$("#HM-purchase-order-list").hide();
		$("#HM-summ-bid").hide();
	});
});

$(document).ready(function(){
		$("#hm-summ-bid").click(function(){
		$("#HM-summ-bid").show();
		$("#HM-purchase-order-list").hide();
		$("#HM-list-req").hide();
		$("#HM-catalog").hide();
		$("#HM-supp-contract").hide();
	});
});

//PROCUREMENT OFFICER (ASSET TAB) -----------------------------------------------------------------
$(document).ready(function(){
		$("#pofficer-view-asset").click(function(){
		$("#PO-View-Assets").show();
		$("#PO-Req-Items").hide();
		$("#PO-Req-list").hide();
		$("#PO-transfer").hide();
	});
});

$(document).ready(function(){
		$("#pofficer-req-item").click(function(){
		$("#PO-Req-Items").show();
		$("#PO-Req-list").hide();
		$("#PO-View-Assets").hide();
		$("#PO-transfer").hide();
	});
});

$(document).ready(function(){
		$("#pofficer-req-list").click(function(){
		$("#PO-Req-Items").hide();
		$("#PO-Req-list").show();
		$("#PO-View-Assets").hide();
		$("#PO-transfer").hide();
	});
});

$(document).ready(function(){
		$("#pofficer-trans").click(function(){
		$("#PO-transfer").show();
		$("#PO-View-Assets").hide();
		$("#PO-Req-Items").hide();
		$("#PO-Req-list").hide();
	});
});

//PROCUREMEMENT OFFICER (PROCUREMENT TAB)
$(document).ready(function(){
		$("#pofficer-list-req").click(function(){
		$("#PO-list-req").show();
		$("#PO-catalog").hide();
		$("#PO-purchase-order-list").hide();
		$("#PO-supp-contract").hide();
		$("#PO-summ-bid").hide();
	});
});

$(document).ready(function(){
		$("#pofficer-catalog").click(function(){
		$("#PO-catalog").show();
		$("#PO-purchase-order-list").hide();
		$("#PO-list-req").hide();
		$("#PO-supp-contract").hide();
		$("#PO-summ-bid").hide();
	});
});

$(document).ready(function(){
		$("#pofficer-purchase-order-list").click(function(){
		$("#PO-purchase-order-list").show();
		$("#PO-catalog").hide();
		$("#PO-list-req").hide();
		$("#PO-supp-contract").hide();
		$("#PO-summ-bid").hide();
	});
});

$(document).ready(function(){
		$("#pofficer-supp-contract").click(function(){
		$("#PO-supp-contract").show();
		$("#PO-list-req").hide();
		$("#PO-catalog").hide();
		$("#PO-purchase-order-list").hide();
		$("#PO-summ-bid").hide();
	});
});

$(document).ready(function(){
		$("#pofficer-summ-bid").click(function(){
		$("#PO-summ-bid").show();
		$("#PO-purchase-order-list").hide();
		$("#PO-list-req").hide();
		$("#PO-catalog").hide();
		$("#PO-supp-contract").hide();
	});
});

//PROCUREMENT HEAD (ASSET TAB) -------------------------------------------------------------------
$(document).ready(function(){
		$("#phead-view-asset").click(function(){
		$("#PH-View-Assets").show();
		$("#PH-Req-Items").hide();
		$("#PH-Req-list").hide();
		$("#PH-transfer").hide();
	})
});

$(document).ready(function(){
		$("#phead-req-item").click(function(){
		$("#PH-Req-Items").show();
		$("#PH-Req-list").hide();
		$("#PH-View-Assets").hide();
		$("#PH-transfer").hide();
	});
});

$(document).ready(function(){
		$("#phead-req-list").click(function(){
		$("#PH-Req-Items").hide();
		$("#PH-Req-list").show();
		$("#PH-View-Assets").hide();
		$("#PH-transfer").hide();
	});
});

$(document).ready(function(){
		$("#phead-trans").click(function(){
		$("#PH-transfer").show();
		$("#PH-View-Assets").hide();
		$("#PH-Req-Items").hide();
		$("#PH-Req-list").hide();
	});
});

//PROCUREMEMENT HEAD (PROCUREMENT TAB)
$(document).ready(function(){
		$("#phead-list-req").click(function(){
		$("#PH-list-req").show();
		$("#PH-catalog").hide();
		$("#PH-purchase-order-list").hide();
		$("#PH-supp-contract").hide();
		$("#PH-summ-bid").hide();
	});
});

$(document).ready(function(){
		$("#phead-catalog").click(function(){
		$("#PH-catalog").show();
		$("#PH-purchase-order-list").hide();
		$("#PH-list-req").hide();
		$("#PH-supp-contract").hide();
		$("#PH-summ-bid").hide();
	});
});

$(document).ready(function(){
		$("#phead-purchase-order-list").click(function(){
		$("#PH-purchase-order-list").show();
		$("#PH-catalog").hide();
		$("#PH-list-req").hide();
		$("#PH-supp-contract").hide();
		$("#PH-summ-bid").hide();
	});
});

$(document).ready(function(){
		$("#phead-supp-contract").click(function(){
		$("#PH-supp-contract").show();
		$("#PH-list-req").hide();
		$("#PH-catalog").hide();
		$("#PH-purchase-order-list").hide();
		$("#PH-summ-bid").hide();
	});
});

$(document).ready(function(){
		$("#phead-summ-bid").click(function(){
		$("#PH-summ-bid").show();
		$("#PH-purchase-order-list").hide();
		$("#PH-list-req").hide();
		$("#PH-catalog").hide();
		$("#PH-supp-contract").hide();
	});
});





document.addEventListener("DOMContentLoaded", function() {
	var tabs = document.querySelectorAll('#tabbed li');

		for (var i = 0, len = tabs.length; i < len; i++) {
			tabs[i].addEventListener("click", function() {
				if (this.classList.contains('active'))
					return;

				var parent = this.parentNode,
					innerTabs = parent.querySelectorAll('li');

				for (var index = 0, iLen = innerTabs.length; index < iLen; index++) {
					innerTabs[index].classList.remove('active');
					}

				this.classList.add('active');
		});
	}
});