// Функция для загрузки видео
async function loadVideoData() {
    const response = await fetch('/get_videos');
    const videoData = await response.json();

    const videoQueueContainer = document.getElementById('video-queue');
    videoQueueContainer.innerHTML = ""; // Очистить перед добавлением

    // Заполнение очереди видео
    videoData.forEach(video => {
        const li = document.createElement('li');
        li.textContent = video.title;

        // При клике на название видео обновляем источник в плеере
        li.onclick = () => {
            document.getElementById("video-source").src = video.url;
            document.getElementById("current-video").load();
        };

        videoQueueContainer.appendChild(li);
    });

    // Автоматически загрузить первое видео в очередь (если есть)
    if (videoData.length > 0) {
        document.getElementById("video-source").src = videoData[0].url;
        document.getElementById("current-video").load();
    }
}

// Обработчик отправки формы загрузки видео
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
        loadVideoData(); // Перезагрузить список видео после загрузки
    })
    .catch(error => console.error('Ошибка загрузки видео:', error));
});

// Загрузка видео при загрузке страницы
window.onload = loadVideoData;