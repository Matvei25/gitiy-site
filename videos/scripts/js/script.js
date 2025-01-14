document.getElementById('upload-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Предотвратить обычное отправление формы
    const formData = new FormData(this);

    fetch('/upload_video', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        loadVideoData(); // Перезагрузить список видео
    })
    .catch(error => console.error('Ошибка загрузки видео:', error));
});