from flask import Flask
import MySQLdb

app = Flask(__name__)

@app.route('/')
def home():
    return "¡Hola desde Flask en Docker!"
    
@app.route('/test-db')   
def test_db():
    try:
        db = MySQLdb.connect(
            host="db",
            user="root",
            passwd="my-secret-pw",
            db="app_db"
        )
        cursor = db.cursor()
        cursor.execute("SELECT VERSION()")
        version = cursor.fetchone()
        db.close()
        return f"MySQL version: {version[0]}"
    except MySQLdb.Error as e:
        return f"Error connecting to MySQL: {e}"

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80)  # Asegúrate de usar el puerto 80 aquí
