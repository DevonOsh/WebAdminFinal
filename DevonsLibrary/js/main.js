var mainCtrl = (function(){

	var bookDataSource = new kendo.data.DataSource({
		transport: {
			read: {
				url: "http://www.devonosh.lsc/WebAdminFinal/DevonsLibrary/data/data.php",
				type: "post",
				dataType: "jsdon"
			}
		}
	});

	function createListView() {
		$("#bookListView").kendoListView({
			template: "<li>${title}</li>",
			dataSource: bookDataSource
		});
	}

	return {
		createListView: createListView
	}
})();