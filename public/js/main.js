function split(value) {
  value = value.replace( /\,/g, "") 
  var x = value.split( '.' )
  var x1 = x[0]
  var x2 = x.length > 1 ? '.' + x[1] : ''
  var rgx = /(\d+)(\d{3})/

  while ( rgx.test(x1) ) { 
    x1 = x1.replace(rgx, '$1' + ',' + '$2')
  }

  return [x1, x2] 
}


// format price digits; add , to price digits
function formatInputPrice(input) {
  var [x1, x2] = split(input.value)
  input.value = x1 + x2
}

function formatElementPrice(element) {
  var [x1, x2] = split(element.text())
  element.text(x1 + x2) 
}

// remove , from price digits
function unFormatPrice() {
  var value = price.value
  var newValue = value.replace( /\,/g, "");
  price.value = newValue
}