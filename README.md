# CSC-648-Team-03-Project

## Installation

In order to install this project on a server, run the following commands:

```
git clone [url]
git checkout devel
git pull
cd CSC-648-Team-03-Project/my_app_name
composer update
cp config/app.default.php config/app.php
mkdir logs tmp
chmod 777 logs tmp
```

Eventually a better solution than allowing anyone to read/edit logs and tmp.
