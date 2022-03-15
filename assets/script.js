let textarea = $('textarea')
let uri = window.location.href.split('/').pop()

console.log(uri)

setInterval(() => {

   $.ajax({
      url: 'save-text.php',
      method: 'POST',
      data: {
         content: textarea.val(),
         uri: uri
      },
      error: () => alert('Não foi possivel salvar o conteúdo 😿')
   })

}, 1000)