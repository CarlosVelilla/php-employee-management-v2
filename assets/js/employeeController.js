const BASE_ENDPOINT = document.getElementById('navRef').dataset["url"]

export const controller = {
  // loadData: function () {
  //   var d = $.Deferred()

  //   $.ajax({
  //     url: 'resources/employees.json',
  //     dataType: 'json',
  //     success: function (data) {
  //       d.resolve(data)
  //     },
  //     error: function (xhr, exception) {
  //       alert('Error: ' + xhr + ' ' + exception)
  //     },
  //   })

  //   return d.promise()
  // },

  loadData: () =>
    fetch(BASE_ENDPOINT + "main/getEmployees", {
      headers: {
        "X-Requested-With": "XMLHttpRequest",
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

  deleteItem: function (item) {
    var d = $.Deferred()
    $.ajax({
      type: 'DELETE',
      url: '../src/library/employeeController.php',
      data: { id: item.id },
      success: function (data) {
        d.resolve(data)
      },
      error: function (xhr, exception) {
        alert('Error: ' + xhr + ' ' + exception)
      },
    })
    $('#employees').jsGrid('render')

    return d.promise()
  },
  updateItem: function (item) {
    var d = $.Deferred()
    $.ajax({
      type: 'PUT',
      url: '../src/library/employeeController.php',
      data: item,
      success: function (data) {
        d.resolve(data)
      },
      error: function (xhr, exception) {
        alert('Error: ' + xhr + ' ' + exception)
      },
    })
    $('#employees').jsGrid('render')

    return d.promise()
  },
}