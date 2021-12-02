const BASE_ENDPOINT = document.getElementById('navRef').dataset['url']

export const controller = {
	loadData: () =>
		fetch(BASE_ENDPOINT + 'main/getEmployees', {
			headers: {
				'X-Requested-With': 'XMLHttpRequest',
			},
		}).then((response) => response.json()),

	insertItem: function (item) {
		var d = $.Deferred()

		$.ajax({
			type: 'POST',
			url: '../src/library/employeeController.php',
			data: item,
			success: function (data) {
				d.resolve(data)
			},
			error: function (xhr, exception) {
				alert('Error: ' + xhr + ' ' + exception)
			},
		})

		$('#employees').jsGrid('refresh')
		$('#employees').jsGrid('render')

		return d.promise()
	},
	deleteItem: (item) => {
		fetch(BASE_ENDPOINT + `main/deleteEmployee/${item['id']}`, {
			headers: {
				'X-Requested-With': 'XMLHttpRequest',
			},
		})
	},
	updateItem: (item) => {
		fetch(BASE_ENDPOINT + `main/updateEmployee/`, {
			method: 'PUT',
			headers: {
				'Content-Type': 'application/json',
				'X-Requested-With': 'XMLHttpRequest',
			},
			body: JSON.stringify(item),
		}).then((response) => response.json())
	},

	// updateItem: function (item) {
	// 	var d = $.Deferred()
	// 	$.ajax({
	// 		type: 'PUT',
	// 		url: '../src/library/employeeController.php',
	// 		data: item,
	// 		success: function (data) {
	// 			d.resolve(data)
	// 		},
	// 		error: function (xhr, exception) {
	// 			alert('Error: ' + xhr + ' ' + exception)
	// 		},
	// 	})
	// 	$('#employees').jsGrid('render')

	// 	return d.promise()
	// },
}
