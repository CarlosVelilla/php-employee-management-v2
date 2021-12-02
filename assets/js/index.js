/* function jsonToFormData(item) {
  var formData = new FormData();
  for (const value in item) {
    formData.append(value, item[value]);
    console.log(item[value]);
  }
  return formData;
} */

import { controller } from "./employeeController.js";

const BASE_ENDPOINT = document.getElementById('navRef').dataset["url"]

$('#employees').jsGrid({
	width: '80%',
	editing: true,
	inserting: true,
	sorting: true,
	paging: true,
	autoload: true,

	pageSize: 15,
	pageButtonCount: 5,

	deleteConfirm: 'Do you really want to delete the client?',
	rowClick: function ({ item, itemIndex, event }) {
		let id = ''
		
		this.data.forEach((element) => {
			if (item.id == element.id) id = item.id
		})
		
		// console.log(this.data);
		// console.log(item);
		// console.log(id);

		window.location = BASE_ENDPOINT + 'employee/showEmployee/' + id
	},
	onItemDeleted: () => {
		Toastify({
			text: 'Deleted Succesful!',
			close: true,
			style: {
				background: '#1E5128',
				color: 'white',
			},
			offset: {
				x: 50, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
				y: 10, // vertical axis - can be a number or a string indicating unity. eg: '2em'
			},
		}).showToast()
	},
	onItemInserted: () => {
		Toastify({
			text: 'Insert Succesful!',
			close: true,
			style: {
				background: '#1E5128',
				color: 'white',
			},
			offset: {
				x: 50, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
				y: 10, // vertical axis - can be a number or a string indicating unity. eg: '2em'
			},
		}).showToast()
	},
	onItemUpdated: () => {
		Toastify({
			text: 'Updated Succesful!',
			close: true,
			style: {
				background: '#1E5128',
				color: 'white',
			},
			offset: {
				x: 50, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
				y: 10, // vertical axis - can be a number or a string indicating unity. eg: '2em'
			},
		}).showToast()
	},

	controller: controller,

	fields: [
		{
			name: 'name',
			type: 'text',
			width: 100,
			title: 'Name',
			validate: 'required',
		},
		{
			name: 'email',
			type: 'text',
			width: 150,
			title: 'Email',
			validate: {
				validator: 'pattern',
				message: 'Invalid Email',
				param:
					'^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$',
			},
		},
		{
			name: 'age',
			type: 'number',
			width: 50,
			title: 'Age',
			validate: {
				validator: 'range',
				message: function (value, item) {
					return (
						'The client age should be between 18 and 99. Entered age is "' +
						value +
						'" is out of specified range.'
					)
				},
				param: [18, 99],
			},
		},
		{
			name: 'streetAddress',
			type: 'number',
			width: 60,
			title: 'Street No.',
			validate: 'required',
		},
		{
			name: 'city',
			type: 'text',
			width: 100,
			title: 'City',
			validate: 'required',
		},
		{
			name: 'state',
			type: 'text',
			width: 50,
			title: 'State',
			validate: 'required',
		},
		{
			name: 'postalCode',
			type: 'number',
			width: 50,
			title: 'Postal Code',
			validate: 'required',
		},
		{
			name: 'phoneNumber',
			type: 'number',
			width: 65,
			title: 'Phone Number',
			validate: 'required',
		},
		{ type: 'control' },
	],
})
