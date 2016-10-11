#installer nodejs og npm
`sudo apt-get install nodejs`

#symlink nodejs til node
`ln -s /usr/bin/nodejs /usr/bin/node`

#installer bower globalt
`sudo npm install -g bower`

#installer grunt-cli globalt
`sudo npm install -g grunt-cli`

#installer composer lokalt
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

#installer ruby (nødvendig for sass)
`sudo apt-get install ruby`

#install sass
`sudo su -c "gem install sass"`

#installer/oppdater dependencies
`./update-dependencies.sh`
