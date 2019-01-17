# Product Service
# Import framework
from flask import Flask
from flask_restful import Resource, Api

# Instantiate app
app = Flask(__name__)
api = Api(app)


class Agenda(Resource):
    def get(self):
        return {
            'agenda': ['1. Senin / 14 Januari 2019 - Maintenance Ruang Kuliah',
			'2. Selasa / 15 Januari 2019 - Pemasangan Jaringan Gedung BC Lt. 4',
			'3. Jumat / 18 Januari 2019 - Responsi PTCC',
			'4. Sabtu / 19 Januari 2019 - Libur',
			'5. Minggu / 20 Januari 2019 - Libur',
			'6. Contoh informasi dari luar, kunjungi: <a href="https://www.google.com">Contoh link url</a>',
			'7. Penambahan agenda baru']
        }
		
# Script untuk membuat routes
api.add_resource(Agenda, '/')

# Script untuk menjalankan Aplikasi
if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)

