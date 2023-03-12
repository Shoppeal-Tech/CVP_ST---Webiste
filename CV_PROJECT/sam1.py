"""import gdown
url = 'https://drive.google.com/uc?id=17Xg9TVYa0JT5T_DHIIhEA0a69qyzSqEP'
type1='pdf'
output = 'file_name1.'+type1

gdown.download(url, output, quiet=False)
import requests

# The URL of the file to download from Google Drive
file_url = "https://drive.google.com/uc?id=17Xg9TVYa0JT5T_DHIIhEA0a69qyzSqEP"

# The file name to save the downloaded file as
file_name = "downloaded_file.pdf"

# Send a GET request to the file URL and save the content of the response to a file on the client's machine
response = requests.get(file_url)
with open(file_name, "wb") as f:
    f.write(response.content)

print("File downloaded successfully!")
import gdown
from flask import Flask, send_file

app = Flask(__name__)

@app.route("/download")
def download_file():
    # Download the file from Google Drive using gdown
    url = 'https://drive.google.com/uc?id=17Xg9TVYa0JT5T_DHIIhEA0a69qyzSqEP'
    output = 'file_name11.pdf'
    gdown.download(url, output, quiet=False)

    # Send the file to the client
    return send_file(output, as_attachment=True)"""
import urllib.request
import sys
url = sys.argv[1]
type=sys.argv[2]
urllib.request.urlretrieve(url, type)


