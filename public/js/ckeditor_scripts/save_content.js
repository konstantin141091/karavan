// Скрипт для сохранения введеного текста
const csrf = document.getElementById('admin-csrf')[0].value;
const btn = document.getElementById('admin-save');
btn.addEventListener('click', (event) => {
  let elements = CKEDITOR.instances;
  let data = [];
  for (let el in elements) {
    let data_dir = document.getElementById(el).getAttribute('data-dir');
    let text = document.getElementById(el).textContent;
    data.push([el, data_dir, text])
  }

  fetch('/myCabinet21/edit', {
    method: 'post',
    headers: {
      'Accept': 'application/json, text/plain, */*',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      _token: csrf,
      contents: data
    })
  }).then((response) => {
    // return response.status;
    if(response.status === 204) {
      let msg = document.getElementById('admin-msg');
      console.log(msg);
      msg.style.display = 'block';
      setTimeout(() => {
        msg.style.display = 'none';
      }, 2000)
    }
  });
})
