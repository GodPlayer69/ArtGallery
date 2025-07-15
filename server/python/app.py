from flask import Flask, jsonify
app = Flask(__name__)

@app.route('/api/artworks')
def artworks():
    return jsonify([{"title": "Sunset", "artist": "Jane Doe"}])

if __name__ == '__main__':
    app.run(debug=True)