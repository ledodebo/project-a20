import os
import requests
while True:
    URL = "http://localhost/aarow/value.txt"
    page = requests.get(URL)
    a = page.text
    if a == "offline":
        URL = "http://localhost/aarow/?name=null"
        page = requests.get(URL)
        os.system("shutdown /s")

    if a == "restart":
        if a == "offline":
            URL = "http://localhost/aarow/?name=null"
            page = requests.get(URL)
            os.system("shutdown /r")
    else:
        continue
