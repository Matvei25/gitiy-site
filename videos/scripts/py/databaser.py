import os
from flask import Flask, request, jsonify

app = Flask(__name__)
UPLOAD_FOLDER = './static/videos/'  # Папка для сохранения загруженных видео
app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER

if not os.path.exists(UPLOAD_FOLDER):
    os.makedirs(UPLOAD_FOLDER)

@app.route('/upload_video', methods=['POST'])
def upload_video():
    if 'video' not in request.files:
        return jsonify({"message": "Не удалось загрузить файл."}), 400

    file = request.files['video']

    if file.filename == '':
        return jsonify({"message": "Не выбран файл для загрузки."}), 400

    if file and file.filename.endswith('.mp4'):
        file_path = os.path.join(app.config['UPLOAD_FOLDER'], file.filename)
        file.save(file_path)
        return jsonify({"message": "Видео успешно загружено."}), 201
    else:
        return jsonify({"message": "Неверный формат файла. Пожалуйста, загрузите MP4."}), 400

@app.route('/get_videos', methods=['GET'])
def get_videos():
    video_dir = app.config['UPLOAD_FOLDER']
    video_files = []

    # Получаем список файлов в директории
    for filename in os.listdir(video_dir):
        if filename.endswith('.mp4'):
            video_url = f"/static/videos/{filename}"  # Укажите правильный URL
            video_files.append({
                "title": filename,
                "url": video_url
            })

    return jsonify(video_files)

if __name__ == "__main__":
    app.run(debug=True)