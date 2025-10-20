from flask import Flask, jsonify, request

app = Flask(__name__)

@app.route("/api/hello",methods=["GET"])
def hello():
    return jsonify({"message": "Hello from Python API!"})

@app.route("/api/sum",methods=["POST"])
def calc_sum():
    data = request.get_json()
    return jsonify({"sum": data["a"] + data["b"]})

if __name__ == "__main__":
    app.run(host="127.0.0.1",port = 5000)