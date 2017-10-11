$(document)
.on('submit', 'form.js-register', function(event) {
    event.preventDefault();

    var _form = $(this);
    var _error = $('.js-error', _form);
    var dataObj = {
      email: $("input[type='email']", _form).val(),
      password: $("input[type='password']", _form).val()
    };

    if(dataObj.email.length < 6) {
      _error.text('Vlozte platnou emailovou adresu').show();
      return false;
    } else if (dataObj.password.length < 11) {
      _error.text('Pouzijte heslo delsi nez 10 znaku').show();
      return false;
    }

    //so we got this far, lets start some AJAX
    _error.hide();

    $.ajax({
      type: 'POST',
      url: 'ajax/register.php',
      data: dataObj,
      dataType: 'json',
      async: true,
    })
    .done(function ajaxDone(data) {
        // whatever is data
        console.log(data);
        if(data.redirect !== undefined) {
          window.location = data.redirect;
        }
    })
    .fail(function ajaxFailed(e) {
        //failed
        console.log(e);
    })
    .always(function ajaxAlwaysDoThis(data) {
        //always do this
        console.log('Always');
    })
    return false;
})
