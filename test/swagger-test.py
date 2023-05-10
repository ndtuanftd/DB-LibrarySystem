import requests

url = 'http://103.143.143.211/crawl-user-profile'

body = {
  "user": 'mask',
  "file": 'fdsfdf'
}


crawler_profile = requests.post(url)

print(crawler_profile.text)