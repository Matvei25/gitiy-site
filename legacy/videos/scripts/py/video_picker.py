import os
import json
from flask import Flask, send_from_directory

app = Flask(__name__)

@app.route('/get_videos', methods=['GET'])
def get_videos():
    video_dir = './static/videos/'
    video_files = []

    # Получаем список файлов в директории
    for filename in os.listdir(video_dir):
        if filename.endswith('.mp4'):
            video_url = f"{video_dir}{filename}"
            video_files.append({
                "title": filename,
                "url": video_url.replace('\\', '/')
            })

    return json.dumps(video_files)

if __name__ == "__main__":
    app.run(debug=True)